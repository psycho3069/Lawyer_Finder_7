@extends('layouts.app')

@section('content')

<div class="container-x" style="margin-top: 56px;">

    @include('layouts.user.menu')

    <div class="body-margin">
        <div class="container p-0" style="margin-top: 56px;">

            <div class="user-basic">
                <div>Name: 			{{ $lawyer->user->name }}</div>
                <div>Contact: 		{{ $lawyer->user->contact }}</div>
                <div>Location: 		{{ $lawyer->user->location }}</div>
                <div>Birthdate: 	{{ $lawyer->user->birthdate }}</div>
                <div>Email: 		{{ $lawyer->user->email }}</div>
                <div>Gender: 		{{ $lawyer->user->gender }}</div>
                <div>Member Since: 	{{ $lawyer->created_at }}</div>

                <div>Specialty: 	{{ $lawyer->specialty }}</div>
                <div>profile_bio: 	{{ $lawyer->profile_bio }}</div>
                <div>type: 			{{ $lawyer->type }}</div>
                <div>rating: 		{{ $lawyer->rating }}</div>
                <div>reviews: 		{{ $lawyer->reviews }}</div>
                <div>cases: 		{{ $lawyer->cases }}</div>
                <div>success_rate: 	{{ $lawyer->success_rate }}</div>
                <div>court name: 	{{ $lawyer->court->name }}</div>
            </div>
            
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection