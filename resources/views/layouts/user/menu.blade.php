<div class="w3-sidebar w3-bar-block w3-card" style="width:180px; background-color: white;">
    @if(auth()->user()->type == 'lawyer')
        <a href="{{ route('client-request') }}">
            <button class="w3-bar-item menu-button tablink @if($active['requests']) {{ 'menu-button-current' }} @endif">@lang('menu.request')</button>
        </a>
    @elseif(auth()->user()->type == 'client')
        <a href="{{ route('dash') }}">
            <button class="w3-bar-item menu-button tablink @if($active['dashboard']) {{ 'menu-button-current' }} @endif">@lang('menu.find')</button>
        </a>
    @endif
    
    <a href="{{ route('profile') }}">
    	<button class="w3-bar-item menu-button tablink @if($active['profile']) {{ 'menu-button-current' }} @endif">@lang('menu.profile')</button>
    </a>
    <a href="{{ route('cases') }}">
    	<button class="w3-bar-item menu-button tablink @if($active['cases']) {{ 'menu-button-current' }} @endif">@lang('menu.cases')</button>
    </a>
    <a href="{{ route('ratings') }}">
    	<button class="w3-bar-item menu-button tablink">@lang('menu.ratings')</button>
    </a>
    <a href="{{ route('reviews') }}">
    	<button class="w3-bar-item menu-button tablink">@lang('menu.reviews')</button>
    </a>
    <a href="{{ route('lawyer-messenger') }}">
        <button class="w3-bar-item menu-button tablink">@lang('menu.messenger')</button>
    </a>
    
</div>