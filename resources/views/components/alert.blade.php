@if($message = Session::get("success"))
    <div class="alert alert-outlined fade show alert-success" role="alert">
        {{ $message }}
        <button type="button" id="click" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if($message = Session::get("error"))
    <div class="alert alert-outlined fade show alert-danger" role="alert">
        {{ $message }}
        <button type="button" id="click" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
