<div class="col-lg-12">
    @if (Session::has('flash_message'))
        <div class=" alert alert-{!! Session::get('flash_level') !!}">
            {!! Session::get('flash_message') !!}
        </div>
    @endif
</div>