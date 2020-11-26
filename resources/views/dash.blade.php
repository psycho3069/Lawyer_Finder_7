@extends('layouts.app')

@section('style')
    @include('layouts.style')
@endsection

@section('content')
    @if(auth()->user()->type == 'admin')
        @include('layouts.admin.content')
    @else
        @include('layouts.user.content')
    @endif
@endsection

@section('footer-script')

@endsection