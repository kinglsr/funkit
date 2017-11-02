@extends('layouts.app')

@section('content')
<div class="main-content">
     <div class="welCome">WelCome to FunKit !</div>
     <!--Login Container STARTED-->
     <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
         <div class="login-container">
             <!--Login Register Text STARTED-->
             <div class="lgrg">Login</div>
             <!--Login Register Text FINISHED-->
            <!--Login Divs STARTED-->
            <div class="login"><input type="text"  name="email" class="input-login" id="usernameOremail" placeholder="Username or E-Mail" required /></div>
            <div class="login"><input type="password"  name="password" class="input-login" id="password" placeholder="password" required/></div>
            <div class="loginbutton"><input type="submit" class="login-btn" value="Login"/></div>
            <!--Login Divs FINISHED-->
            <!--Forgot Password and Remember me STARTED-->
            <div class="forgot-remember">
               <div class="f-r"><a href="{{ route('password.request') }}">Forgot password</a></div>
               <div class="f-r"><label><input type="checkbox" class="rememberme" name="remember" {{ old('remember') ? 'checked' : '' }}/>Remember me</label></div>
            </div>
            <!--Forgot Password and Remember me FINISHED-->
            <!--Or sign in with social account STARTED-->
            <div class="or"><div class="orarrow"><span class="bold">OR</span> sign in with</div></div>
            <div class="sign-in-with-social-account">
               <div class="sign-in-with" data-position="bottom" data-delay="50" data-tooltip="Sign in with Facebook"><div class="face fb"></div></div>
               <div class="sign-in-with" data-position="bottom" data-delay="50" data-tooltip="Sign in with Google Plus"><div class="gop gp"></div></div>
            </div>
            <!--Or sign in with social account FINISHED-->
         </div>
    </form>
     <!--Login Container FINISHED-->
     <!--Or Register Arrow STARTED-->
     <div class="or-register">You don't have an account? No problem register it is free!</div>
     <!--Or Register Arrow FINISHED-->
     <!--Register Container STARTED-->
     <div class="register-container">
         <!--Login Register Text STARTED-->
         <div class="lgrg">Register</div>
         <!--Login Register Text FINISHED-->
       <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
           <div class="regCo">   
             <div class="register"><input type="text" class="_register" name="name" placeholder="Full Name" required /></div>
             <div class="register"><input type="email" class="_register" name="email" placeholder="Email" required /></div>
             <div class="register"><input type="password" class="_register" name="password" placeholder="Password" required /></div>
             <div class="register"><input type="password" class="_register" name="password_confirmation" placeholder="Reenter Password" required /></div>
             <div class="register"><div class="_regbtn"><input type="submit" class="regbtn" value="Register"/></div></div>
           </div>
       </form> 
       <!--Or sign in with social account STARTED-->
        <div class="or"><div class="orarrow"><span class="bold">OR</span> register with</div></div>
        <div class="sign-in-with-social-account">
           <div class="sign-in-with" data-position="bottom" data-delay="50" data-tooltip="Register with Facebook account"><div class="face fb"></div></div>
           <div class="sign-in-with" data-position="bottom" data-delay="50" data-tooltip="Register with Google Plus account"><div class="gop gp"></div></div>
        </div>
        <!--Or sign in with social account FINISHED-->
     </div>
     <!--Register Container FINISHED-->
     <div class="footer-bottom">
      <div class="footer-bottom-in">
        <div class="copyRight" style="text-align:center"> Copyright © 2017 Funkit.</div>
      </div>
    </div>
</div>
@endsection


