<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reset Password</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .wrapper {
            min-height: 95vh;
            min-width: 90vw;
            display: flex;
            background-image: linear-gradient(120deg, #a6c0fe 0%, #f68084 100%);
            justify-content: center;
            align-items: center;
            }
            .wrapper .image-holder {
            /* // width: 69.9%; */
            width: 55%;
            }
    
            /* .wrapper .image-holder span:first-of-type {
            height: 90vh;
            } */
            .wrapper .form-inner {
            width: 55%;
            padding: 20px;
            }
    
            .image-holder {
            /* // background: url("../images/registration-form-8.jpg") no-repeat; */
            background-size: cover;
            }
            .image-holder img {
            display: none;
            }
    
            .wrapper .form-inner {
            background: #6059a0;
            // padding-top: 16.36vh;
            // padding-left: 4vw;
            // padding-right: 4vw;
            display: flex;
            justify-content: center;
            }
    
            .wrapper form {
            width: 80%;
            }
    
            .wrapper .form-header {
            text-align: center;
            margin-bottom: 39px;
            // font-family: "Alfa Slab One";
            }
            .wrapper h3 {
            // text-transform: uppercase;
            font-size: 40px;
            color: #041131;
            font-family: "Alfa Slab One";
            // font-family: "ChelseaMarket-Regular";
            }
    
            .wrapper label {
            margin-bottom: 11px;
            display: block;
            color: white;
            }
    
            .wrapper .form-group {
            margin-bottom: 26px;
            position: relative;
            }
    
            .login-error-text {
            font-weight: 700;
            color: #970404;
            font-size: 18px;
            text-align: center;
            margin: 10px;
            }
    
            .login-hr {
            // mt-6 border-b-1 border-gray-400
            margin-top: 24px;
            border-color: rgb(82, 83, 83);
            border-bottom: 4px;
            }
    
            .wrapper .form-control {
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            display: block;
            width: 100%;
            height: 45px;
            background: #fff;
            padding: 0 19px;
            color: #000;
            font-size: 17px;
            }
            .wrapper .form-control.error {
            border-color: #fd677a !important;
            // background: url("../images/error.png") no-repeat center right 19px;
            }
            .form-control.valid {
            // background: url("../images/valid.png") no-repeat center right 19px;
            }
    
            .wrapper .form-error {
            margin-top: 10px;
            display: inline-block;
            }
    
            .wrapper button {
            border: none;
            width: 100%;
            height: 46px;
            border-radius: 22.5px;
            margin: auto;
            margin-top: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            background: #fff;
            color: #2c1aca;
            text-transform: uppercase;
            font-size: 17px;
            overflow: hidden;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            }
            .wrapper button:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #0b0450;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            }
            .wrapper button:hover {
            color: white;
            }
            .wrapper button:hover:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            }
            .wrapper .btn {
            border: none;
            width: 100%;
            height: 46px;
            border-radius: 22.5px;
            margin: auto;
            margin-top: 40px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            background: #fff;
            color: #2c1aca;
            text-transform: uppercase;
            font-size: 17px;
            overflow: hidden;
            -webkit-transform: perspective(1px) translateZ(0);
            transform: perspective(1px) translateZ(0);
            position: relative;
            -webkit-transition-property: color;
            transition-property: color;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            }
            .wrapper .btn:before {
            content: "";
            position: absolute;
            z-index: -1;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #0b0450;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transform-origin: 50%;
            transform-origin: 50%;
            -webkit-transition-property: transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
            }
            .wrapper .btn:hover {
            color: white;
            }
            .wrapper .btn:hover:before {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            }
            
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-400 dark:bg-gray-900 sm:items-center sm:pt-0">
                <div class="wrapper">
                    <div className="form-inner" style="width: 45%;">
                    @if($message !== 'success')
                    <form action={{ url('/api/forgetpwd') }} method="post">
                        <div class="form-header">
                            <h3>MobiNFT</h3>
                            <hr class="login-hr" />
                        </div>
                        <div class="form-group">
                            <label htmlFor="">Email</label>
                            <input type="email" name='email' class="form-control">
                        </div>
                        <div class="form-group">
                            <label htmlFor="">New Password</label>
                            <input type="password" name='password' class="form-control">
                        </div>
                        <div class="form-group">
                            <label htmlFor="">Confirm Password</label>
                            <input type="password" name='confirm_password' class="form-control"/>
                        </div>
                        <input type="hidden" name="token" value="{{$token}}" />
                        <button>Reset Password</button>
                    </form>
                    @else
                    <a href="//mobinft.co/login/app" class="btn">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
