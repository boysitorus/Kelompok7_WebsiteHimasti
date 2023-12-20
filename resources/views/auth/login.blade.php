<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link href="{{ asset('assets/vendor/bootstrap-5.2.3-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="container-fluid p-5">
        <div class="container ">
            <div class="row justify-content-center mt-lg-5">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header" style="color: #ffffff;background-color: #007BFF; font-size: 24px">Login</div>

                        <form method="POST" action="{{ route('post.login') }}">
                            @csrf
                            <div class="card-body">
                                @if (Session::get('success'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif

                                <div class="form-group mb-4">
                                    <label for="email">Email address</label>
                                    <input id="email" type="email"
                                        placeholder="Enter email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Password</label>

                                    </div>
                                    <input id="password" type="password"
                                        placeholder="Enter password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer" style="color: #ffffff;background-color: #D9D9D9">
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="{{ asset('assets/vendor/bootstrap-5.2.3-dist/js/bootstrap.min.js') }}"></script>

</body>

</html>
