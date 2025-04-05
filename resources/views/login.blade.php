<x-layout>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-secondary-subtle text-black" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <ul class="nav nav-tabs nav-underline gap-2" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active text-black bg-secondary-subtle" id="login-tab"
                                        data-bs-toggle="tab" data-bs-target="#log-in-pane" type="button" role="tab"
                                        aria-controls="log-in-pane" aria-selected="true">Log In</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link text-black bg-secondary-subtle" id="singin-tab"
                                        data-bs-toggle="tab" data-bs-target="#sign-in-pane" type="button"
                                        role="tab" aria-controls="sign-in-pane" aria-selected="false">Sign
                                        In</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <!-- Log In Form -->
                                <div class="tab-pane fade show active" id="log-in-pane" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    @error('email')
                                        <p class="mb-0 mt-4 shadow-sm small alert alert-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group mb-2 mt-5 text-start">
                                            <label class="form-label" for="loginEmail">Email</label>
                                            <input type="email" id="loginEmail" name="email"
                                                value="{{ old('email') }}" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-group mb-2 text-start">
                                            <label class="form-label" for="loginPassword">Password</label>
                                            <input type="password" id="loginPassword" name="password"
                                                class="form-control form-control-lg" />
                                        </div>

                                        <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#">Forgot
                                                password?</a></p>

                                        <button type="submit" class="btn btn-outline-dark btn-lg px-5">Login</button>
                                    </form>
                                </div>

                                <!-- Sign Up Form -->
                                <div class="tab-pane fade" id="sign-in-pane" role="tabpanel"
                                    aria-labelledby="singin-tab">
                                    <p class="text-black-50 mt-3 mb-5">Please enter your personal details!</p>

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group mb-2 text-start">
                                            <label class="form-label" for="name">Username</label>
                                            <input type="text" id="name" name="name"
                                                value="{{ old('name') }}" class="form-control form-control-lg" />
                                            @error('name')
                                                <p class="mb-0 shadow-sm small alert alert-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2 text-start">
                                            <label class="form-label" for="registerEmail">Email</label>
                                            <input type="email" id="registerEmail" name="email"
                                                value="{{ old('email') }}" class="form-control form-control-lg" />
                                            @error('email')
                                                <p class="mb-0 shadow-sm small alert alert-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-2 text-start">
                                            <label class="form-label" for="registerPassword">Password</label>
                                            <input type="password" id="registerPassword" name="password"
                                                class="form-control form-control-lg" />
                                            @error('password')
                                                <p class="mb-0 shadow-sm small alert alert-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-5 text-start">
                                            <label class="form-label" for="registerConfirmPassword">Confirm
                                                Password</label>
                                            <input type="password" id="registerConfirmPassword"
                                                name="password_confirmation" class="form-control form-control-lg" />
                                            @error('password_confirmation')
                                                <p class="mb-0 shadow-sm small alert alert-danger">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>

                                        <button type="submit" class="btn btn-outline-dark btn-lg px-5">
                                            SignUp
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
