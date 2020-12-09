<?php

namespace App\Http\Controllers;

use App\User;
use App\Lawyer;
use App\Court;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        return view('layouts.user.lawyer-edit',compact('user','courts'));
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
            'specialty' => ['required'],
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
                'gender' => $request['gender'],
            ]);
            Lawyer::where('id', auth()->user()->lawyer->id)->update([
                'type' => $request['type'],
                'specialty' => $request['specialty'],
                'profile_bio' => $request['profile_bio'],
                'court_id' => $request['court_id'],
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
