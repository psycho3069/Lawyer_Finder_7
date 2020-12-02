<?php

namespace App\Http\Controllers;

use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return view('layouts.notice.notice',compact('notices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.notice.create');
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
            'title'         => ['required', 'string', 'max:191'],
            'details'       => ['required'],
            'title_bn'      => ['required', 'string', 'max:191'],
            'details_bn'    => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            Notice::create([
                'title'         => $request['title'],
                'details'       => $request['details'],
                'title_bn'      => $request['title_bn'],
                'details_bn'    => $request['details_bn'],
            ]);
            return back()->with('status','New Notice has been added successfully!');
        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        return view('layouts.notice.show',compact('notice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('layouts.notice.edit',compact('notice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        // return $request;
        $validator = Validator::make($request->all(), [
            'title'         => ['required', 'string', 'max:191'],
            'details'       => ['required'],
            'title_bn'      => ['required', 'string', 'max:191'],
            'details_bn'    => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        } else {
            $notice->Update([
                'title'         => $request['title'],
                'details'       => $request['details'],
                'title_bn'      => $request['title_bn'],
                'details_bn'    => $request['details_bn'],
            ]);
            return back()->with('status','Notice has been updated successfully!');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
