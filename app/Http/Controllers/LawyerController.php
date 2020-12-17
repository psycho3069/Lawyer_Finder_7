<?php

namespace App\Http\Controllers;

use App\User;
use App\Court;
use App\Lawyer;
use App\Client;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Specialty;
use App\Division;
use App\District;
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
        $specialties = Specialty::all();
        return view('layouts.user.lawyer.lawyer-edit',compact('user','courts','specialties','divisions','districts'));
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
                    $msg = "File extension not allowed!";
                    return back()->withErrors($msg);
                }
            } else {
                $msg = "File is too large!";
                return back()->withErrors($msg);
            }
        }


        if ($validator->fails()) {
            // return $request;
            return back()->withErrors($validator->errors());
        } else {
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
                'type' => $request['type'],
                'specialties_id' => $request['specialties_id'],
                'profile_bio' => $request['profile_bio'],
                // 'court_id' => $request['court_id'],
            ]);
            return back()->with('status','Lawyer Profile has been updated successfully!');
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

                // $client_case = $query->get()[0]->update([
                //     'lawyer_id' => $request->lawyer_id,
                //     'result' => 'pending',
                //     'updated_at' => now()
                // ]);

                $request->session()->flash('success', 'Request submitted successfully');
                return back();
            } else if ($client_cases < 1) {
                $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have at least one \'waiting\' case. Please create/open a Case first!');
                return back();
            } else if ($client_cases > 1) {
                $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have one and only one \'waiting\' case');
                return back();
            }
        } else if($count_waiting == 1 && $count_rejected == 0) {
            $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! Wait for the response!');
            return back();
        } else if($count_waiting == 0 && $count_rejected == 1) {
            $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! The Lawyer rejected your case!');
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

            $request->session()->flash('approve', 'Request approved successfully');
        } else if(!$request->approve){

            $result = \App\Request::find($req->id)->update([
                'state' => 'rejected',
                'updated_at' => now()
            ]);

            $request->session()->flash('decline', 'Request declined successfully');
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

            $request->session()->flash('won', 'Case result set as WON');
        } else if(!$request->result){

            $result1 = CaseFile::find($req->casefile_id)->update([
                'result' => 'lost',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'closed',
                'updated_at' => now()
            ]);

            $request->session()->flash('lost', 'Case result set as LOST');
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
        
        // return view('layouts.user.lawyer-verify',compact('user','courts','specialties','divisions','districts'));
    }

    public function upload_nid(Request $request, $id)
    {
        // return $request->hasFile('nid_front');
        

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
                    $msg = "Front Image File extension not allowed!";
                    return back()->withErrors($msg);
                }
            } else {
                $msg = "Front Image is too large! Maximum 50MB is allowed!";
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
                    $msg = "Back Image File extension not allowed!";
                    return back()->withErrors($msg);
                }
            } else {
                $msg = "Back Image is too large! Maximum 50MB is allowed!";
                return back()->withErrors($msg);
            }
        } else{
            // return $request;
            if ($request->hasFile('nid_back')) {
                $msg = "Please Upload the Front view of your NID Card!";
            } else if($request->hasFile('nid_front')){
                $msg = "Please Upload the Back view of your NID Card!";
            } else{
                $msg = "Please Upload the Front and Back views of your NID Card!";
            }
            
            return back()->withErrors($msg);
        }

        Lawyer::find($id)->update([
            'admin_approval' => 1,
        ]);

        return back()->with('status','NID pictures has been uploaded successfully!');
        
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

            $request->session()->flash('approve', 'Lawyer account was approved successfully');
        } else if ($request->approve == 3) {

            $result1 = Lawyer::find($request->lawyer_id)->update([
                'admin_approval' => 3,
                'updated_at' => now()
            ]);

            $request->session()->flash('decline', 'Lawyer account was declined successfully');
            
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
}
