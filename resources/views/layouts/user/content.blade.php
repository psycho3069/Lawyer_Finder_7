<div class="container-x" style="margin-top: 55px;">

    

    @include('layouts.user.menu')

    <div class="body-margin">
        <div id="content" class="container p-0" style="margin-top: 56px;">
            <div class="row justify-content-center m-0 p-0 clearfix">
                <div class="col-md-12 m-0 p-0">
                    <div class="card m-0 p-0">
                        
                        @if(Session::has('success'))
                            <div id="success-status" style="min-height: 30px;" class="alert-success alert-dismissible text-md-center">
                                {{ Session::get('success') }}
                            </div>
                        @elseif(Session::has('failed'))
                            <div style="min-height: 30px;" class="alert-danger alert-dismissible text-md-center">
                                {{ Session::get('failed') }}
                            </div>
                        @endif
                        <div class="card-header">@lang('dash.title')</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('search') }}">
                                @csrf

                                <div class="form-group row" style="padding: 15px 0px;">
                                    <label for="division" class="col-md-3 col-form-label text-md-right">@lang('dash.division')</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="division" id="division" class="custom-select form-control @error('division') is-invalid @enderror">
                                            <option value="">---@lang('dash.s_division')---</option>
                                            @foreach($divisions as $key => $division)
                                                <option value="{{ $division->id }}"
                                                    @if($data != null)
                                                        @if($division->id == $data['division'])
                                                            {{ 'selected' }}
                                                        @endif
                                                    @endif
                                                    >{{ $division->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('division')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="district" class="col-md-3 col-form-label text-md-right">@lang('dash.district')</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="district" id="district" class="custom-select form-control @error('district') is-invalid @enderror">
                                            <option value="">---@lang('dash.s_district')---</option>
                                            @foreach($districts as $key => $district)
                                                <option value="{{ $district->id }}"
                                                    @if($data != null)
                                                        @if($district->id == $data['district'])
                                                            {{ 'selected' }}
                                                        @endif
                                                    @endif
                                                    >{{ $district->name }}</option>
                                            @endforeach
                                        </select>

                                        @error('district')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="type" class="col-md-3 col-form-label text-md-right">@lang('dash.type')</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="type" id="type" class="custom-select form-control @error('type') is-invalid @enderror">
                                            <option value="">---@lang('dash.s_type')---</option>
                                            <option value="advocate"
                                                        @if($data != null)
                                                            @if($data['type'] == 'advocate')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif
                                            >Advocate</option>
                                            <option value="magistrate"
                                                        @if($data != null)
                                                            @if($data['type'] == 'magistrate')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif
                                            >Magistrate</option>
                                            <option value="barrister"
                                                        @if($data != null)
                                                            @if($data['type'] == 'barrister')
                                                                {{ 'selected' }}
                                                            @endif
                                                        @endif
                                            >Barrister</option>
                                        </select>

                                        @error('type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="specialty" class="col-md-3 col-form-label text-md-right">@lang('dash.specialty')</label>

                                    <div class="col-pad-2 col-md-3">
                                        <select name="specialty" id="specialty" class="custom-select form-control @error('specialty') is-invalid @enderror">
                                            <option value="">---@lang('dash.s_specialty')---</option>
                                            @foreach($specialties as $key => $specialty)
                                                <option value="{{ $specialty->id }}"
                                                    @if($data != null)
                                                        @if($specialty->id == $data['specialty'])
                                                            {{ 'selected' }}
                                                        @endif
                                                    @endif
                                                    >{{ $specialty->name }}</option>
                                            @endforeach
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
                                            @lang('dash.search')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    
                    @foreach($lawyers as $key => $lawyer)
                        <div class="card m-0 p-0">
                            <div class="card-body">
                                <div class="row">
                                    <div lang="@if(App::isLocale('bn')){{ 'bang' }}@endif" class="col-md-3">
                                        {{ '#'.++$key }}
                                    </div>
                                    <div class="col-md-3">
                                        <a data-toggle="tooltip" title="See Lawyer profile" href="{{ route('lawyer.show',$lawyer->id) }}" class="btn btn-secondary">@lang('dash.profile')</a>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        @if($requests->where('lawyer_id',$lawyer->id)
                                                     ->where('state','==','pending')
                                                     ->first())
                                            @if($requests->where('lawyer_id',$lawyer->id)
                                                         ->first()->state == 'pending')
                                                <button style="cursor: no-drop;" class="btn btn-info" readonly>@lang('dash.requested')</button>
                                            @elseif($requests->where('lawyer_id',$lawyer->id)
                                                             ->first()->state == 'rejected')
                                                <button style="cursor: no-drop;" class="btn btn-danger" readonly>@lang('dash.rejected')</button>
                                            @else
                                                <button style="cursor: no-drop;" class="btn btn-success" readonly>@lang('dash.accepted')</button>
                                            @endif
                                        @else
                                            <a href="{{ route('lawyer.request-case',['lawyer_id' => $lawyer->id]) }}" class="btn btn-outline-success">@lang('dash.request')</a>
                                        @endif

                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ route('lawyer-chatbox') }}" class="btn btn-info">@lang('dash.message')</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Name: {{ $lawyer->user->name }}
                                    </div>
                                    <div class="col-md-3">
                                        @foreach($districts as $key => $district)
                                            @if($district->id == $lawyer->user->district_id)
                                                District: {{ $district->name }}
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-md-6">
                                        Specialty: {{ $lawyer->specialty->name }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        Average Rating: {{ $lawyer->rating->avg('value') }}
                                    </div>
                                    <div class="col-md-3">
                                        Success Rate: {{ $lawyer->success_rate }}
                                    </div>
                                    <div class="col-md-3">
                                        Type: {{ $lawyer->type }}
                                    </div>
                                    {{-- <div class="col-md-3">
                                        @foreach($courts as $key => $court)
                                            @if($court->id == $lawyer->court_id)
                                                {{ $court->name }}
                                            @endif
                                        @endforeach
                                    </div> --}}
                                    <div class="col-md-3">
                                        {{ $lawyer->cases }}
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