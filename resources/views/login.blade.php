@extends('boilerplate')
@section('content')
    <div class="container-xl">
        <div class="login-container" style="padding-top: 30vh">
            <div class="login-content card my-0 mx-auto p-2" style="width:500px;">
                <div class="card-body">
                    <h3 class="mb-4">HR System</h3>
                    <form action="/loginprocess" method="POST">
                        <div class="mb-2">
                            <input class="form-control" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <input class="form-control" id="password" type="password" placeholder="Password">
                        </div>
                        <button class="btn btn-primary py-2 w-100">Login</button>
                    </form>
                    <p class="text-center mt-5">Dont have an account? <a href="#">Register</a> here. </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
