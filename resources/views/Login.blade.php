<?php 
    session_start();
    // include '../includes/css_js_files.php';
    // require '../config/language/en.php';
?>
<!DOCTYPE html>
<html lang="en" translate="no">
    <head>

        <title>{{ config('app.name') }} | Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="{{ asset('media/logo.png') }}"/>
    </head>
    <body id="kt_body" class="bg-body">     
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color:#006A4A">
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                            <a href="#" class="py-9 mb-5">
                                <img alt="Logo" src="{{ asset('media/logo.png') }}" class="h-100px"/>
                            </a>
                            <h1 class="fw-bolder fs-2qx" style="color: #ffffff;"><?php echo 'Sig-Recettes';?> </h1>
                            <!-- <span class="text-gray-400"><i style=""><?php //echo $lang['slogan'];?></i></span> -->
                            <span class="text-gray-400"><i style=""><?php echo 'Anywhere, Anytime';?></i></span>
                              <img alt="Logo" src="{{ asset('media/icons/login.svg') }}" style="padding-bottom:20px; padding-left: 10px;" align="center" height="300px"/>
                        </div>
                        <div class="">
                            
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                            <form class="form w-100" novalidate="novalidate" id="form_submit" action="#" method="POST">
                                <div class="text-center mb-10">
                                    <!-- <h1 class="text-successs mb-3"><?php //echo $lang['sign_in'];?></h1> -->
                                     <h1 class="text-successs mb-3">Sign In</h1>
                                </div>
                                <div class="fv-row mb-10">
                                    <label class="form-label fs-6 fw-bolder text-dark"><?php echo 'Username'?></label>
                                    <input maxlength="30" class="form-control form-control-lg form-control-solid" type="text" name="username" value="admin" autocomplete="off" placeholder="<?php echo 'Usernane'?>" />
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="d-flex flex-stack mb-2">
                                        <label class="form-label fw-bolder text-dark fs-6 mb-0"><?php echo 'Password';?></label>
                                        <a href="<?php //echo $routes->get('forget_pass')->getPath() ?>" class="link-success fs-6 fw-bolder"><?php echo 'Forget Password';?>?</a>
                                    </div>
                                    <input maxlength="30" class="form-control form-control-lg form-control-solid" type="password" name="password" value="admin" autocomplete="off" placeholder="<?php //echo $lang['placeholder_pass'];?>"/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="login_submit" class="btn btn-lg btn-success w-100 mb-5">
                                        <span class="indicator-label"><?php echo 'Submit';?></span>
                                        <span class="indicator-progress"><?php echo 'Please Wait';?>
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php //include('modals/help.php');?>
                    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                        <div class="d-flex flex-center fw-bold fs-6">
                            <!-- <a href="#" class="text-muted text-hover-success px-2" data-bs-toggle="modal" data-bs-target="#kt_modal_help">Help</a> -->
                        </div>
                    </div>
                    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                        <div class="d-flex flex-center fw-bold fs-6">
                            <a class="text-muted text-hover-success px-2">&copy;<?php echo '2023';?></span> <?php echo 'Sig-Recettes'?>.  Go to Dashboard <a href="/home">Here</a></a>
                            <a href="#" class="text-muted text-hover-success px-2" data-bs-toggle="modal" data-bs-target="#kt_modal_help"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js'"></script>
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('general_authenticate.js') }}"></script>
       <script type="text/javascript">
        "use strict";

    var KTSigninGeneral = function () {
    var t, e, i;
    
    return {
        init: function () {
            t = document.querySelector("#form_submit"),
            e = document.querySelector("#login_submit"),
            i = FormValidation.formValidation(t, {
                fields: {
                    username: {
                        validators: {
                            notEmpty: {
                                message: "Username is required"
                            },
                            stringLength: {
                                min: 5,
                                message: "Username must be at least 5 characters long"
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: "The password is required"
                            },
                            stringLength: {
                                min: 5,
                                message: "Password must be at least 5 characters long"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            });
            // ---------------------------------
            // progressContainer = document.createElement("div");
            // progressLabel = document.createElement("span");
            // progressBar = document.createElement("span");

            // // Set attributes and classes for progress elements
            // progressContainer.classList.add("indicator-progress");
            // progressLabel.classList.add("indicator-label");
            // progressBar.classList.add("spinner-border", "spinner-border-sm", "align-middle", "ms-2");

            // // Append progress elements to the button
            // progressContainer.appendChild(progressLabel);
            // progressContainer.appendChild(progressBar);
            // e.appendChild(progressContainer);
            // ---------------------------------

            e.addEventListener("click", (function (event) {
                event.preventDefault();
                i.validate().then((function (validationResult) {
                    if ("Valid" == validationResult) {
                        e.setAttribute("data-kt-indicator", "on");
                        e.disabled = true;
// -----------------------------
                        // // Show progress elements
                        // progressLabel.innerHTML = "Please wait...";
                        // progressBar.style.display = "inline-block";
// --------------------------------------
                        // Perform login using Fetch
                       fetch('', {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                username: document.querySelector('[name="username"]').value,
                                password: document.querySelector('[name="password"]').value
                            })
                        })
                        .then((response) => response.json())
                        .then((response) => {
                            if(response.status==='error'){
                               Swal.fire({
                                    text: "Sorry, Invalid credentials.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                            else if(response.status==='success'){
                                  window.location.href = "<?php //echo $routes->get('dashboard')->getPath();?>";
                            } else {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        })
                        .finally(() => {
                            // --------------------------

                            // progressLabel.innerHTML = "";  // Clear the label
                            // progressBar.style.display = "none";
                            // --------------------------
                            e.removeAttribute("data-kt-indicator");
                            e.disabled = false;
                        });
                    }
                }));
            }));
        }
    }
}();
        KTUtil.onDOMContentLoaded((function () {
            KTSigninGeneral.init();
        }));

    </script>
 </body>
</html>