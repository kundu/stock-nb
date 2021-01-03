<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
<link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Loding font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            text-rendering : optimizeLegibility;
            -webkit-font-smoothing : antialiased;
        }


        #login-bg.container-fluid {
            padding: 0;
            height: 100%;
            position: absolute;
        }

        /* Background image an color divs*/

        .bg-img , .bg-color {
            min-width: 100vw;
            vertical-align: top;
            padding: 0;
            margin-left: 0;
            height: 100%;
            background-color: #318AC2;
            display: inline-block;
            overflow: hidden;
        }

        .bg-color {
            margin-left: -5px;
        }

        .bg-img {
            background-image: url('{{ asset('/images/lgbg.jpg') }}');
            background-size: cover;
        }

        #login{
            padding-top: 10%;
            text-align: center;
            text-transform: uppercase;
        }


        .login {
            width: 75%;
            height: 100%;
            background-color: #fff;
            padding: 15px;
            padding-top: 30px;
            box-shadow: -1px -1px 28px 16px rgba(0,0,0,0.75);
            border-radius: 10px;
            margin: 0 auto;
        }

        .login h1 {
            margin-top: 16px;
            font-weight: bold;
            font-size: 30px;
            color: #318AC2;
        }

        .login img
        {
            height: 80px;
            width: 240px;
        }

        .login form {
            max-width: 420px;
            margin: 30px auto;
        }

        .login .btn {
            border-radius: 50px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
            font-size: 18px;
            padding: 10px;
            background-color: #318AC2;
        }

        .form-group input {
            font-size: 18px;
            font-weight: lighter;
            border: 1px solid #318AC2;
            background-color: #F0F0F0;
            color: #465347!important;
            padding: 26px 30px;
            border-radius: 50px;
            transition : 0.2s;
        }




        /* Form check styles*/

        .form-check {
            padding: 0;
            text-align: left;
        }

        .form-check label {
            vertical-align: top;
            padding-top: 5px;
            padding-left: 5px;
            font-size: 15px;
            color: #606060;
            font-size: 14px;
        }

        .forgot-password {
            text-align: right;
            float: right;
            font-weight: bold;
        }

        .forgot-password a {
            color: #318AC2;
            opacity: 0.6;
        }

        .forgot-password a:hover {
            opacity: 1;
        }





        /* Media queries */

        @media(max-width: 500px) {
            .bg-img , .bg-color {
            min-width: 100%;
            height: 50%;
            margin: 0;
            }

            .forgot-password {
            text-align: right;
            float: left;
            padding: 20px 0;
            }


            #login {
                padding-top: 50px;
            }

        }
    </style>

    <title>Login</title>
</head>
<body>

<!-- Backgrounds -->

<div id="login-bg" class="container-fluid">

    <div class="bg-img"></div>
</div>

<!-- End Backgrounds -->

<div class="container" id="login">
    <div class="row justify-content-center">
        <div class="col-lg-8" style="    width: -webkit-fill-available;">
            <div class="login">
@include('sweetalert::alert')

                {{-- <img class="mx-auto d-block" src="{{ asset('/images/logo.png') }}"> --}}
                <h1>Login</h1>


                <!-- Loging form -->
                <form action="{{ URL::to('/login-check') }}" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="form-group">
                        <input type="number" class="form-control" name="phone"  placeholder="Enter phone">

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <br>
                    <button type="submit" class="btn btn-lg btn-block btn-success">Sign in</button>
                    <div class="form-check">

                        <label class="forgot-password"><a href="#">Forgot Password?<a></label>

                    </div>
                </form>
                <!-- End Loging form -->

            </div>
        </div>
    </div>
</div>


</body>
</html>
