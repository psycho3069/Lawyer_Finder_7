<?php

namespace App\Http\Controllers;

use App\User;
use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


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
        //
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
        return view('layouts.user.client-edit',compact('user'));
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
            return back()->with('status','Client has been updated successfully!');
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
}
