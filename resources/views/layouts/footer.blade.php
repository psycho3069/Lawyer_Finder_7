<footer id="footer" class="footer" style="color: darkgray; background-color: #343a40; padding: 20px 0; z-index: 1; border-top: solid gray 1px;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="footer-left">
                    <div class="footer-text">@lang('app.copyright')</div>
                </div>
            </div>
            
            <div class="col-md-5">
                <nav class="footer-nav">
                    <ul class="navbar-nav ml-auto">
                        <div class="row">
                            <div class="col-md-4">
                                <li class="nav-item"><a href="{{ route('contact-us') }}">@lang('app.contact')</a></li>
                            </div>
                            <div class="col-md-8">
                                <li class="nav-item"><a href="{{ route('faq') }}">@lang('app.faq')</a></li>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    {{-- <div class="support_wrap">
        <div class="support_head">Support</div>
        <div class="support-body">
            For technical support, please contact at iftyrofficial@gmail.com        </div>
    </div> --}} 
</footer>