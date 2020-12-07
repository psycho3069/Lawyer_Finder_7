<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\CaseFile;
use App\Court;
use App\Lawyer;
use App\User;
use App\Division;
use App\District;
use Exception;
use Illuminate\Support\Facades\Session;

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
        $data = [];
        $courts = Court::all();
        $lawyers = Lawyer::all();
        $divisions = Division::all();
        $districts = District::all();

        if(auth()->user()->type == 'client'){
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->get();
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback','divisions','districts','data'));
        } elseif(auth()->user()->type == 'lawyer'){
            $user_cases = CaseFile::where('lawyer_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback','divisions','districts','data'));
        } else {
            $casefiles = CaseFile::all();
            return view('dash', compact('casefiles','courts','users','lawyers','active','feedback','divisions','districts','data'));
        }
    }

    public function search(Request $request){
        // return $request->all();
        $feedback = '';
        $active = [];
        $active['dashboard'] = 1;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        // $division = $request->division;
        $district = $request->district;
        $type = $request->type;
        $specialty = $request->specialty;
        // $rating = $request->rating;
        // $success_rate = $request->success_rate;
        
        $divisions = Division::all();
        $districts = District::all();

        $data['division']   = $request->division;
        $data['district']   = $request->district;
        $data['type']       = $request->type;
        $data['specialty']  = $request->specialty;
        // return $data;

        if ($district == null && $type == null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->get();
        } elseif ($district != null && $type == null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->get();
        } elseif ($district == null && $type != null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('b6_lawyers.type', $type)
                            ->get();
        } elseif ($district == null && $type == null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('specialty', $specialty)
                            ->get();
        } elseif ($district != null && $type != null && $specialty == null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->where('b6_lawyers.type', $type)
                            ->get();
        } elseif ($district == null && $type != null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('b6_lawyers.type', $type)
                            ->where('specialty', $specialty)
                            ->get();
        } elseif ($district != null && $type == null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->where('specialty', $specialty)
                            ->get();
        } else {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->where('b6_lawyers.type', $type)
                            ->where('specialty', $specialty)
                            ->get();
        } 

        $user_cases = [];
        $courts = Court::get();
        $lawyers = Lawyer::get();
        // return $users;

        return view('dash', compact('users','user_cases','courts','lawyers','active','feedback','divisions','districts','data'));
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

        // return $request;

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

            // $feedback = 'Request submitted successfully';
            $request->session()->flash('success', 'Request submitted successfully');
            // Session::put('feedback', $feedback);
            return back();
            // return view('dash', compact('users','user_cases','courts','lawyers','active','feedback'));
        } else {
            $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have only one \'waiting\' case');
            // Session::put('feedback', $feedback);
            return back();
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
