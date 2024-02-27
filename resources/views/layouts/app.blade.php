<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('dashboard/css/bootstrap.min.css') }}" />
    <style>
        @import url("https://fonts.googleapis.com/css?family=Poppins:400,600,700");
        @import url("https://fonts.googleapis.com/css?family=Courgette");
        .bg-mattBlackLight {
            background-color: #fff;
        }


        .navbar-toggler i {
            font-size: 25px;
            color:#0578CC !important;
        }
        a:hover{
            text-decoration: none;
        }
        a{
            text-decoration: none ;
            color: #0578CC;
        }
        .text-mattBlackLight {
            color: #303337;
        }

        .text-mattBlackLight.active {
            color: #fff !important;
        }

        .ft-18{
            font-size: 18px;
            font-weight: bold;
        }
        .ft-14{
            font-size: 14px !important;
            color: #5C5F61;
            font-weight: bold;
        }

        .bg-mattBlackDark, body, .nav-link:hover, .nav-link.active {
            background-color: #F2F5F9;
            color: #fff;
        }

        .text-mattBlackDark {
            color: #fff;
        }

        .bg-mattGray {
            background-color: #878d8d;
        }

        .text-mattGray, body, .nav-link .icon, .nav-link .text {
            color: #111 ;
        }



        .text-white{
            font-size: 0.875rem;
            color: #fff ;
        }

        .text-blue{
            color: #0578CC;
        }

        .bg-mattRed {
            background-color: #ec6271;
        }
        @media (max-width:768px){

            .nav-link .icon, .nav-link .text {
                color: #fff !important;
            }

        }

        .text-mattRed, .nav-link:hover .icon,
        .nav-link:hover .text, .nav-link.active .icon,
        .nav-link.active .text {
            color: #0578CC !important ;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .dropdown-item{
            font-size: 1rem;
        }
        .dropdown-item i{
            padding-right: 10px;
            color: #000;
        }

        body {
            height: 1000px;
        }


        .wrapper .sideMenu {
            position: fixed;
            top: 0;
            bottom: 0;
            margin:0 auto auto;
            left: 0;
            width: 12.5rem;
            -webkit-transition: all ease 0.30s;
            transition: all ease 0.30s;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            z-index: 1;

        }

        .navbar{
            margin-left: 10rem;
            padding: 50px;
            transition: .5s !important;
        }
        @media (max-width:768px) {
            .navbar{
                margin-left: 0rem;
                padding: 10px;
            }
            .navbar.active{
                transition: .5s;
            }
            .navbar.active{
                position: fixed;
                top: 0 ;
                left: 12rem;
                transition: .5s;
            }

        }
        .wrapper .content {
            width: 100%;
            margin-left: 0rem;
            -webkit-transition: all ease 0.25s;
            transition: all ease 0.25s;
        }

        .wrapper.active .sideMenu {
            -webkit-transform: translateX(0);
            transform: translateX(0);
            background-color: #000;
        }


        .nav-top {
            position: relative;
        }
        .dropdown-toggle-style{
            position: absolute;
            top: 10px;
            margin-left: -10px;
            font-size: 25px;
        }


        .icon-notification {
            font-size:1.5rem ;
            background-color: #fff;
            width: 51px !important;
            height: 51px !important;
            display: flex;
            align-items: center !important;
            justify-content: center;
            text-align: center;
            padding-top: 13px;
            clip-path: circle();
            color: #111 !important;
        }
        .return a{
            text-align: center;
        }
        .return p{
            font-size: 12px;
        }
        .nav-top{
            position: relative !important;
        }
        .nav-top .img{
            width: 50px !important;
            height: 50px !important;
            margin-left: -70px;
            position: relative;
        }
        .nav-top .img img{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            clip-path: circle();
        }

        .nav-link {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            display: block;
            white-space: nowrap;
        }

        .nav-link .icon {
            margin-right: 0.25rem;
            font-size: 1rem;
            vertical-align: middle;
            height: 2rem;
            width: 2rem;
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .nav-link .text {
            font-size: 0.875rem;
        }


        @media (min-width: 992px) {
            .wrapper .sideMenu {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
            .wrapper .content {
                margin-left: 12.5rem;
            }
            .wrapper.active .sideMenu  {
                width: 5rem;
            }
            .wrapper.active .sideMenu .nav-link {
                text-align: center;
            }
            .wrapper.active .sideMenu .nav-link .icon {
                margin-right: 0;
                color: #fff;

            }
            .wrapper.active .sideMenu .nav-link .text {
                display: none;
            }
            .wrapper.active .content {
                margin-left: 5rem;
            }
        }
        /*# sourceMappingURL=style.css.map */


        /*Init Dashasboard*/
        .bg-mattBlackLight .card img{
            width: 72px;
            height: 72px;
            clip-path: circle();
        }

        .bg-mattBlackLight .card{
            border: 1px solid #D5DCE0;
        }
        .bg-mattBlackLight .card p{
            color: #A5A5A5;
            font-size: 14px;
        }

        .bg-mattBlackLight .card a{
            background:none ;
            border: 2px solid #0578CC;
            color: #0578CC;
        }

        .bg-mattBlackLight .table .img{
            width: 40px;
            height: 40px;
            position: relative;
        }

        .bg-mattBlackLight.enrolments .table .img{
            width: 70px;
            height: 70px;
            position: relative;
        }
        .bg-mattBlackLight.enrolments .table tr:nth-child(1){
            background-color: #F7F9FA;
        }
        .bg-mattBlackLight td{
            border: none !important;
        }
        .bg-mattBlackLight .table .img img{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            clip-path: circle();
        }

        .box-payment .icon{
            background-color: #0578CC;
            width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            clip-path: circle();
        }

        .box-payment .icon i{
            color: #fff !important;
            margin-top: 0 !important;
            font-size: 20px !important;
        }
        .box-payment h5{
            font-size: 18px;
            font-weight: bold;
        }

        .bg-mattBlackLight select{
            border: 1px solid #A5A5A5;
            border-radius:2px ;
            outline: none;
        }

        .drop h5{
            font-size: 15px !important;
            margin-bottom: 0px !important;
        }

        .dropdown-menu{
            border: none !important;
            box-shadow:  0 0 5px rgba(0,0,0,0.5);
        }
        .bg-mattBlackLight select option{
            padding: 10px;
            background-color: #A5A5A5 !important;
        }

        .bg-mattBlackLight .table .icon i{
            font-size: 35px;
            margin-top: 5px;
            color: #0578CC;
        }

        .bg-mattBlackLight .table .new{
            font-size: 10px !important;
            margin-top: 15px;
            text-align: center;
            width:50px;
            height: 20px !important;
            padding-top: 1px;
            border-radius: 20px;
            background-color: #0578CC;
            color: #fff;
        }

        .select {
            display:flex;
            flex-direction: column;
            position:relative;
            width:150px;
            height:50px !important;
        }
        select{
            height: 50px;
            padding: 0 10px;
            border: 2px solid #C7CDD1 !important;
            border-radius: 4px;
        }
        .option {
            padding:0 50px 0 10px;
            min-height:50px;
            display:flex;
            align-items:center;
            background:#fff;
            border:#C7CDD1 solid 1px !important;
            position:absolute;
            top:0;
            width: 100%;
            border-radius: 4px;
            pointer-events:none;
            order:2;
            z-index:1;
            transition:background .4s ease-in-out;
            box-sizing:border-box;
            overflow:hidden;
            white-space:nowrap;

        }



        .select:focus .option {
            position:relative;
            pointer-events:all;
        }

        .select input {
            opacity:0;
            position:absolute;
            left:-99999px;
        }

        .select input:checked + label {
            order: 1;
            z-index:2;
            border:2px solid #C7CDD1;
            border-radius: 2px;
            position:relative;
        }

        .select input:checked + label:after {
            content:'';
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #111;
            position:absolute;
            right:10px;
            top:calc(50% - 2.5px);
            pointer-events:none;
            z-index:3;
        }

        .select input:checked + label:before {
            position:absolute;
            right:0;
            height: 50px;
            width: 50px;
            content: '';
            background:#fff;
        }

        .announcements{
            height: 430px;
            width: 100%;
            left: 0px;
            top: 0px;
            border-radius: 8px;
            background: linear-gradient(0deg, rgba(5, 120, 204, 0.9), rgba(5, 120, 204, 0.9)), url(../../img/pessoa1.png) no-repeat, #1A1A1A;
            border-radius: 8px;
            background-size: cover;
            display: flex;
            align-items: center;
            font-size: 32px;
            font-weight: 700;
            color: #fff;
            padding-left: 30px;
            line-height: 44px;
        }

        .bg-mattBlackLight .table h5{
            font-size: 16px;
            font-weight: bold;
        }

        .bg-mattBlackLight .table p{
            font-size: 12px;
            font-weight: 400;
        }

        .btn-confirm{
            padding: 8px 15px !important;
            margin: 0 15px;
            color: #0578CC;
            border: none;
            text-align: start;
            background: none;
            border: 2px solid #0578CC;
            transition: .5s;
        }

        .btn-confirm-color{
            background-color: #0578CC !important;
            color: #fff !important;
        }

        .bg-mattBlackLight .form-img{
            height: 300px;
            border: 2px dashed #878d8d;
        }
        .bg-mattBlackLight .form-img i{
            font-size: 2.5rem;
            padding: 20px;
            border-radius: 50%;
            border: 1px dotted #171A1C;
        }

        .btn-heigth{
            height: 40px;
            margin-top: 15px;
            margin-right: 10px;
        }

        /*Form Childen Profile*/

        .form-childen img{
            width: 200px;
            height: 200px;
        }

        .form-childen label{
            width: 30px;
            height: 30px;
            color: #fff;
            background-color: #0578CC;
            border-radius: 50%;
            margin-top: -15px;
        }
        /*
         input[type="file"]{
          display: none;
        } */

        .form-imput-label input{
            height: 50px !important;
            padding-top: 25px;
        }

        .form-imput-label .input-for-label{
            position: relative;
        }

        .form-imput-label .input-for-label label{
            position: absolute;
            top: 0;
            left: 0;
            font-size: 12px;
            padding-top: 8px;
            padding-left: 15px;
        }

        .dropdown-input-label{
            width: 100%;
            height: 50px;
            padding: 0px 10px;
            border-radius: 4px !important;
            border: 1px solid #C7CDD1 !important;
        }

        .form-group-radio {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 28px;
            cursor: pointer;
            font-size: 18px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .form-group-radio input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            border-radius: 50%;
            border:1px solid #A5AAAD;
        }

        .form-group-radio:hover input ~ .checkmark {
            background-color: #ccc;
        }


        .form-group-radio input:checked ~ .checkmark {
            background-color: #2DCB2A;
        }

        .form-group-radio:after {
            content: "";
            position: absolute;
            display: none;
        }


        .form-group-radio input:checked ~ .checkmark:after {
            display: block;
        }


        .form-group-radio .checkmark:after {
            content: '';
            position: absolute;
            left:7px !important;
            top: 2px;
            width: 8px;
            height: 15px;
            border: solid white ;
            border-width: 0 3px 3px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        /*Payments*/

        .table-payments tr{
            background: none !important;
            border-bottom: 1px solid #D5DCE0;
        }
        .table-payments tr th{
            border-top: none;
            color: #8F9BA3;
            font-weight: 500;
        }

        .table-payments tr i{
            background-color: #ec6271;
            width: 20px;
            height: 20px;
            font-size: 16px;
            border-radius: 50%;
            color: #F2F5F9;

        }

        /*Setting*/
        .settig.sidebar{
            top: 0;
        }

        .wrapper .sideMenu.setingsMenu {
            margin: 0 auto auto !important;
            color: #F2F5F9;
        }

        .setting.active{
            left: 80px !important;
        }

        .setting.activeLeft{
            left: -100%;
        }

        .togger{
            position: fixed;
            top: 20px;
            left: 32rem;
            transition: .5s;
        }
        .setting{
            position: fixed;
            top: 0;
            left: 80px;
            height: 100%;
            border: 1px solid #A5A5A5;
            border-top: none;
            border-left: none;
            background-color: #fff;
            transition: .5s !important;
        }

        .settingToggler{
            position: fixed;
            top: 20px;
            left: 30rem;
            transition: .5s;
        }
        @media (max-width:768px){
            .settingToggler{
                position: fixed;
                top: 20px;
                left: 14rem;
                transition: .5s;
            }
        }
        .settingToggler.active{
            left: 85px;
        }

        .setting li{
            border-left: none;
        }

        .setting li:last-child{
            border-bottom: none;
        }

        .setting p{
            font-size: 12px;
        }


        .wrapper .content.setingsContent {
            margin-left: 30.5rem;
            height: 100%;
            transition: .5s;
        }

        .wrapper .content.setingsContent.active {
            margin-left: 20.5rem;
            padding: 0 150px;
        }

        .settigConteiner{
            padding: 0 150px;
        }

        @media (max-width:768px){
            .wrapper .content.setingsContent{
                margin-left: 0;

            }
            .settigConteiner{
                padding: 0 0px;
                padding-right: 50px;
            }
            .setting{
                left: -100%;
            }
            .wrapper .content.setingsContent {
                margin-left: 3.5rem;
                height: 100%;
            }
        }

        input[type="text"],input[type="password"]{
            height: 50px !important;
            border: 2px solid #D5DCE0;
            border-radius: 4px;
        }



        /*Input/Label*/


        /*Setings Guardian*/
        .bg-mattBlackLight.guardian{
            background: none;
        }

        .bg-mattBlackLight.guardian .table tr:first-child{
            background-color: #fff;
        }
        .bg-mattBlackLight.guardian .table tr{
            background-color: #fff;
        }

        /*Notification*/



        .notification li{
            background: none;
            border-left: none;
            border-right: none;
        }

        .notification li:last-child{
            border-bottom: none;
        }

        .notification li:first-child{
            border-top: none;
        }

        .notification h6{
            font-weight: bold;
            font-size: 16px;
        }

        .notification p{
            font-size: 15px;
            color: #5C5F61;
        }

        /*Security*/

        .security h6,h5{
            font-weight: bold;
        }

        .security p{
            font-size: 16px;
            color: #5C5F61;
        }

        input{
            height: 45px !important;
        }

        .setingsMenu{
            background-color: #1A1A1A;
            color: #D5DCE0;
        }

        .sideMenu.setingsMenu li a,span,i{
            color: #fff ;
        }

        .setingsMenu li:hover i{
            color: #0578CC !important;
        }

        .setingsMenu li:hover span{
            color: #0578CC !important;
        }

        .btn-danger-finaly{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 15px 24px;
            gap: 10px;
            color: #fff;
            background: #E60B18;
            border-radius: 4px;
        }

    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/script.js') }}"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>

</body>
</html>
