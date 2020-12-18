<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Specialty;
use App\Division;
use App\District;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Support\Str;


class ClientController extends Controller
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
        $clients = Client::all();
        return view('layouts.admin.clients',compact('clients'));
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
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find(auth()->user()->id);
        $specialties = Specialty::all();
        $divisions = Division::all();
        $districts = District::all();
        return view('layouts.user.client.client-edit',compact('user','specialties','divisions','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
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
            return back()->withErrors($validator->errors());
        } else {
            User::where('id', $id)->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'contact' => $request['contact'],
                'location' => $request['location'],
                'birthdate' => $request['birthdate'],
                'type' => $request['type'],
                'gender' => $request['gender'],
            ]);

            if (\App::isLocale('en')) {
                return back()->with('status','Client has been updated successfully!');
            } else{
                return back()->with('status','মক্কেল সফলভাবে পরিমার্জিত করা হয়েছে!');
            }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function block(Client $client){

        $result1 = Client::find($client->id)->update([
            'blocked'   => 1,
            'updated_at' => now()
        ]);

        if (\App::isLocale('en')) {
            return back()->with('status','Client has been BLOCKED successfully!');
        } else{
            return back()->with('status','মক্কেল সফলভাবে অবরুদ্ধ করা হয়েছে!');
        }
        
    }
}
