<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\CaseFile;
use App\Court;
use App\Lawyer;
use App\User;
use Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;
        
        if(auth()->user()->type == 'client'){
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            return view('home', compact('user_cases','active'));
        } elseif(auth()->user()->type == 'lawyer'){
            $user_cases = CaseFile::where('lawyer_id', auth()->user()->id)->get();
            return view('home', compact('user_cases','active'));
        } else {
            $casefiles = CaseFile::all();
            $courts = Court::all();
            return view('home', compact('casefiles','courts','active'));
        }
    }

    public function dashboard()
    {
        $feedback = '';
        $active = [];
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        $users = [];
        $courts = [];
        $lawyers = Lawyer::get();
        if(auth()->user()->type == 'client'){
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback'));
        } elseif(auth()->user()->type == 'lawyer'){
            $user_cases = CaseFile::where('lawyer_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback'));
        } else {
            $casefiles = CaseFile::all();
            $courts = Court::all();
            return view('dash', compact('casefiles','courts','users','lawyers','active','feedback'));
        }
    }

    public function profile(){
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 1;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        return view('layouts.profile', compact('active'));
    }

    public function cases(){
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 1;
        $active['search'] = 0;
        $active['requests'] = 0;

        if(auth()->user()->type == 'admin'){
            $casefiles = CaseFile::all();
            return view('layouts.admin.cases', compact('casefiles'));
        } else {
            if (auth()->user()->type == 'lawyer') {
                $user_cases = CaseFile::where('lawyer_id', auth()->user()->id)->get();
            } elseif (auth()->user()->type == 'client') {
                $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            }
            return view('layouts.user.cases', compact('user_cases','active'));
        }
    }

    public function search(Request $request){
        // return $request->all();
        $feedback = '';
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 1;
        $active['requests'] = 0;

        $location = $request->location;
        $type = $request->type;
        $specialty = $request->specialty;
        // $rating = $request->rating;
        // $success_rate = $request->success_rate;
        $data['location'] = $location;
        $data['type'] = $type;
        $data['location'] = $location;

        if ($location == null && $type == null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->get();
        } elseif ($location != null && $type == null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('a1_users.location', $location)
                            ->get();
        } elseif ($location == null && $type != null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('b6_lawyers.type', $type)
                            ->get();
        } elseif ($location == null && $type == null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('specialty', $specialty)
                            ->get();
        } elseif ($location != null && $type != null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('a1_users.location', $location)
                            ->where('b6_lawyers.type', $type)
                            ->get();
        } elseif ($location == null && $type != null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('b6_lawyers.type', $type)
                            ->where('specialty', $specialty)
                            ->get();
        } elseif ($location != null && $type == null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('a1_users.location', $location)
                            ->where('specialty', $specialty)
                            ->get();
        } else {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.location as location', 'a1_users.name as name')
                            ->where('a1_users.location', $location)
                            ->where('b6_lawyers.type', $type)
                            ->where('specialty', $specialty)
                            ->get();
        } 

        $user_cases = [];
        $courts = Court::get();
        $lawyers = Lawyer::get();
        // return $users;

        return view('dash', compact('users','user_cases','courts','lawyers','active','feedback'));
    }

    public function requests(){
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 1;

        $requests = CaseFile::where('lawyer_id',auth()->user()->id)->get();
        $courts = Court::get();
        return view('layouts.user.requests',compact('requests','courts','active'));
    }

    public function lawyerRequestCase(Request $request){

        $active = [];
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        $users = User::get();
        $user_cases = [];
        $courts = Court::get();
        $lawyers = Lawyer::get();
        $feedback = '';

        $query = CaseFile::where('client_id',auth()->user()->id)
                                    ->where('result','waiting');

        $client_cases = $query->count();

        if ($client_cases == 1) {

            $client_case = $query->get()[0]->update([
                'lawyer_id' => $request->lawyer_id,
                'result' => 'pending',
                'updated_at' => now()
            ]);

            $feedback = 'Request submitted successfully';
            return Redirect::back()->with('feedback',$feedback);
            // return view('dash', compact('users','user_cases','courts','lawyers','active','feedback'));
        } else {
            $feedback = 'Sorry, Request can\'t be submitted! You must have only one \'waiting\' case';
            return Redirect::back()->with('feedback',$feedback);
            // return view('dash', compact('users','user_cases','courts','lawyers','active','feedback'));
        }
    }

    public function lawyerRequestDecide(Request $request){
        $result = '';
        if ($request->case == 'approved') {
            $result = 'yes';
        } else{
            $result = 'no';
        }
        return $result;
        // $requests = CaseFile::where('lawyer_id',auth()->user()->id)->get();
    }

}
