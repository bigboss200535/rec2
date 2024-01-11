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
            }),
            e.addEventListener("click", (function (event) {
                event.preventDefault();
                i.validate().then((function (validationResult) {
                    if ("Valid" == validationResult) {
                        e.setAttribute("data-kt-indicator", "on");
                        e.disabled = true;

                        // Perform login using Fetch
                       fetch('<?php echo APP_ROOT; ?>../public/login.php', {
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
                        .then((data) => {
                            if (data.error) {
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
                            else if (data.success) {
                                // Redirect to dashboard.php view 
                                window.location.href = "<?php echo $routes->get('dashboard')->getPath();?>";
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
