<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap 5.2.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Font Awesome 6.2.1 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Sweetalert2 11.7.0 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.min.css">
    <!-- Jquery 3.6.3 JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js' integrity='sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==' crossorigin='anonymous'></script>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

        .h-custom {
            height: calc(100% - 73px);
        }

        @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
        }

        @keyframes shake {

            0%,
            100% {
                translate: 0;
            }

            25% {
                translate: 8px 0;
            }

            75% {
                translate: -8px 0;
            }
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            border-color: #D43F3A;
            box-shadow: none;
            animation: shake 0.14s 3;
        }

        input.parsley-error:focus,
        select.parsley-error:focus,
        textarea.parsley-error:focus {
            border-color: #D43F3A;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #FF8F8A;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            border-color: none;
            box-shadow: none;
            animation: none;
        }

        input.parsley-success:focus,
        select.parsley-success:focus,
        textarea.parsley-success:focus {
            border-color: none;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #89D489
        }

        .parsley-errors-list {
            list-style-type: none;
            padding-left: 0;
            margin-top: 5px;
            margin-bottom: 0;
        }

        .parsley-errors-list.filled {
            color: #D43F3A;
            opacity: 1;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-4 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="../assets/img/9822c8b13f5aeca240103dc7aa093541.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-4 text-black">

                                    <form data-parsley-validate="" novalidate="" onsubmit="return false">

                                        <div class="d-flex align-items-center mb-3">
                                            <i class="fas fa-database fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">PinRu</span>
                                        </div>

                                        <h5 class="fw-normal mb-3" style="letter-spacing: 1px;">Create your
                                            account</h5>

                                        <div class="d-flex flex-row align-items-center mb-1">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="username" class="form-control form-control-lg" placeholder="Username" data-parsley-trigger="keyup" data-parsley-required="true" data-parsley-error-message="Please insert your username" />
                                            </div>
                                        </div>

                                        <div>

                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" id="email" class="form-control form-control-lg" placeholder="Email" data-parsley-trigger="keyup" data-parsley-required="true" data-parsley-pattern="/@gmail\.com$/" data-parsley-error-message="Please insert your Email (@gmail.com)" />
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" id="password" class="form-control form-control-lg" placeholder="Password" data-parsley-trigger="keyup" data-parsley-required="true" data-parsley-length="[8, 16]" data-parsley-error-message="Please insert your password (8 karakter)" />
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" id="confirm-password" class="form-control form-control-lg" placeholder="Repeat password" data-parsley-trigger="keyup" data-parsley-required="true" data-parsley-equalto="#password" data-parsley-error-message="Please confirm your password (8 karakter)" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="pt-1 mb-2">
                                            <button id="register_btn" class="btn btn-dark btn-sm btn-block" type="submit">Sign Up</button>
                                        </div>

                                        <p class="mb-0 pb-lg-1" style="color: #393f81;">Have already an account? <a href="login.php" style="color: #393f81;">Login here</a></p>
                                        <a href="" class="small text-muted">Terms of use.</a>
                                        <a href="" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Register JS Me -->
    <script>
        document
            .getElementById("register_btn")
            .addEventListener("click", (e) => {
                var email = document.getElementById("email").value;
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                var confirmPass =
                    document.getElementById("confirm-password").value;
                if (username && password && confirmPass && email) {
                    Swal.fire({
                        icon: "success",
                        title: "Success Registering Your Account!",
                    });
                    Swal.getConfirmButton(
                        setTimeout(() => {
                            window.location.href = "login.html";
                        }, 3000)
                    );
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "You have to enter your data in fields!",
                    });
                }
            });
    </script>
    <!-- Bootstrap 5.2.3 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <!-- Sweetalert2 11.7.0 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.0/dist/sweetalert2.all.min.js"></script>
    <!-- Parsley 2.9.2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
</body>

</html>