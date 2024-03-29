<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('layouts.feedback.feedback',compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => ['required', 'string', 'max:100'],
            'email' => [ 'required', 'email','max:191'],
            'contact' => ['nullable','numeric','digits:11'],
            'subject' => ['required'],
            'feedback' => ['required'],
            'star' => ['required','numeric','digits:1'],
            
        ]);

        if ($validator->fails()) {
            // $new_array = [];
            // $ar1 = $validator->errors();
            // $ar2 = array("a" => "aqsdas", "b" => "asdas");
            // $new_array = [$ar1,$ar2];
            // $errors_array = array_merge($ar1, $ar2);
            return back()->withErrors($validator->errors());
        } else {
            Feedback::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'contact' => $request['contact'],
                'subject' => $request['subject'],
                'feedback' => $request['feedback'],
                'rating' => $request['star'],
                
            ]);
            
            if (\App::isLocale('en')) {
                $request->session()->flash('status','Feedback submitted successfully!');
                return back();
            } else{
                $request->session()->flash('status','মন্তব্য সফলভাবে জমা দেওয়া হয়েছে!');
                return back();
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return view('layouts.feedback.show',compact('feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
