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
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->get();
            $user_cases = CaseFile::where('client_id', auth()->user()->id)->get();
            return view('dash', compact('user_cases','users','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
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
        $specialties = Specialty::all();
        $requests = \App\Request::all();

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
                            ->where('specialties_id', $specialty)
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
                            ->where('specialties_id', $specialty)
                            ->get();
        } elseif ($district != null && $type == null && $specialty != null) {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->where('specialties_id', $specialty)
                            ->get();
        } else {
            $users = User::join('b6_lawyers', 'a1_users.id', '=', 'b6_lawyers.user_id')
                            ->select('b6_lawyers.*', 'a1_users.type as user_type', 'a1_users.district_id as district_id', 'a1_users.name as name')
                            ->where('a1_users.district_id', $district)
                            ->where('b6_lawyers.type', $type)
                            ->where('specialties_id', $specialty)
                            ->get();
        } 

        $user_cases = [];
        $courts = Court::get();
        $lawyers = Lawyer::get();
        // return $users;

        return view('dash', compact('users','user_cases','courts','lawyers','active','feedback','divisions','districts','data','requests','specialties'));
    }

    public function requests(){
        $active = [];
        $active['dashboard'] = 0;
        $active['profile'] = 0;
        $active['cases'] = 0;
        $active['search'] = 0;
        $active['requests'] = 1;

        if (auth()->user()->type == 'lawyer') {
            $lawyer_id = Lawyer::where('user_id',auth()->user()->id)->first()->id;
            $requests = \App\Request::where('lawyer_id',$lawyer_id)
                                        ->get();
        } elseif(auth()->user()->type == 'client') {
            $client_id = Client::where('user_id',auth()->user()->id)->first()->id;
            $requests = \App\Request::where('client_id',$client_id)->get();
        }
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
        $requests = \App\Request::get();
        $feedback = '';

        $lawyer_id = $request->lawyer_id;
        $client_id = Client::where('user_id',auth()->user()->id)->first()->id;

        $query = CaseFile::where('client_id', $client_id)->where('result','waiting');
        $client_cases = $query->count();

        $req = \App\Request::where('client_id',$client_id)->where('lawyer_id',$lawyer_id);
        $count_waiting = $req->where('state','waiting')->count();
        $count_rejected = $req->where('state','rejected')->count();
        $count_accepted = $req->where('state','accepted')->count();

        if ($count_waiting == 0 && $count_rejected == 0) {
            if ($client_cases == 1) {
                $case_id = $query->get()->first()->id;
                \App\Request::create([
                    'state'         => 'pending',
                    'client_id'     => $client_id,
                    'casefile_id'   => $case_id,
                    'lawyer_id'     => $lawyer_id,
                ]);

                // $client_case = $query->get()[0]->update([
                //     'lawyer_id' => $request->lawyer_id,
                //     'result' => 'pending',
                //     'updated_at' => now()
                // ]);

                $request->session()->flash('success', 'Request submitted successfully');
                return back();
            } else if ($client_cases < 1) {
                $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have at least one \'waiting\' case. Please create/open a Case first!');
                return back();
            } else if ($client_cases > 1) {
                $request->session()->flash('failed', 'Sorry, Request can\'t be submitted! You must have one and only one \'waiting\' case');
                return back();
            }
        } else if($count_waiting == 1 && $count_rejected == 0) {
            $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! Wait for the response!');
            return back();
        } else if($count_waiting == 0 && $count_rejected == 1) {
            $request->session()->flash('failed', 'Sorry, You already requested this Lawyer! The Lawyer rejected your case!');
            return back();
        }
    }

    public function lawyerRequestDecide(Request $request){
        $request->all();
        $req = \App\Request::find($request->req_id);

        if ($request->approve) {

            $result1 = CaseFile::find($req->casefile_id)->update([
                'lawyer_id' => $req->lawyer_id,
                'result' => 'running',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'accepted',
                'updated_at' => now()
            ]);

            $result3 = \App\Request::where('casefile_id',$req->casefile_id)
                                        ->where('state','pending')
                                        ->delete();

            $request->session()->flash('approve', 'Request approved successfully');
        } else if(!$request->approve){

            $result = \App\Request::find($req->id)->update([
                'state' => 'rejected',
                'updated_at' => now()
            ]);

            $request->session()->flash('decline', 'Request declined successfully');
        }

        return back();
    }

    public function lawyerResultDecide(Request $request){
        // return $request->all();
        $req = \App\Request::find($request->req_id);

        if ($request->result) {

            $result1 = CaseFile::find($req->casefile_id)->update([
                'result' => 'won',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'closed',
                'updated_at' => now()
            ]);

            $request->session()->flash('won', 'Case result set as WON');
        } else if(!$request->result){

            $result1 = CaseFile::find($req->casefile_id)->update([
                'result' => 'lost',
                'updated_at' => now()
            ]);

            $result2 = \App\Request::find($req->id)->update([
                'state' => 'closed',
                'updated_at' => now()
            ]);

            $request->session()->flash('lost', 'Case result set as LOST');
        }

        return back();
    }

}
