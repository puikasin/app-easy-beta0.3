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


    <!-- Plugins css-->
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <link href="{{asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"/>

    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet">

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
{{--vueJs--}}
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
<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

<!-- Counter js  -->
<script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('plugins/counterup/jquery.counterup.min.js')}}"></script>

{{--plugins--}}
<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
<!--Wysiwig js-->
<script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
<script src="{{asset('plugins/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
<script src="{{asset('plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

<script src="{{asset('plugins/autocomplete/jquery.mockjax.js')}}"></script>
<script src="{{asset('plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
<script src="{{asset('plugins/autocomplete/countries.js')}}"></script>

<!--Morris Chart-->
{{--<script src="{{asset('plugins/morris/morris.min.js')}}"></script>--}}
<script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
{{--<script src="{{asset('pages/jquery.dashboard.js')}}"></script>--}}
<script src="{{asset('pages/jquery.autocomplete.init.js')}}"></script>

<script src="{{asset('pages/jquery.form-advanced.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/jquery.core.js')}}"></script>
<script src="{{asset('js/jquery.app.js')}}"></script>


</body>
</html>
