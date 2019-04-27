<!DOCTYPE html>
<html>
<head>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="{{ asset('front') }}/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
{{--        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/bootstrap/css/bootstrap.min.css">--}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/main.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/jquery-ui.css">
        <!--===============================================================================================-->
        <link href="{{ asset('front') }}/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">


    </head>
</head>



<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider arrow skin 051 css*/
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}

    /*jssor slider thumbnail skin 111 css*/
    .jssort111 .p {position:absolute;top:0;left:0;width:200px;height:100px;background-color:#000;}
    .jssort111 .p img {position:absolute;top:0;left:0;width:100%;height:100%;}
    .jssort111 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.45;}
    .jssort111 .p:hover .t{opacity:.8;}
    .jssort111 .pav .t, .jssort111 .pdn .t, .jssort111 .p:hover.pdn .t{opacity:1;}
    .jssort111 .ti {position:absolute;bottom:0px;left:0px;width:100%;height:28px;line-height:28px;text-align:center;font-size:12px;color:#fff;background-color:rgba(0,0,0,.3)}
    .jssort111 .pav .ti, .jssort111 .pdn .ti, .jssort111 .p:hover.pdn .ti{color:#000;background-color:rgba(255,255,255,.6);}

    /**/
</style>
<body>

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<script src="{{ asset('front') }}/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideshowTransitions = [
            {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
            {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">50StateHomes</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/home') }}">Home</a></li>
            </ul>

            @if(session()->has('id'))
                <ul class="nav navbar-nav navbar-right">
                    @if(Session::get('type') == 'user')
                        <li><a href="{{ url('/users') }}"><span class="glyphicon glyphicon-user"></span> {{ Session::get('name') }} </a></li>
                        @elseif((Session::get('type') == 'superadmin') || Session::get('type') == 'admin')
                        <li><a href="{{ url('/admin') }}"><span class="glyphicon glyphicon-user"></span> {{ Session::get('name') }} </a></li>
                        @endif
                    <li><a href="{{ url('/log-out') }}"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                </ul>
                @else
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            @endif

        </ul>
    </div>
</nav>

@yield('body')


<script type="text/javascript">jssor_1_slider_init();</script>

<!--===============================================================================================-->
{{--<script src="{{ asset('front') }}/vendor/jquery/jquery-3.2.1.min.js"></script>--}}
<!--===============================================================================================-->
<script src="{{ asset('front') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('front') }}/vendor/bootstrap/js/popper.js"></script>
{{--<script src="{{ asset('front') }}/vendor/bootstrap/js/bootstrap.min.js"></script>--}}
<!--===============================================================================================-->
<script src="{{ asset('front') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('front') }}/vendor/daterangepicker/moment.min.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('front') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{ asset('front') }}/js/main.js"></script>
<script src="{{ asset('front') }}/js/jquery-ui.js"></script>
<script src="{{ asset('front') }}/js/ui.js"></script>
<script src="{{ asset('front') }}/dist/js/datepicker.min.js"></script>
<!-- Include English language -->
<script src="{{ asset('front') }}/dist/js/i18n/datepicker.en.js"></script>
<!-- #endregion Jssor Slider End -->
<script>
    function popUpOffer(){
        var date=document.getElementById("appoint_date").value;
        var time=document.getElementById("appoint_time").value;
        if (date){
            if (time){
                document.getElementById("popup_house_lead").style.display = "block";
                document.getElementById("initial_house_lead").style.display = "none";
            }
            else{
                document.getElementById("input_alert_msg").style.display = "block";
                document.getElementById('input_msg').innerHTML = "Input all the field must required !";
            }
        }
        else {
            document.getElementById("input_alert_msg").style.display = "block";
            document.getElementById('input_msg').innerHTML = "Input all the field must required !";
        }
    }
    function popUpOfferNext() {
        var date=document.getElementById("appoint_date").value;
        var time=document.getElementById("appoint_time").value;
        if (date){
            if (time){
                document.getElementById("popup_house_lead").style.display = "block";
                document.getElementById("initial_house_lead").style.display = "none";
            }
            else{
                document.getElementById("input_alert_msg").style.display = "block";
                document.getElementById('input_msg').innerHTML = "Input all the field must required !";
            }
        }
        else {
            document.getElementById("input_alert_msg").style.display = "block";
            document.getElementById('input_msg').innerHTML = "Input all the field must required !";
        }
    }
    function contactInfo() {
        var date=document.getElementById("appoint_date").value;
        var time=document.getElementById("appoint_time").value;
        var offer_price=document.getElementById("offer_price").value;
        var buying_plan=document.getElementById("buying_plan").value;
        var toured=document.getElementById("toured").value;
        if (date){
            if (time){
                if (offer_price){
                    if (buying_plan){
                        if (toured){
                            document.getElementById("contact_info").style.display = "block";
                            document.getElementById("popup_house_lead").style.display = "none";
                        }
                        else{
                            document.getElementById("input_alert_msg_2").style.display = "block";
                            document.getElementById('input_msg_2').innerHTML = "Input all the field must required !";
                        }
                    }
                    else{
                        document.getElementById("input_alert_msg_2").style.display = "block";
                        document.getElementById('input_msg_2').innerHTML = "Input all the field must required !";
                    }
                }
                else{
                    document.getElementById("input_alert_msg_2").style.display = "block";
                    document.getElementById('input_msg_2').innerHTML = "Input all the field must required !";
                }
            }
            else{
                document.getElementById("input_alert_msg_2").style.display = "block";
                document.getElementById('input_msg_2').innerHTML = "Input all the field must required !";
            }
        }
        else {
            document.getElementById("input_alert_msg_2").style.display = "block";
            document.getElementById('input_msg_2').innerHTML = "Input all the field must required !";
        }
    }
</script>
</body>
</html>
