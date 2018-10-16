<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta name="robot" content="no-index, no-follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="{{asset('images/logo.png')}}">
    <meta name="apple-mobile-web-app-title" content="FansAlive">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="{{asset('images/logo.png')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/animate.css/animate.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/glyphicons/glyphicons.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/material-design-icons/material-design-icons.css')}}" type="text/css"/>

    <link rel="stylesheet" href="{{asset('css/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css"/>
    <!-- build:css styles/app.min.css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css"/>
</head>
<body>

<div class="app" id="app">
    <router-view> </router-view>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/jquery/tether/dist/js/tether.min.js')}}"></script>
<script src="{{asset('js/scripts/ui-nav.js')}}"></script>
<script src="{{asset('js/scripts/ui-scroll-to.js')}}"></script>
<script src="{{asset('js/scripts/ui-device.js')}}"></script>
<script src="{{asset('js/scripts/ui-form.js')}}"></script>
<script src="{{asset('js/scripts/ui-toggle-class.js')}}"></script>
<!-- endbuild -->
</body>
</html>
