<!-- <link rel="stylesheet" href="{{asset('css/volt.css')}}">
<style>
    .body{
       background: url('https://cdn.pixabay.com/photo/2018/08/08/12/38/internet-3592056_960_720.jpg') no-repeat center center  fixed;
       font-family: 'Titillium Web', sans-serif;
       background-size: cover; 
    }
    </style>
<main>
    <title>DEAPLICS</title>
    
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center body">
        <div class="container " style="opacity: 85%">
            {{-- <p class="text-center"><a href="{{ route('dashboard') }}" class="text-gray-700"><i
                class="fas fa-angle-left me-2"></i> Back to homepage</a></p> --}}
            <div wire:ignore.self class="row justify-content-center form-bg-image "
              >
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-3 h3">Deaplics Security</h1>
                            <div  border-radius="50%">
                            <img src="{{asset('img/logo.png')}}" width="35%">
                            </div>
                      
                        </div>
                        <form wire:submit.prevent="login" action="#" class="mt-4" method="POST">
                       
                            <div class="form-group mb-4">
                               <center> <label  for="email">Email</label></center>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><svg
                                            class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z">
                                            </path>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                        </svg></span>
                                    <input wire:model="email" type="email" class="form-control"
                                        placeholder="example@company.com" id="email" autofocus required>
                                </div>
                                @error('email') <div wire:key="form" class="invalid-feedback"> {{$message}} </div>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                              
                                <div class="form-group mb-4">
                                 <center>
                                 <label for="password">Password</label>
                                 </center>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon2"><svg
                                                class="icon icon-xs text-gray-600" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg></span>
                                        <input wire:model.lazy="password" type="password" placeholder="Password"
                                            class="form-control" id="password" required>
                                    </div>
                                    @error('password') <div class="invalid-feedback"> {{ $message }} </div> @enderror
                                </div>
                             
                                <div class="d-flex justify-content-between align-items-top mb-4">
                                    <div class="form-check">
                                        <input wire:model="remember_me" class="form-check-input" type="checkbox"
                                            value="" id="remember">
                                        <label class="form-check-label mb-0" for="remember">
                                            Remember me
                                        </label>
                                    </div>
                                    <div><a href="" class="small text-right">Lost
                                            password?</a></div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Sign in</button>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center my-4">
                            <a href="https://www.facebook.com/Deaplics-102225189136892/" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                aria-label="facebook button" target="_blank" title="facebook button">
                                <svg class="icon icon-xxs" aria-hidden="true" focusable="false" data-prefix="fab"
                                    data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 320 512">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://deaplics.webnode.ec" target="_blank" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                aria-label="twitter button" title="twitter button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                    </svg>
                            </a>
                         
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
</main> -->
@extends('layouts.app2')

<style>
    .prueba{
             width: 45%;
 margin-left:27%;
 margin-top:3%;
}
.logo{
    margin-top:30%;margin-left:17%
}
            @media (max-width: 850px) {
     .prueba{
             width: 100%;
             margin:0%;
         }
         .logo{
            margin-top:0;
         }
            }   
</style>
@section('content')

<div class="prueba "  height="100px" >
    <div class="row  form-group ">
        <div class=" col-xs-12 col-lg-6 mt-5 bg-white w-40" style="opacity: 75%">
            <img class="logo"  src="{{asset('img/logo.png')}}" width="70%">   
            <div class="d-flex justify-content-center my-4">
                            <a href="https://www.facebook.com/Deaplics-102225189136892/" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                aria-label="facebook button" target="_blank" title="facebook button">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </a>
                            <a href="https://deaplics.webnode.ec" target="_blank" class="btn btn-icon-only btn-pill btn-outline-gray-500 me-2"
                                aria-label="twitter button" title="twitter button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-globe " viewBox="0 0 16 16">
                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                                    </svg>
                            </a>
                         
                        </div>
        </div>
     
        <div class="col-xs-12 col-lg-6 mt-5  w-70" style="opacity: 80%; background:rgb(223, 222, 222)">

          
            <div class="">
                <center><h1 class="mb-0 mt-2" style="font-size:30px">LOGIN</h1></center>

                <div class="card-body">
                    <form method="POST" action="login">
                        @csrf

                        <div class="form-group row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="80" fill="currentColor" class="bi bi-person-fill col-md-12 col-form-label text-md-center mb-0 pb-0" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg>
                            <label for="email" class="col-md-12  text-md-center m-0 p-0 h3">{{ __('EMAIL') }}</label>

                            <div class="col-md-12">

                                <input id="email" type="email" class="form-control   @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="80" fill="currentColor" class="bi bi-key-fill col-md-12  text-md-center h3 m-0 p-0" viewBox="0 0 16 16">
                                <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                              </svg>
                            <label for="password" class="col-md-12  text-md-center h3 m-0 p-0">
                               
                                {{ __('PASSWORD') }}</label>
                   

                            <div class="col-md-12 input-group">
                                
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div class="input-group-append">
            <button id="show_password" class="btn btn-primary  text-white" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
          </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-12">
                             <center>
                                <button type="submit" class="btn btn-primary text-white font-weight-bold" style="width: 50%">
                                    {{ __('INICIAR SESION') }}
                                </button>
                             </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>

function mostrarPassword(){
		var cambio = document.getElementById("password");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
</script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
