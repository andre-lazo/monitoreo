@extends('layouts.app')

@section('content')
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script src="{{asset('js/push.min.js')}}"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('98a6ce7ea2d3ab36604b', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
     
        var tr = `
        <div class="alert" role="alert"  style="background-color: rgb(248, 215, 218);">
  <h4 class="alert-heading"><b>ALERTA CIUDADELA CANARIAS!</b></h4>
  <p>`+data.message+`</p>
  <hr>
  <p class="mb-0">Sistema SEGAFF Deaplics. Lo mejor en tecnología para la seguridad !!!.
  <button type="button" class=" text-white btn btn-primary float-right" data-dismiss="alert" aria-label="Close">
  Cerrar
  </button>
  <br>
  <br>
  </p>
 
 
</div>`;
$("#alerta").prepend(tr);




        Push.create("NOTIFICADO POR EL MAS CRACK DE LOS CRACKS", {
    body: "KIRITO WANHEDA",
    icon: '{{asset('img/logo.png')}}',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
    });
  </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div id="alerta">
               
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
