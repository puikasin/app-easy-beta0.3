<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{@csrf_token()}}">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link href={{asset('plugins/switchery/switchery.min.css')}}rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{asset('js/modernizr.min.js')}}"></script>
</head>
<body class="fixed-left">
<div id="app">
    <div id="wrapper">
        <app-home></app-home>
    </div>
</div>

<script>
    var resizefunc = [];
</script>

<script src="{{asset('js/app.js')}}"></script>

<!-- jQuery  -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/detect.js')}}"></script>
<script src="{{asset('js/fastclick.js')}}"></script>
<script src="{{asset('js/jquery.blockUI.js')}}"></script>
<script src="{{asset('js/waves.js')}}"></script>
<script src="{{asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('plugins/switchery/switchery.min.js')}}'"></script>

<!-- Counter js  -->
<script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}'"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}'"></script>

<!--Morris Chart-->
<script src="{{asset('plugins/morris/morris.min.js')}}'"></script>
<script src="{{asset('plugins/raphael/raphael-min.js')}}'"></script>

<!-- Dashboard init -->
<script src="{{asset('pages/jquery.dashboard.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>
</body>
</html>
