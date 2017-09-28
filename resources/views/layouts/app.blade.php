<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="theme-color" content="#8e24aa">
   <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Funkit Chat Application</title>
   <link rel="stylesheet" type="text/css" href="css/style.css" media="screen,projection" />
   <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Scada" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="css/hover.css" />
</head>

<body style="background-color:#0094EA;">
    <!--Login Wrap STARTED-->
    <div class="login-register-wrap">
        <div class="loginLogo"><img src="css/icons/llgo.png" /></div>

        @yield('content')
    </div>

    <!-- Scripts -->
  <!--Login Wrap FINISHED--> 
</body>
</html>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/audio.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/elastic.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
