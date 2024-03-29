@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 95px; border: solid lightgray 1px; background-color: white;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="contact-form-wrap">

                @if (session('status'))
                    <div id="success-status" class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <center>
                    <h3>@lang('contact.title')</h3>
                </center>
                <hr>

                <div class="contact-widget">
                    <form id="contactform" class="validator" action="{{ route('feedback.store') }}" method="POST" novalidate="novalidate">
                        @csrf

                        <div class="text-center row">
                            <h3 class="float-left pl-3 pr-5">@lang('contact.rate')</i><span style="color: red;">*</span></h3>
                            @for ($i = 5; $i > 0; $i--)
                                <input class="pl-5 star star-{{ $i }}" id="star-{{ $i }}" type="radio" value="{{ $i }}" name="star"
                                />
                                <label class="star star-{{ $i }}" for="star-{{ $i }}"></label>
                            @endfor
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group with-icon">
                                    <i class="fa-user-o fa"></i><span style="color: red;">*</span>
                                    <input placeholder="@lang('contact.name')" type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group with-icon">
                                    <i class="fa-envelope-o fa"></i><span style="color: red;">*</span>
                                    <input type="email" placeholder="@lang('contact.email_adress')" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group with-icon">
                                    <i class="fa-phone fa"></i>
                                    <input type="text" placeholder="@lang('contact.phone_number')" id="contact" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" autocomplete="contact">
                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group with-icon">
                                    <i class="fa-file-text-o fa"></i><span style="color: red;">*</span>
                                    <input type="text" placeholder="@lang('contact.subject')" id="subject" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" autocomplete="subject">
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div style="padding: 0px 15px 0px 15px;" class="form-group with-icon">
                            <i class="fa-comments-o fa"></i><span style="color: red;">*</span>
                            <textarea class="form-control @error('feedback') is-invalid @enderror" value="{{ old('feedback') }}" id="feedback" name="feedback" placeholder="@lang('contact.message')" rows="6" cols="30"></textarea>
                            @error('feedback')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button style="height: 50px; width: 150px; border-radius: 0; margin-left: 15px;" name="submit" type="submit" id="submit-button" value="Submit" class="btn btn-primary">@lang('contact.send')</button>
                    </form>

                </div>
            </div>

            <hr style="margin-top: 50px; margin-bottom: 50px;">


            <div class="contact-details" style="margin-bottom: 100px;">

                <div class="contact-items">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-item">
                                <h4><i class="fa fa-map-o"></i> @lang('contact.address')</h4>
                                <div>
                                    Building, City,<br>
Dhaka, Bangladesh                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-item">
                                <h4><i class="fa fa-envelope-o"></i> @lang('contact.email')</h4>
                                <div>
                                    farha100669@gmail.com                                    </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-item">
                                <h4><i class="fa fa-phone-volume"></i> @lang('contact.contact')</h4>
                                <div>
                                    +880-xxxxxxxxxx                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer-script')

@endsection

