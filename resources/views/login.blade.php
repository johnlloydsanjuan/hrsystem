@extends('boilerplate')
@section('content')
    <section style="background: linear-gradient(to top, #6A4CA8 0%, #C5A3FF 100%);height:100vh">
        <div class="container-xl">
            <div class="login-container" style="padding-top: 30vh">
                <div class="login-content card my-0 mx-auto p-2" style="max-width:500px;box-shadow: 1px 3px 5px 2px rgba(0, 0, 0, 0.411);background-color:#ffffffda">
                    <div class="card-body">
                        <h3>Sign in</h3>
                        <p class="text-secondary mb-4">Log in and be with us!</p>
                        <form action="/login" method="POST">
                            <div class="mb-2">
                                <input class="form-control" id="email" type="email" placeholder="Email">
                            </div>
                            <div class="mb-2">
                                <input class="form-control" id="password" type="password" placeholder="Password">
                            </div>
                            <button class="btn btn-primary py-2 w-100">Login</button>
                        </form>
                        <p class="text-center my-3">Dont have an account? <a href="/register">Register</a> here. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
