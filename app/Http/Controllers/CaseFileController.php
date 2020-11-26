<?php

namespace App\Http\Controllers;

use App\CaseFile;
use App\Court;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CaseFileController extends Controller
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
        $courts = Court::all();
        return view('layouts.user.casefile-create',compact('courts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'case_identity' => ['required', 'string', 'max:100'],
            'description' => [ 'max:191'],
            'type' => ['required'],
            'client_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            CaseFile::create([
                'case_identity' => $request['case_identity'],
                'description' => $request['description'],
                'type' => $request['type'],
                'client_type' => $request['client_type'],
                'client_id' => auth()->user()->id,
                'court_id' => $request['court_id'],
                'result' => 'waiting',
            ]);
            return back()->with('status','Case has been added successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaseFile  $caseFile
     * @return \Illuminate\Http\Response
     */
    public function show(CaseFile $caseFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseFile  $caseFile
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseFile $caseFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaseFile  $caseFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseFile $caseFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaseFile  $caseFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseFile $caseFile)
    {
        //
    }
}
