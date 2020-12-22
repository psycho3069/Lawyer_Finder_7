<?php

namespace App\Http\Controllers;

use App\User;
use App\Court;
use App\Lawyer;
use App\Client;
use App\Rating;
use App\CaseFile;
use App\Specialty;
use App\Division;
use App\District;
use App\DegreeLevel;
use App\DegreeCategory;
use App\Education;
use App\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Support\Str;

class LawyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('layouts.admin.lawyers',compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyer $lawyer)
    {
        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;
        $ratings = Rating::where('taker_id',$lawyer->id)->get();

        if (auth()->user()->type == 'client') {
            $client = Client::where('user_id',auth()->user()->id)->first();
            return view('layouts.user.lawyer.show',compact('lawyer','active','client','ratings'));
        } elseif(auth()->user()->type == 'admin'){
            return view('layouts.user.lawyer.show',compact('lawyer','active','ratings'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(auth()->user()->id);
        $courts = Court::all();
        $divisions = Division::all();
        $districts = District::all();
        $degree_levels = DegreeLevel::all();
        $degree_categories = DegreeCategory::all();
        $educations = Education::all();
        $specialties = Specialty::all();
        $boards = Board::all();
        return view('layouts.user.lawyer.lawyer-edit',compact('user','courts','specialties','divisions','districts','degree_levels','degree_categories','educations','boards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:100', Rule::unique('a1_users')->ignore($id)],
            'contact' => ['required', 'numeric', 'min:1000000000'],
            'location' => ['required', 'string', 'max:100'],
            'birthdate' => ['required', 'date', 'max:100'],
            'type' => ['required'],
            'gender' => ['required'],
            'specialties_id' => ['required'],
            'member_id' => ['nullable','numeric','digits:4'],
            
            'ssc_year' => 'nullable|numeric',
            'ssc_board' => Rule::requiredIf($request->ssc_year != NULL),
            'ssc_result' => Rule::requiredIf($request->ssc_year != NULL),

            'hsc_year' => 'nullable|numeric',
            'hsc_board' => Rule::requiredIf($request->hsc_year != NULL),
            'hsc_result' => Rule::requiredIf($request->hsc_year != NULL),

            'degree_level' => 'nullable|numeric',
            'degree_category' => Rule::requiredIf($request->degree_level != NULL),
            'uni' => Rule::requiredIf($request->degree_level != NULL),
            'sub' => Rule::requiredIf($request->degree_level != NULL),
            'degree_year' => Rule::requiredIf($request->degree_level != NULL),
            'degree_result' => Rule::requiredIf($request->degree_level != NULL),
            
        ]);

        // if there is a [file]
        if ($request->hasFile('profile_picture')) {
            // allowed extensions
            $allowed_images = Chatify::getAllowedImages();

            $file = $request->file('profile_picture');
            // if size less than 50MB
            // return $file->getSize();
            if ($file->getSize() < 50000000) {
                if (in_array($file->getClientOriginalExtension(), $allowed_images)) {
                    // ----------delete the older one----------
                    if (auth()->user()->avatar != config('chatify.user_avatar.default')) {
                        $path = storage_path('app/public/' . config('chatify.user_avatar.folder') . '/' . auth()->user()->avatar);
                        if (file_exists($path)) {
                            @unlink($path);
                        }
                    }
                    
                    // ----------upload----------
                    $avatar = Str::uuid() . "." . $file->getClientOriginalExtension();
                    $update = User::where('id', auth()->user()->id)->update(['avatar' => $avatar]);
                    $file->storeAs("public/" . config('chatify.user_avatar.folder'), $avatar);
                    $success = $update ? 1 : 0;
                } else {
                    if (\App::isLocale('en')) {
                        $msg = "File extension not allowed!";
                    } else{
                        $msg = "ফাইল এর ধরন অনুমোদিত না!";
                    }
                    return back()->withErrors($msg);
                }
            } else {
                if (\App::isLocale('en')) {
                    $msg = "Uploaded File is too large!";
                } else{
                    $msg = "আপলোড করা ফাইলটি খুব বড়!";
                }
                return back()->withErrors($msg);
            }
        }


        if ($validator->fails()) {
            // return $request;
            return back()->withErrors($validator->errors());
        } else {
            // return $request;
            // return Lawyer::where('id', auth()->user()->lawyer->id)->first();
            User::where('id', $id)->first()->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'contact' => $request['contact'],
                'location' => $request['location'],
                'district_id' => $request['district_id'],
                'birthdate' => $request['birthdate'],
                'gender' => $request['gender'],
            ]);
            Lawyer::where('id', auth()->user()->lawyer->id)->first()->update([
                'member_id' => $request['member_id'],
                'type' => $request['type'],
                'specialties_id' => $request['specialties_id'],
                'profile_bio' => $request['profile_bio'],
                'member_id' => $request['member_id'],
            ]);
            Education::where('id', auth()->user()->education->id)->first()->update([
                'ssc_year' => $request->ssc_year,
                'ssc_board_id' => $request->ssc_board,
                'ssc_result' => $request->ssc_result,
                'hsc_year' => $request->hsc_year,
                'hsc_board_id' => $request->hsc_board,
                'hsc_result' => $request->hsc_result,
                'degree_category_id' => $request->degree_category,
                'uni' => $request->uni,
                'sub' => $request->sub,
                'degree_year' => $request->degree_year,
                'degree_result' => $request->degree_result,
            ]);

            if (\App::isLocale('en')) {
                return back()->with('status','Lawyer Profile has been updated successfully!');
            } else{
                return back()->with('status','আইনজীবী প্রোফাইল সফলভাবে পরিমার্জিত হয়েছে!');
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lawyer  $lawyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lawyer $lawyer)
    {
        //
    }

    public function lawyerRequestCase(Request $request){

        // return $request;

        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        $users = User::get();
        $user_cases = [];
        $courts = Court::get();
        $lawyers = Lawyer::get();
        $requests = \App\Request::get();
        $feedback = '';

        $lawyer_id = $request->lawyer_id;
        $client_id = Client::where('user_id',auth()->user()->id)->first()->id;

        $query = CaseFile::where('client_id', $client_id)->where('result','waiting');
        $client_cases = $query->count();

        $req = \App\Request::where('client_id',$client_id)->where('lawyer_id',$lawyer_id);
        $count_waiting = $req->where('state','waiting')->count();
        $count_rejected = $req->where('state','rejected')->count();
        $count_accepted = $req->where('state','accepted')->count();

        if ($count_waiting == 0 && $count_rejected == 0) {
            if ($client_cases == 1) {
                $case_id = $query->get()->first()->id;
                \App\Request::create([
                    'state'         => 'pending',
                    'client_id'     => $client_id,
                    'casefile_id'   => $case_id,
                    'lawyer_id'     => $lawyer_id,
                ]);

                if (\App::isLocale('en')) {
                    $request->session()->flash('success', 'Request submitted successfully');
                } else{
                    $request->session()->flash('success', 'অনুরোধ সফলভাবে জমা দেওয়া হয়েছে');
                }

                return back();

            } else if ($client_cases < 1) {
                if (\App::isLocale('en')) {
                    $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have at least one \'waiting\' case. Please create/open a Case first!');
                } else{
                    $request->session()->flash('failed', 'দুঃখিত, অনুরোধ জমা দেওয়া যাবে না! আপনার অবশ্যই কমপক্ষে একটি \'অপেক্ষমাণ(waiting)\' মামলা থাকা উচিত। দয়া করে প্রথমে একটি মামলা খুলুন!');
                }

                return back();

            } else if ($client_cases > 1) {
                if (\App::isLocale('en')) {
                    $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have one and only one \'waiting\' case');
                } else{
                    $request->session()->flash('failed', 'দুঃখিত, অনুরোধ জমা দেওয়া যাবে না! আপনার অবশ্যই কমপক্ষে একটি এবং একমাত্র একটি \'অপেক্ষমাণ(waiting)\' মামলা থাকা উচিত।');
                }
                
                return back();
            }
        } else if($count_waiting == 1 && $count_rejected == 0) {
            if (\App::isLocale('en')) {
                $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! Wait for the response!');
            } else{
                $request->session()->flash('failed', 'দুঃখিত, আপনি ইতিমধ্যে এই আইনজীবিকে অনুরোধ করেছেন! অপেক্ষায় থাকুন!');
            }
            
            return back();

        } else if($count_waiting == 0 && $count_rejected == 1) {
            if (\App::isLocale('en')) {
                $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! The Lawyer rejected your case!');
            } else{
                $request->session()->flash('failed', 'দুঃখিত, আপনি ইতিমধ্যে এই আইনজীবিকে অনুরোধ করেছেন! আইনজীবী আপনার মামলা গ্রহণ করেননি!');
            }
            
            return back();
        }
    }

    public function lawyerRequestDecide(Request $request){
        $request->all();
        $req = \App\Request::find($request->req_id);

        if ($request->approve) {

            $result1 = CaseFile::find($req->casefile_id)->update([
                'lawyer_id' => $req->lawyer_id,
                'result' => 'running',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'accepted',
                'updated_at' => now()
            ]);

            $result3 = \App\Request::where('casefile_id',$req->casefile_id)
                                        ->where('state','pending')
                                        ->delete();

            if (\App::isLocale('en')) {
                $request->session()->flash('approve', 'Request approved successfully');
            } else{
                $request->session()->flash('approve', 'অনুরোধ সফলভাবে অনুমোদিত হয়েছে');
            }

        } else if(!$request->approve){

            $result = \App\Request::find($req->id)->update([
                'state' => 'rejected',
                'updated_at' => now()
            ]);

            if (\App::isLocale('en')) {
                $request->session()->flash('decline', 'Request declined successfully');
            } else{
                $request->session()->flash('decline', 'অনুরোধ সাফল্যের সাথে প্রত্যাখ্যান হয়েছে');
            }
            
        }

        return back();
    }

    public function lawyerResultDecide(Request $request){
        // return $request->all();
        $req = \App\Request::find($request->req_id);

        if ($request->result) {

            $result1 = CaseFile::find($req->casefile_id)->update([
                'result' => 'won',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'closed',
                'updated_at' => now()
            ]);

            if (\App::isLocale('en')) {
                $request->session()->flash('won', 'Case result set as WON');
            } else{
                $request->session()->flash('won', 'মামলা ফলাফল WON হিসাবে সেট করা হয়েছে');
            }

        } else if(!$request->result){

            $result1 = CaseFile::find($req->casefile_id)->update([
                'result' => 'lost',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'closed',
                'updated_at' => now()
            ]);
            if (\App::isLocale('en')) {
                $request->session()->flash('lost', 'Case result set as LOST');
            } else{
                $request->session()->flash('lost', 'মামলা ফলাফল LOST হিসাবে সেট করা হয়েছে');
            }
            
        }

        return back();
    }

    public function verifyAccount(Lawyer $lawyer)
    {
        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 0;
        $active['profile'] = 1;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        return view('layouts.user.lawyer.verify',compact('lawyer','active'));
        
    }

    public function upload_nid(Request $request, $id)
    {

        // if there is a [file]
        if ($request->hasFile('nid_front') && $request->hasFile('nid_back')) {
            // allowed extensions
            // $allowed_images = Chatify::getAllowedImages();

            $file1 = $request->file('nid_front');
            $file2 = $request->file('nid_back');
            // if size less than 50MB
            // return $file1->getSize().' '.$file2->getSize();
            if ($file1->getSize() < 50000000) {
                if (in_array($file1->getClientOriginalExtension(), ['png','jpg','jpeg','bmp','PNG','JPG','JPEG','BMP'])) {
                    // ----------delete the older one----------
                    if (auth()->user()->lawyer->nid_front != 'nid_front.png') {
                        $path = storage_path('app/public/nid/' . auth()->user()->lawyer->nid_front);
                        if (file_exists($path)) {
                            @unlink($path);
                        }
                    }
                    
                    // ----------upload----------
                    $nid_front = Str::uuid() . "." . $file1->getClientOriginalExtension();
                    $update = Lawyer::find($id)->update(['nid_front' => $nid_front]);
                    $file1->storeAs("public/nid/" , $nid_front);
                    $success = $update ? 1 : 0;
                } else {
                    if (\App::isLocale('en')) {
                        $msg = "Front Image File extension not allowed!";
                    } else{
                        $msg = "সামনের চিত্রটির ধরন অনুমোদিত না!";
                    }
                    return back()->withErrors($msg);
                }
            } else {
                if (\App::isLocale('en')) {
                    $msg = "Front Image is too large! Maximum 50MB is allowed!";
                } else{
                    $msg = "সামনের চিত্রটি খুব বড়! সর্বোচ্চ 50MB অনুমোদিত!";
                }
                return back()->withErrors($msg);
            }

            // return $file2->getSize();
            if ($file2->getSize() < 50000000) {
                if (in_array($file2->getClientOriginalExtension(), ['png','jpg','jpeg','PNG','JPG','JPEG'])) {
                    // ----------delete the older one----------
                    if (auth()->user()->lawyer->nid_back != 'nid_back.png') {
                        $path = storage_path('app/public/nid/' . auth()->user()->lawyer->nid_back);
                        if (file_exists($path)) {
                            @unlink($path);
                        }
                    }
                    
                    // ----------upload----------
                    $nid_back = Str::uuid() . "." . $file2->getClientOriginalExtension();
                    $update = Lawyer::find($id)->update(['nid_back' => $nid_back]);
                    $file2->storeAs("public/nid/" , $nid_back);
                    $success = $update ? 1 : 0;
                } else {
                    if (\App::isLocale('en')) {
                        $msg = "Back Image File extension not allowed!";
                    } else{
                        $msg = "পিছনের চিত্রটির ধরন অনুমোদিত না!";
                    }
                    
                    return back()->withErrors($msg);
                }
            } else {
                if (\App::isLocale('en')) {
                    $msg = "Back Image is too large! Maximum 50MB is allowed!";
                } else{
                    $msg = "পিছনের চিত্রটি খুব বড়! সর্বোচ্চ 50MB অনুমোদিত!";
                }
                
                return back()->withErrors($msg);
            }
        } else{
            // return $request;
            if ($request->hasFile('nid_back')) {
                if (\App::isLocale('en')) {
                    $msg = "Please Upload the Front view of your NID Card!";
                } else{
                    $msg = "আপনার এনআইডি কার্ডের সামনের দৃশ্য আপলোড করুন!";
                }
                
            } else if($request->hasFile('nid_front')){
                if (\App::isLocale('en')) {
                    $msg = "Please Upload the Back view of your NID Card!";
                } else{
                    $msg = "আপনার এনআইডি কার্ডের পিছনের দৃশ্যটি আপলোড করুন!";
                }
                
            } else{
                if (\App::isLocale('en')) {
                    $msg = "Please Upload the Front and Back views of your NID Card!";
                } else{
                    $msg = "আপনার এনআইডি কার্ডের সামনের এবং পিছনের দৃশ্যগুলি আপলোড করুন!";
                }
                
            }
            
            return back()->withErrors($msg);
        }

        Lawyer::find($id)->update([
            'admin_approval' => 1,
        ]);

        if (\App::isLocale('en')) {
            return back()->with('status','NID pictures has been uploaded successfully!');
        } else{
            return back()->with('status','এনআইডি ছবি সফলভাবে আপলোড করা হয়েছে!');
        }
        
    }

    public function verify(Lawyer $lawyer)
    {
        // return $lawyer;
        return view('layouts.admin.lawyer-verification',compact('lawyer'));
    }

    public function lawyerVerifyDecide(Request $request){
        // $request->all();

        if ($request->approve == 2) {

            $result1 = Lawyer::find($request->lawyer_id)->update([
                'admin_approval' => 2,
                'updated_at' => now()
            ]);

            if (\App::isLocale('en')) {
                $request->session()->flash('approve', 'Lawyer account has been approved successfully');
            } else{
                $request->session()->flash('approve', 'আইনজীবীর অ্যাকাউন্ট সফলভাবে অনুমোদিত হয়েছে');
            }

        } else if ($request->approve == 3) {

            $result1 = Lawyer::find($request->lawyer_id)->update([
                'admin_approval' => 3,
                'updated_at' => now()
            ]);
            if (\App::isLocale('en')) {
                $request->session()->flash('decline', 'Lawyer account has been declined successfully');
            } else{
                $request->session()->flash('decline', 'আইনজীবীর অ্যাকাউন্ট সাফল্যের সাথে প্রত্যাখ্যান করা হয়েছে');
            }
            
        }

        return back();
    }

    public function verifyRecheck(Lawyer $lawyer){

        $result1 = Lawyer::find($lawyer->id)->update([
            'admin_approval' => 1,
            'updated_at' => now()
        ]);

        return back();
    }

    public function getCategories(Request $request)
    {
        // return $request->degree_level;
        $degree_categories = DegreeCategory::where('degree_level_id',$request->degree_level)->get();
        return $degree_categories;
    }
}
