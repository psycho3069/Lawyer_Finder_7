<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\CaseFile;
use App\Court;
use App\Client;
use App\Lawyer;
use App\User;
use App\Division;
use App\District;
use App\Specialty;
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
        $active['rating'] = 0;
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;
        
        if(auth()->user()->type == 'client'){
            $feedback = '';
            $active['dashboard'] = 1;
            $users = [];
            $data = [];
            $courts = Court::all();
            $lawyers = Lawyer::all();
            $divisions = Division::all();
            $districts = District::all();
            $specialties = Specialty::all();
            $requests = \App\Request::all();

            // $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
            //                 ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
            //                 ->get();
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();

            if (auth()->user()->type == 'client'){
                return view('dash', compact('user_cases','users','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
            } elseif(auth()->user()->type == 'lawyer'){
                $active['requests'] = 1;
                $lawyer_id = Lawyer::where('user_id',auth()->user()->id)->first()->id;
                $requests = \App\Request::where('lawyer_id',$lawyer_id)
                                        ->where(function ($query) {
                                               $query->where('state', '!=' ,'accepted')
                                                     ->orWhere('state', '!=' ,'rejected');
                                           })
                                        ->get();
                return view('layouts.user.requests',compact('requests','courts','active'));
            }

        } elseif(auth()->user()->type == 'lawyer'){
            $active['requests'] = 1;
            $lawyer_id = Lawyer::where('user_id',auth()->user()->id)->first()->id;
            $requests = \App\Request::where('lawyer_id',$lawyer_id)
                                        ->get();
            return view('layouts.user.requests',compact('requests','active'));
        } else {
            $casefiles = CaseFile::all();
            $courts = Court::all();
            return view('home', compact('casefiles','courts','active'));
        }
    }

    public function profile(){
        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 0;
        $active['profile'] = 1;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 0;

        return view('layouts.profile', compact('active'));
    }

    public function cases(){
        $active = [];
        $active['rating'] = 0;
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
                $lawyer_id = Lawyer::where('user_id', auth()->user()->id)->get()->first()->id;
                $user_cases = CaseFile::where('lawyer_id', $lawyer_id)->get();
            } elseif (auth()->user()->type == 'client') {
                $client_id = Client::where('user_id', auth()->user()->id)->get()->first()->id;
                $user_cases = CaseFile::where('client_id', $client_id)->get();
            }
            return view('layouts.user.cases', compact('user_cases','active'));
        }
    }

    public function dashboard()
    {
        $feedback = '';
        $active = [];
        $active['rating'] = 0;
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
        $specialties = Specialty::all();
        $requests = \App\Request::all();

        if(auth()->user()->type == 'client'){
            $lawyers = Lawyer::get();
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','lawyers','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
        } elseif(auth()->user()->type == 'lawyer'){
            $user_cases = CaseFile::where('lawyer_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
        } else {
            $casefiles = CaseFile::all();
            return view('dash', compact('casefiles','courts','users','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
        }
    }

    public function search(Request $request){
        // return $request->all();
        $feedback = '';
        $active = [];
        $active['rating'] = 0;
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
        
        $users = User::all();
        $divisions = Division::all();
        $districts = District::all();
        $specialties = Specialty::all();
        $requests = \App\Request::all();

        $data['division']   = $request->division;
        $data['district']   = $request->district;
        $data['type']       = $request->type;
        $data['specialty']  = $request->specialty;
        // return $data;

        if ($district == null && $type == null && $specialty == null) {
            $lawyers = Lawyer::all();
        } elseif ($district != null && $type == null && $specialty == null) {
            $lawyers = Lawyer::with(['user'])
                                       ->whereHas('user', function($q) use($district) {
                                       $q->where('district_id', '=', $district);
                                    })->get();
        } elseif ($district == null && $type == null && $specialty != null) {
            $lawyers = Lawyer::where('specialties_id', '=', $specialty)->get();
        } elseif ($district == null && $type != null && $specialty == null) {
            $lawyers = Lawyer::where('type', '=', $type)->get();
        } elseif ($district != null && $type != null && $specialty == null) {
            $lawyers = Lawyer::with(['user'])
                                       ->whereHas('user', function($q) use($district) {
                                       $q->where('district_id', '=', $district);
                                    })  
                                    ->where('type', '=', $type)
                                    ->get();
        } elseif ($district == null && $type != null && $specialty != null) {
            $lawyers = Lawyer::where('specialties_id', '=', $specialty)
                                    ->where('type', '=', $type)
                                    ->get();
        } elseif ($district != null && $type == null && $specialty != null) {
            $lawyers = Lawyer::with(['user'])
                                       ->whereHas('user', function($q) use($district) {
                                       $q->where('district_id', '=', $district);
                                    })
                                    ->where('specialties_id', '=', $specialty)
                                    ->get();
        } else {
            $lawyers = Lawyer::with(['user'])
                                       ->whereHas('user', function($q) use($district) {
                                       $q->where('district_id', '=', $district);
                                    })
                                    ->where('type', '=', $type)
                                    ->where('specialties_id', '=', $specialty)
                                    ->get();
        } 

        $user_cases = [];
        $courts = Court::get();
        // return $users;

        return view('dash', compact('users','user_cases','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
    }

    public function requests(){
        $active = [];
        $active['rating'] = 0;
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 1;

        if (auth()->user()->type == 'lawyer') {
            $lawyer_id = Lawyer::where('user_id',auth()->user()->id)->first()->id;
            $requests = \App\Request::where('lawyer_id',$lawyer_id)
                                        ->where(function ($query) {
                                               $query->where('state', '!=' ,'accepted')
                                                     ->orWhere('state', '!=' ,'rejected');
                                           })
                                        ->get();
        } elseif(auth()->user()->type == 'client') {
            $client_id = Client::where('user_id',auth()->user()->id)->first()->id;
            $requests = \App\Request::where('client_id',$client_id)
                                        ->where(function ($query) {
                                               $query->where('state', '!=' ,'accepted')
                                                     ->orWhere('state', '!=' ,'rejected');
                                           })
                                        ->get();
        }
        
        $courts = Court::get();
        return view('layouts.user.requests',compact('requests','courts','active'));
    }

}
