{{-- user info and avatar --}}
<div class="avatar av-l"></div>
<p class="info-name">@lang('vendor/app.name')</p>
<div class="messenger-infoView-btns">
    {{-- <a href="#" class="default"><i class="fas fa-camera"></i> default</a> --}}
    <a href="#" class="danger delete-conversation"><i class="fas fa-trash-alt"></i> @lang('vendor/layouts.delete')</a>
</div>
{{-- shared photos --}}
<div class="messenger-infoView-shared">
    <p class="messenger-title">@lang('vendor/layouts.shared')</p>
    <div class="shared-photos-list"></div>
</div>