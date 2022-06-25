<!-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 
    <script src="{{ asset('js/app.js') }}" defer></script>

  
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/LOGO2.png')}}">
  
</head>
<style>
    body{
       background: url('https://cdn.pixabay.com/photo/2018/08/08/12/38/internet-3592056_960_720.jpg') no-repeat center center  fixed;
       font-family: 'Titillium Web', sans-serif;
       background-size: cover; 
    }
    </style>
<body>
    <div id="app">
         <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                 
                    <ul class="navbar-nav ml-auto">
                      
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</body>
</html> -->


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>  {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Styles -->
       
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
<link rel="shortcut icon" href="{{asset('img/LOGO2.png')}}">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js"></script>
       <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .code input {
  text-transform: uppercase;
}
        </style>
    </head>
<body class="hold-transition sidebar-mini">

<div>
    <div class="wrapper text-white">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand  navbar-light border-bottom" style="background-color: rgb(1, 112, 184);">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link bg-primary" data-widget="pushmenu" href=""><i class="fa fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
               
             
                <li class="nav-item">
                    <div>
                       
                    <a class="nav-link text-white" data-slide="true" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">Salir&nbsp;<i class="fa fa-sign-out"></i></a>
                    

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4 " style="opacity: 80%; background-color: rgb(0, 25, 63)" >
            <!-- Brand Logo -->
            <a class="brand-link">
                <img src="{{asset('img/logo.png')}}" alt="Logo" class="brand-image img-circle bg-white elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light text-white">{{ config('app.name', 'Laravel') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('img/logo.png')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                  
                    <div class="info">
                        <a href="{{url('/')}}" class="d-block text-white">{{Auth::user()->name}}</a>
                    </div>
       
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                     
                        <li class="nav-item has-treeview">
                          
                            <a href="#" class="nav-link text-white">
                            <i class="fad fa-shield"></i>
                                <p>
                                   Control
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                           
                            <ul class="nav nav-treeview">
                          
                                <li class="nav-item">
                                    <a  href="" class="nav-link text-white">
                                    <i class="fas fa-handshake"></i>
                                        <p>Cotizaciones</p>
                                    </a>
                                </li>
                           
                            </ul>
                        </li>
                       
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

    </div>



     <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12" id="app">
                            
                        
                                <div class="container">
                                    
                                    @yield('content')
                                
                                </div>
 
                        </div><!-- /.col -->                        
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

          
    </div>

       
    <footer class="main-footer">
        <strong>DASANTPLAST S.A.&copy;  <a href="http://adminlte.io">Soluciones de Empaques Flexibles al momento</a>.</strong>
        Guayaquil-Ecuador.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>
  
      
</body>

    <!-- AdminLTE App -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/highcharts-vue@1.3.5/dist/highcharts-vue.min.js"></script>
    
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('js/adminlte.js')}}"></script>    




<!-- Bootstrap 4 -->


  
 
   

  
  </div>