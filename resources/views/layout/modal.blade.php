<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        @include('auth.login')

    </div>
</div>
<div class="modal fade" id="exampleModalForgot" aria-hidden="true" aria-labelledby="exampleModalForgotLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        @include('auth.forgot')
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        @include('auth.register')
    </div>
</div>
<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
    style="display: block ; margin: 2rem auto">Login</button>
<script>
    $(document).ready(function() {
        $('#form_login').submit(function(e) {

            e.preventDefault();
            var _token = $("input[name='_token']").val();
            var email = $("input[name='email']").val();
            var password = $("input[name='password']").val();
            $.ajax({
                type: "POST",
                url: "{{ route('login') }}",
                data: {
                    _token: _token,
                    email: email,
                    password: password,
                },
                // dataType: "dataType",
                success: function(response) {
                    console.log(response)
                    $("#errorEmail").remove()
                    $("#errorPass").remove()
                    if (response.error?.email) {
                        $(`<p style="color:red" id="errorEmail">${response.error.email[0]}</p>`)
                            .insertAfter('#loginEmail');

                    }
                    if (response.error?.password) {
                        $(`<p style="color:red" id="errorPass">${response.error.password[0]}</p>`)
                            .insertAfter(
                                '#loginPassword');
                    }
                    if (response.checkEmail) {
                        // $("#errorEmail").remove()
                        $(`<p style="color:red" id="errorEmail">${response.checkEmail}</p>`)
                            .insertAfter(
                                '#loginEmail');
                    }

                    if (response.checkPass) {
                        // $("#errorPass").remove()
                        $(`<p style="color:red" id="errorPass">${response.checkPass}</p>`)
                            .insertAfter(
                                '#loginPassword');
                    }
                }
            });
        })
    })
</script>
