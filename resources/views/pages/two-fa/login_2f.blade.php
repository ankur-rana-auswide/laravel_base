<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supreme Kitchens | Two-FA</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/portal_img/fav.png')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
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



        .otp-field {
  flex-direction: row;
  column-gap: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.otp-field input {
  height: 45px;
  width: 42px;
  border-radius: 6px;
  outline: none;
  font-size: 1.125rem;
  text-align: center;
  border: 1px solid #ddd;
}
.otp-field input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.otp-field input::-webkit-inner-spin-button,
.otp-field input::-webkit-outer-spin-button {
  display: none;
}

.resend {
  font-size: 12px;
}

.footer {
  position: absolute;
  bottom: 10px;
  right: 10px;
  color: black;
  font-size: 12px;
  text-align: right;
  font-family: monospace;
}

.footer a {
  color: black;
  text-decoration: none;
}

@media screen and (max-width: 767px) {
    .cust_two_text {
        font-size: 22px !important;
    }


    .cust_img_lock {
        width: 106px !important;
        height: auto !important;
    }

    .cust_slog_two_text {
        font-size: 13px !important;
    }
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


        input {
            font-size: 14px !important;
            font: normal normal normal 16px/23px Roboto !important;
            background: #F2F2F2 0% 0% no-repeat padding-box;
            
        }

        body {
            font-family: Poppins !important;
        }


        .btn-dark.focus, .btn-dark:focus {
            box-shadow: none !important;
        }

    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row full-height">
        <div class="col-md-3 vertical-center" style="text-align:center;margin: 10% auto !important;">
            <div class="w-100">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />

                    
                  
            
                <form method="POST" action="{{route('login_2fa')}}" id="otp-form">
                    @csrf
                        <p style="margin-bottom: 10%;text-align: center;background:#000;border-radius: 10px;">
                        <img src="{{asset('assets/portal_img/Logo.png')}}" alt="" style="top: 315px;left: 1305px;width: 60%;height:90%;opacity: 1;">
                        </p>

                        <p style="text-align: center !important;">
                            <img class="cust_img_lock" src="{{asset('assets/portal_img/two_FA_Icon.png')}}" alt="" style="top: 315px;left: 1305px;width: 160px;height: 160px;opacity: 1;">
                            </p>

                        <p >
                            <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </p>
                        <p class="cust_two_text"  style="top: 476px;font: normal normal normal 26px/39px Poppins;letter-spacing: 0px;color: #D4A848;opacity: 1;font-size:24px;margin-bottom: 0px !important;text-align: center;font-weight: 500;">Two Factor Authentication</p>
                        
                        <span class="mb-2 cust_slog_two_text" style="font: normal normal normal 20px / 30px Poppins;
                        font-size: 14px;color: #000000;">Enter the code displayed in your authentication app</span>
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4 mt-3">
                        <!-- <input id="code" class="form-control form-control-lg" type="text" name="code" :value="old('code')" required autofocus  placeholder="OTP" /> -->

                        
                        <div class="otp-field mb-4">
                            <input type="number"  class="otp-input" maxlength="1" autofocus required />
                            <input type="number"  class="otp-input" maxlength="1" required  />
                            <input type="number"  class="otp-input" maxlength="1" required  />
                            <input type="number"  class="otp-input" maxlength="1"  required />
                            <input type="number"  class="otp-input" maxlength="1"  required />
                            <input type="number"  class="otp-input" maxlength="1"  required />

                            <input id="code" class="form-control form-control-lg" type="hidden" name="code" :value="old('code')" required autofocus  placeholder="OTP" /> 


                          </div>


                          <div class="text-sm text-gray-600 dark:text-gray-400">

                            @if(Session::has('error'))
                                <div class="alert " style="color: red;text-align: center;" >
                                <strong class="font-bold">Error : </strong>
                                <span class="">{{session('error')}}</span>
                                </div>
                            @endif
                        </div>

                          <div class="row text-center text-lg-start  pt-2" style="margin-top:10%;">
                            <div class="col-md-8 m-auto">
                            <button  type="submit"  class="btn btn-dark btn-lg bg-black" style="font: normal normal normal 16px/25px Poppins;top: 709px;left: 1305px;width: 100%;height: 56px;/* UI Properties */background: #000000 0% 0% no-repeat padding-box;border-radius: 6px;opacity: 1;color: #D4A848;font: normal normal normal 16px/25px Poppins;">VERIFY</button>
                            </div>
                      
                        </div>
                          

                          
                          
                        
                        </div>
            
                     
                       
                    </form>
            </div>
        </div>
    </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('otp-form');
    const hiddenInput = document.getElementById('code');
    const inputs = document.querySelectorAll('.otp-input');

    inputs.forEach((input, index) => {
        input.addEventListener('input', () => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (event) => {
            if (event.key === 'Backspace' && input.value.length === 0 && index > 0) {
                inputs[index - 1].focus();
            }
        });

        input.addEventListener('paste', (event) => {
            const paste = event.clipboardData.getData('text');
            if (paste.length === inputs.length) {
                inputs.forEach((inp, i) => inp.value = paste[i] || '');
                inputs[inputs.length - 1].focus();
                event.preventDefault();
            }
        });
    });

    form.addEventListener('submit', (event) => {
        let otpValue = '';
        inputs.forEach(input => {
            otpValue += input.value;
        });
        hiddenInput.value = otpValue;
    });
});

</script>

</body>
</html>

