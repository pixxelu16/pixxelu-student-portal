<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="TemplateMo">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
         integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />
      <title>Admin Login</title>
      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="{{ url('public/admin/css/style.css') }}">
   </head>
   <body>
      <div class="login-page">
         <div class="container">
            <div class="main-tech">
               <div class="tech-logo">
                  <div class="logo">
                     <img src="{{ url('public/admin/images/logo-login.png') }}" alt="login-logo">
                  </div>
               </div>
               <div class="tech-head">
                  <div class="head">
                     <h2>Welcome Back</h2>
                     <span>Enter your details below</span>
                  </div>
               </div>
               <div class="tech-login">
                  <div class="login">
                     <form class="login-container" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="email">
                           <label>Email</label>
                           <div class="col-md-6">
                              <p><img src="{{ url('public/admin/images/mail.svg') }}" alt="mail"><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></p>
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="pass">
                           <label>Password</label>
                           <div class="col-md-6">
                              <p class="lock"><img src="{{ url('public/admin/images/lock.svg') }}" alt="lock"><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></p>
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                           </div>
                        </div>
                        <div class="forgot-pass">
                           <span> @if (Route::has('password.request'))
                           <a class="btn btn-link" href="{{ route('password.request') }}">
                           {{ __('Forgot Your Password?') }}
                           </a>
                           @endif</span>
                        </div>
                        <div class="sign-up">
                           <button type="submit" class="btn btn-primary login-submit">Sign In
                           <span class="login-arrow"> <i class="fa fa-arrow-right"
                              aria-hidden="true"></i></span>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>