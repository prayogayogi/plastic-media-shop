<!-- Modal -->
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Form Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old("name") }}">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email"value="{{ old("email") }}">
                </div>
                <div class="form-group">
                    <label for="name">No Telephone</label>
                    <input type="text" name="phone" class="form-control" id="name" placeholder="No Telephone" value="{{ old("phone") }}">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ old("address") }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Password confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
</div>
