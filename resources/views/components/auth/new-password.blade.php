<!-- Callback Start -->
<div class="container-fluid callback my-5 pt-5" id="registerSchool">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bg-white border rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        </p>
                        <h4 class="display-5 mb-5">New Password!</h4>
                    </div>
                    <form action="" method="POST">

                        <div class="row g-3">

                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" name="password" class="form-control" id="mail">
                                    <label for="mail">New Password</label>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-floating">
                                    <input type="password" name="password-confirmation" class="form-control" id="mail">
                                    <label for="mail">Confirm Password</label>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-100 py-3" type="submit">Save password</button>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <p><a class="" href="/"><i class="bi bi-arrow-left-square-fill"></i> Back Home</a></p>
                                <p>Already have account? Sign In </a> or <a class="" href="{{ route('login') }}">here</a></p>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Callback End -->
