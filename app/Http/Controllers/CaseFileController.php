<?php

namespace App\Http\Controllers;

use App\Client;
use App\CaseFile;
use App\Court;
use App\CourtDivision;
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
        $court_divisions = CourtDivision::all();
        $courts = Court::all();
        return view('layouts.user.casefile-create',compact('courts','court_divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'case_identity' => ['required', 'string', 'max:100'],
            'description' => ['required'],
            'type' => ['required'],
            'client_type' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            $client_id = Client::where('user_id',auth()->user()->id)->first()->id;

            $waiting_cases = CaseFile::where('client_id', $client_id)
                    ->where('result', 'waiting')
                    ->get()
                    ->count();


            if ($waiting_cases < 1) {
                CaseFile::create([
                    'case_identity'     => $request['case_identity'],
                    'description'       => $request['description'],
                    'type'              => $request['type'],
                    'client_type'       => $request['client_type'],
                    'client_id'         => $client_id,
                    'court_id'          => $request['court_id'],
                ]);

                if (\App::isLocale('en')) {
                    $request->session()->flash('status','Case has been added successfully!');
                    return back();
                } else{
                    $request->session()->flash('status','সফলভাবে মামলা যুক্ত হয়েছে!');
                    return back();
                }
            } else{
                if (\App::isLocale('en')) {
                    $request->session()->flash('error','Sorry, You already have a waiting case!');
                    return back();
                } else{
                    $request->session()->flash('error','দুঃখিত, আপনার ইতিমধ্যে একটি অপেক্ষার কেস রয়েছে!');
                    return back();
                }
            }
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
