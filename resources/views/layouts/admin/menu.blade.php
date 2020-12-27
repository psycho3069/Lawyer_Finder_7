<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:180px; color: maroon!important;
    background-color: #f8fafc!important;">
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('home') }}">@lang('menu.summary')</a>
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('lawyer.index') }}">@lang('menu.lawyers')</a>
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('client.index') }}">@lang('menu.clients')</a>
    {{-- <a class="w3-bar-item w3-button tablink btn" href="#">@lang('menu.cases')</a>
    <a class="w3-bar-item w3-button tablink btn" href="#">@lang('menu.courts')</a> --}}
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('rating.index') }}">@lang('menu.ratings')</a>
    {{-- <a class="w3-bar-item w3-button tablink btn" href="#">@lang('menu.reviews')</a> --}}
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('feedback.index') }}">@lang('menu.feedbacks')</a>
    <a class="w3-bar-item w3-button tablink btn" href="{{ route('notice.index') }}">@lang('menu.notices')</a>
</div>