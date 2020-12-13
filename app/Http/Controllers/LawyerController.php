<?php

namespace App\Http\Controllers;

use App\User;
use App\Lawyer;
use App\Court;
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
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;
        return view('layouts.user.lawyer.show',compact('lawyer','active'));
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
        return view('layouts.user.lawyer-edit',compact('user','courts','specialties','divisions','districts'));
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
                    return $msg;
                }
            } else {
                $msg = "File is too large!";
                return $msg;
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
}
