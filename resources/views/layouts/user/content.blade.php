<div class="container-x" style="margin-top: 55px;">

    {{-- @if(auth()->user()->client)
        @if(count($user_cases) == 0)  
            <div style="color: red">{{ 'Please add a Case to Send Request to Lawyers!!' }}</div>
        @endif
    @elseif(auth()->user()->lawyer)
        @if(auth()->user()->lawyer->profile_bio == NULL 
            || auth()->user()->lawyer->court_id == NULL
            || auth()->user()->lawyer->type == NULL
            || auth()->user()->lawyer->specialty == NULL)  
            <div style="color: red">{{ 'Please Complete your Profile to get Requests from clients!!' }}</div>
        @endif
    @endif --}}

    @include('layouts.user.menu')

    <div class="body-margin">
        <div class="container p-0" style="margin-top: 56px;">
            <div class="row justify-content-center m-0 p-0 clearfix">
                <div class="col-md-12 m-0 p-0">
                    <div class="card m-0 p-0">
                        <div class="card-header">{{ __('Search Lawyers') }}</div>

                        <div class="card-body">
                            <form method="GET" action="{{ route('search') }}">
                                @csrf

                                <div class="form-group row" style="padding: 15px 0px;">
                                    <label for="location" class="col-pad-2 col-md-1 col-form-label text-md-right">{{ __('Location') }}</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="location" id="location" class="custom-select form-control @error('location') is-invalid @enderror">
                                            <option value="">---Select Location---</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Sylhet">Sylhet</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Mymensigh">Mymensigh</option>
                                        </select>

                                        @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="type" class="col-pad-2 col-md-1 col-form-label text-md-right">{{ __('Type') }}</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="type" id="type" class="custom-select form-control @error('type') is-invalid @enderror">
                                            <option value="">---Select Type---</option>
                                            <option value="advocate">Advocate</option>
                                            <option value="judge">Judge</option>
                                            <option value="magistrate">Magistrate</option>
                                            <option value="barrister">Barrister</option>
                                        </select>

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="specialty" class="col-pad-2 col-md-1 col-form-label text-md-right">{{ __('Specialty') }}</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="specialty" id="specialty" class="custom-select form-control @error('specialty') is-invalid @enderror">
                                            <option value="">---Select Specialty---</option>
                                            <option value="defendant">Defence</option>
                                            <option value="prosecutor">Prosecution</option>
                                        </select>

                                        @error('specialty')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- <label for="rating" class="col-md-2 col-form-label text-md-left">{{ __('Rating Above') }}</label>

                                    <div class="col-md-2">
                                        <select name="rating" id="rating" class="custom-select form-control @error('rating') is-invalid @enderror">
                                            <option value="">---Select Rating---</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>

                                        @error('rating')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="success_rate" class="col-md-2 col-form-label text-md-left">{{ __('Success Rate Above') }}</label>

                                    <div class="col-md-2">
                                        <select name="success_rate" id="success_rate" class="custom-select form-control @error('success_rate') is-invalid @enderror">
                                            <option value="">---Select Success Rate---</option>
                                            <option value="90">90%</option>
                                            <option value="75">75%</option>
                                            <option value="50">50%</option>
                                            <option value="25">25%</option>
                                        </select>

                                        @error('success_rate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> --}}
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Search') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    
                    <div class="alert-primary text-md-center">{{ $feedback }}</div>

                    @foreach($users as $key => $user)
                        <div class="card m-0 p-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        {{ '#'.++$key }}
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('lawyer.show',$key-2) }}" class="btn btn-secondary">Profile</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('lawyer.request-case',['lawyer_id' => $user->user_id]) }}" class="btn btn-success">Request</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('lawyer-messenger') }}" class="btn btn-info">message</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        {{ $user->name }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $user->location }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $user->type }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $user->specialty }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        {{ $user->rating }}
                                    </div>
                                    <div class="col-md-3">
                                        {{ $user->success_rate }}
                                    </div>
                                    <div class="col-md-3">
                                        @foreach($courts as $key => $court)
                                            @if($court->id == $user->court_id)
                                                {{ $court->name }}
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-3">
                                        {{ $user->cases }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>