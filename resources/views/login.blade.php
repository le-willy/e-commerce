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
                                <div class="tab-pane fade show active" id="log-in-pane" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <p class="text-black-50 mt-3 mb-5">Please enter your login and password!</p>

                                    <div class="form-outline form-black mb-2 text-start">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-black mb-2 text-start">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" spellcheck="false" autocorrect="off"
                                            autocapitalize="off" class="form-control form-control-lg" />
                                    </div>

                                    <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot
                                            password?</a></p>
                                    <a href="#" class="btn btn-outline-dark btn-lg px-5">Login</a>
                                </div>

                                <div class="tab-pane fade" id="sign-in-pane" role="tabpanel"
                                    aria-labelledby="singin-tab">
                                    <p class="text-black-50 mt-3 mb-5">Please enter your personal details!</p>

                                    <div class="form-outline form-black mb-2 text-start">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-black mb-2 text-start">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" spellcheck="false" autocorrect="off"
                                            autocapitalize="off" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-black mb-5 text-start">
                                        <label class="form-label" for="confirmPasswordX">Confirm Password</label>
                                        <input type="password" id="comfirmPasswordX" spellcheck="false"
                                            autocorrect="off" class="form-control form-control-lg" />
                                    </div>

                                    <a href="#" class="btn btn-outline-dark btn-lg px-5">Sign In</a>

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>
