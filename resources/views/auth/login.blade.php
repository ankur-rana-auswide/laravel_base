<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supreme Kitchens | Login</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/portal_img/fav.png')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        
        html {
           font-family: "Poppins", sans-serif;
        }
    
        .full-height {
            height: 100vh;
        }
        .vertical-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .left-image {
            background: url('path_to_your_image.jpg') no-repeat center center;
            background-size: cover;
        }
        input {
            font-size: 14px !important;
            font: normal normal normal 16px/23px Roboto;
            
        }

        .form-control:focus {
            color: #D4A848 !important;
            border-color : #D4A848 !important;
            box-shadow  :none !important;
        }

        li {
            list-style-type: none !important;
        }
        ul {
            padding: 0 !important;
        }
        
        @media screen and (max-width: 767px) {
        #my_form {padding:6% !important;}
        }

        .btn:hover {
            background-color: #D4A848 !important;
            color: white !important;
            border:  1px #D4A848 !important;

            top: 709px;
            left: 1305px;
            width: 390px;
            height: 56px;
            /* UI Properties */
            opacity: 1;

        }

        body {
            /* font: normal normal normal  Poppins !important; */
            font-family: 'Poppins', sans-serif !important;
        }
        
        .btn-dark.focus, .btn-dark:focus {
            box-shadow: none !important;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row full-height">
        <!--div class="col-md-7 left-image d-none d-md-block" style="background-image: url('{{asset('assets/portal_img/Login_image.png')}}');">
            
            <div class="centered" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color:white;"><h style="top: 491px;
left: 378px;
width: 402px;
height: 112px;
/* UI Properties */
text-align: center;
font: normal normal normal 80px/120px Poppins;
letter-spacing: 0px;
color: #FAFAFA;
opacity: 1;"1>Welcome!</h1></div>
        </div-->
        
        <div class="col-md-3 vertical-center" style="text-align:center;margin: 10% auto !important;">
            <div class="w-100 lg:w-50">
                <x-auth-session-status class="mb-4" :status="session('status')" />

            
                <form id="my_form" method="POST" action="{{ route('login') }}">
                    @csrf
                        <p style="margin-bottom: 20%; background:#000;border-radius: 10px;">
                        <img src="{{asset('assets/portal_img/Logo.png')}}" alt="" style="top: 315px;padding: 20px;
left: 1305px;
width: 100%;
height: auto;
/* UI Properties */
background: transparent url('img/Logo.png') 0% 0% no-repeat padding-box;
opacity: 1;">
                        </p>

                        <p  style="top: 476px;
left: 1305px;
width: 100%;
height: auto;
/* UI Properties */
text-align: left;
font: normal normal normal 26px/39px Poppins;
letter-spacing: 0px;
color: #D4A848;
opacity: 1;">Sign in to your account</p>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                        <input id="email" style="top: 611px;
left: 1305px;
width: 100%;
height: 48px;
/* UI Properties */
background: #FFFFFF 0% 0% no-repeat padding-box;
border: 1px solid #CED4DA;
border-radius: 6px;
opacity: 1;font: normal normal normal 16px/23px Roboto;" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />

                        @error('email')
                            <div class="text-danger" style="font-size:15px;">{{$message}}</div>
                            @enderror  
                        
                        </div>
            
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-3">
                        <input id="password" class="form-control form-control-lg"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" style="top: 611px;
left: 1305px;
width: 100%;
height: 48px;
/* UI Properties */
background: #FFFFFF 0% 0% no-repeat padding-box;
border: 1px solid #CED4DA;
border-radius: 6px;
opacity: 1;font: normal normal normal 16px/23px Roboto;" placeholder="Password" />

                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
            
                        </div>
            
                        <div class="text-center text-lg-start mt-0 pt-2">
                        <button  type="submit"  class="btn btn-dark btn-lg bg-black" style="top: 709px;
left: 1305px;
width: 100%;
height: 56px;
/* UI Properties */
background: #000000 0% 0% no-repeat padding-box;
border-radius: 6px;
opacity: 1;color: #D4A848;font: normal normal normal 16px/25px Poppins;">LOGIN</button>
                        </div>
                    </form>
            </div>
        </div> 
    </div>
</div>

</body>
</html>
