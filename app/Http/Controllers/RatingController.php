<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Client;
use App\Lawyer;
use Illuminate\Http\Request;

class RatingController extends Controller
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
        $active = [];
        $active['rating'] = 1;
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        if (auth()->user()->type == 'lawyer') {
            $lawyer_id = Lawyer::where('user_id',auth()->user()->id)->get()->first()->id;
            $ratings = Rating::where('taker_id',$lawyer_id)->get();
        } elseif (auth()->user()->type == 'client') {
            $client_id = Client::where('user_id',auth()->user()->id)->get()->first()->id;
            $ratings = Rating::where('giver_id',$client_id)->get();
        } else{
            $ratings = Rating::all();
        }
        return view('layouts.user.rating.ratings',compact('ratings','active'));
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
        if($request->star != null){

            $client_id = Client::where('user_id', auth()->user()->id)->first()->id;
            $rating = Rating::where('giver_id',$client_id)
                    ->where('taker_id', $request->lawyer_id)
                    ->get()->first();

            if ($rating) {
                $result = Rating::find($rating->id)->update([
                    'value'     => $request->star,
                    'text'      => $request->review,
                    'updated_at'=> now()
                ]);
            } else{
                $result = Rating::create([
                    'value'     => $request->star,
                    'text'      => $request->review,
                    'giver_id'  => $client_id,
                    'taker_id'  => $request->lawyer_id,
                    'created_at'=> now(),
                    'updated_at'=> now()
                ]);
            }

            if ($result) {
                if (\App::isLocale('en')) {
                    $request->session()->flash('star','Thanks! You Rated this Lawyer.');
                } else{
                    $request->session()->flash('star','ধন্যবাদ! আপনি এই আইনজীবিকে রেট দিয়েছেন।');
                }
                
            } else{
                if (\App::isLocale('en')) {
                    $request->session()->flash('error','Something went wrong, please try again!');
                } else{
                    $request->session()->flash('error','কিছু ভুল হয়েছে আবার চেষ্টা করুন!');
                }
                
            }
        } else{
            if (\App::isLocale('en')) {
                $request->session()->flash('empty','Please select any Star to Rate this Lawyer.');
            } else{
                $request->session()->flash('empty','এই উকিলকে রেট দেওয়ার জন্য দয়া করে যে কোনও তারকা নির্বাচন করুন।');
            }
            
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }

    public function give_rating(Request $request)
    {
        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        $lawyer = Lawyer::find($request->lawyer_id);
        // $rating = Rating::find($lawyer->rating->first()->id);
        // $client = Client::find($rating->client->id);
        return view('layouts.user.rating-create',compact('lawyer','active'));
    }
}
