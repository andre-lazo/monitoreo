<?php

namespace App\Http\Controllers\Alerta;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ObserverController implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $message;
  public $ciudadela;
  public $guardia;
  public $id;

  public function __construct($message,$ciudadela,$guardia,$id)
  {
      $this->message = $message;
      $this->ciudadela = $ciudadela;
      $this->guardia = $guardia;
      $this->id = $id;
  }

  public function broadcastOn()
  {
      return ['my-channel'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}