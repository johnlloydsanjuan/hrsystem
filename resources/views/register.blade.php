@extends('boilerplate')
@section('content')
    <section style="background: linear-gradient(to top, #6A4CA8 0%, #C5A3FF 100%);height:100vh">
        <div class="container-xl">
            <div class="login-container" style="padding-top: 10vh;">
                <div class="login-content card my-0 mx-auto p-2" style="max-width:700px;box-shadow: 1px 3px 5px 2px rgba(0, 0, 0, 0.411);background-color:#ffffffda">
                    <div class="card-body">
                        <h3>Sign up</h3>
                        <p class="text-secondary mb-4">Register and be one of us!</p>
                        <form action="/register" method="POST">
                            <div class="mb-2">
                                <input class="form-control" id="email" name="email" type="email"
                                    placeholder="Email*">
                            </div>
                            <div class="mb-2">
                                <input class="form-control" id="username" name="username" type="text"
                                    placeholder="Username*">
                            </div>
                            <div class="mb-3 pb-3 border-bottom">
                                <input class="form-control mb-2" id="password" name="password" type="password"
                                    placeholder="Password*">
                                <input class="form-control" id="confirmpassword" name="confirmpassword"
                                    type="confirmpassword" placeholder="Confirm Password*">
                            </div>
                            <div class="input-group mb-2">
                                <input class="form-control" id="firstname" name="firstname" type="text"
                                    placeholder="First Name*">
                                <input class="form-control" id="middlename" name="middlename" type="text"
                                    placeholder="Middle Name*">
                                <input class="form-control" id="lastname" name="lastname" type="text"
                                    placeholder="Last Name*">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text text-secondary">Birthday*</span>
                                <input class="form-control" id="birthday" name="birthday" type="date">
                            </div>
                            <div class="input-group mb-2">
                                <span class="input-group-text text-secondary">Gender</span>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="" hidden selected>Select...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="LGBTQIA+">LGBTQIA+</option>
                                </select>
                            </div>
                            <div class="d-flex mb-2 flex-column flex-md-row align-items-center">
                                <div class="input-group flex-grow-1">
                                    <span class="input-group-text text-secondary">Location*</span>
                                    <select class="form-control" id="province" name="province">
                                        <option value="" selected hidden>Select province...</option>
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->province_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group flex-grow-1" id="municipality-container" hidden>
                                    <select class="form-control" id="municipality" name="municipality">
                                        <option value="" selected hidden>Select municipality...</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-2">
                                <input class="form-control" id="address" name="address" type="text"
                                    placeholder="Address*">
                            </div>
                            <div class="mb-2">
                                <input class="form-control" id="mobilenumber" name="mobilenumber" type="number"
                                    placeholder="Mobile Number*">
                            </div>
                            <button class="btn btn-primary py-2 w-100">Register</button>
                        </form>
                        <p class="text-center my-3">Already have an account? <a href="/login">Login</a> now! </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#province').change(function() {
                $('#municipality-container').removeAttr('hidden');
                var province = $('#province').val();

                $.get('/getMunicipality/' + encodeURIComponent(province), function(data) {
                    var options = '<option selected hidden value="">Municipality*</option>';
                    var sortedData = Object.entries(data).sort((a, b) => a[1].localeCompare(b[1]));

                    $.each(sortedData, function(key, value) {
                        options += '<option value="' + value[0] + '">' + value[1] +
                            '</option>';
                    });

                    $('#municipality').html(options);
                });
            });
        });
    </script>
@endpush
