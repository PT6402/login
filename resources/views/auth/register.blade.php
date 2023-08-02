<div class="modal-content">
    <div class="modal-header border-bottom-0">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body pt-0">
        <form action="{{ route('register') }}" method="POST" id="form_register">
            @csrf

            <!-- Name input -->
            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label" for="registerName">Name</label>
                <input type="text" id="registerName" class="form-control" name="name" />
            </div>

            <!-- Email input -->
            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label" for="registerEmail">Email</label>
                <input type="email" id="registerEmail" class="form-control" name="email" />
            </div>
            <!-- Phone input -->

            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label" for="registerUsername">Phone</label>
                <input type="text" id="registerUsername" class="form-control" name="phone" />
            </div>
            <!-- Date input -->

            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label"
                    for="registerUsername">DateOfBirth</label>
                <input type="date" id="registerDate" class="form-control" name="date" />
            </div>



            <!-- Password input -->
            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label" for="registerPassword">Password</label>
                <input type="password" id="registerPassword" class="form-control" name="password" />
            </div>

            <!-- Repeat Password input -->
            <div class="form-outline mb-2">
                <label style="display: block;margin: -1px"class="mb-form-label" for="registerRepeatPassword">Confirm
                    password</label>
                <input type="password" id="registerRepeatPassword" class="form-control" name="password_confirmation" />
            </div>

            {{-- <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
            aria-describedby="registerCheckHelpText" />
          <label class="form-check-label" for="registerCheck">
            I have read and agree to the terms
          </label>
        </div> --}}
            <!-- Register buttons -->
            <div class="text-center">
                <p>Already account? <a class="link-underline-primary cus" data-bs-target="#exampleModalToggle"
                        role="button" data-bs-toggle="modal">Sign in</a></p>

            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-3"
                style="display:block;width: 50%;margin: auto">Sign up</button>
        </form>
    </div>

</div>
