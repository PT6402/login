<div class="modal-content">
    <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5 " id="exampleModalToggleLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form method="POST" id="form_login">

            @csrf


            <!-- Email input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="loginEmail">Email</label>
                <input type="email" id="loginEmail" class="form-control" name="email" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-2">
                <label class="form-label" for="loginPassword">Password</label>
                <input type="password" id="loginPassword" class="form-control" name="password" />
            </div>

            <!-- 2 column grid layout -->
            <div class="row mb-4">
                {{-- <div class="col-md-6 d-flex justify-content-between">
            <!-- Checkbox -->
            <div class="form-check mb-3 mb-md-0">
              <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
              <label class="form-check-label" for="loginCheck"> Remember me </label>
            </div>
          </div> --}}

                <div class=" d-flex justify-content-start">
                    <!-- Simple link -->
                    <a class="link-underline-primary cus" data-bs-target="#exampleModalForgot" role="button"
                        data-bs-toggle="modal">Forgot password</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class=" btn btn-primary btn-block" style="display:block;width: 50%;margin: auto">Sign
                in</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not account? <a class="link-underline-primary cus" data-bs-target="#exampleModalToggle2"
                        role="button" data-bs-toggle="modal">Register</a></p>

            </div>
        </form>
    </div>
    <div class="modal-footer">
        <div class="text-center m-auto">

            <button type="button " class="btn btn-link btn-floating mx-1 rounded-circle border text-black">
                <i class="fab fa-facebook-f"></i>
            </button>

            <button type="submit" class="btn btn-link btn-floating mx-1 rounded-circle border text-black">
                <i class="fab fa-google"></i>
            </button>


        </div>
    </div>
</div>
