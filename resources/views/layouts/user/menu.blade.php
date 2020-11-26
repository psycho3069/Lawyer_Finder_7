<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:180px">
    @if(auth()->user()->type == 'lawyer')
        <a href="{{ route('client-request') }}">
            <button class="w3-bar-item menu-button tablink @if($active['requests']) {{ 'menu-button-current' }} @endif">Client Requests</button>
        </a>
    @elseif(auth()->user()->type == 'client')
        <a href="{{ route('dash') }}">
            <button class="w3-bar-item menu-button tablink @if($active['dashboard']) {{ 'menu-button-current' }} @endif">Find Lawyers</button>
        </a>
    @endif
    
    <a href="{{ route('profile') }}">
    	<button class="w3-bar-item menu-button tablink @if($active['profile']) {{ 'menu-button-current' }} @endif">Profile</button>
    </a>
    <a href="{{ route('cases') }}">
    	<button class="w3-bar-item menu-button tablink @if($active['cases']) {{ 'menu-button-current' }} @endif">Cases</button>
    </a>
    <a href="{{ route('ratings') }}">
    	<button class="w3-bar-item menu-button tablink">Ratings</button>
    </a>
    <a href="{{ route('reviews') }}">
    	<button class="w3-bar-item menu-button tablink">Reviews</button>
    </a>
    
</div>