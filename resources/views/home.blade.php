@extends('layouts.app')

@section('content')
<script src="https://js.pusher.com/7.1/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('js/push.min.js')}}"></script>
<script src="{{asset('js/jquery-3.5.1.js')}}" ></script>
  <script>
  function cerrar(id){
     axios.post('/cerrar', {
       id: id,
       _token: "{{ csrf_token() }}",
     })
     .then(function (response) {
       console.log(response);
       var n='#alert'+id
       $(n).css("display", "none");
     })
     .catch(function (error) {
       console.log(error);
     });
     
   }
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('98a6ce7ea2d3ab36604b', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
     console.log(data);
        var tr = `
        <div class="alert" id="alert`+data.id+`"  style="background-color: rgb(248, 215, 218);">
  <h4 class="alert-heading"><b>ALERTA CIUDADELA `+data.ciudadela+`!</b></h4>
  <p>`+data.message+`</p>
  <p>GUARDIA EN TURNO: `+data.guardia+`</p>
  <hr>
  <p class="mb-0">Sistema SEGAFF Deaplics. Lo mejor en tecnología para la seguridad !!!.
  <button type="button" class=" text-white btn btn-primary float-right" onclick="cerrar(`+data.id+`)"  data-dismiss="alert" aria-label="Close">
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
                   @foreach ($alertas as $alerta)
               <div class="card p-3" id="alert{{$alerta->id}}"  style="background-color: rgb(248, 215, 218);">
  <h4 class="alert-heading"><b>ALERTA CIUDADELA {{$alerta->ciudadela}}!</b></h4>
  <p>{{$alerta->contenido}}</p>
  <p>GUARDIA EN TURNO:{{$alerta->guardia}}</p>
  <hr>
  <p class="mb-0">Sistema SEGAFF Deaplics. Lo mejor en tecnología para la seguridad !!!.
  <button type="button"  onclick="cerrar({{$alerta->id}})" class=" text-white btn btn-primary float-right" data-dismiss="alert" aria-label="Close">
  Cerrar
  </button>
  <br>
  <br>
  </p>
 
 
</div>
               @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
