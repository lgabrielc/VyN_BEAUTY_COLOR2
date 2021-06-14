@extends('layouts.plantillas')
@section('title','Reservar Cita')
@section('content')

        

      <form action="{{route('citas.store')}}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="pt-5">
                    <div class="col-sm p-4"> 
                        <img src="../img/horarios.JPG" width="260" height="360">
                    </div>
                </div>
                <div class="col-sm pt-5 p-4 mt-4">
                        <label class="pt-2">Para hacer una cita o reservación debes llenar todos los campos indicados a continuación para poder atenderte mejor.
                         Una vez realizada tu reserva nos estaremos comunicando contigo para confirmar la misma.</label>
                        <div class="row p-2">
                            
                            <div class="pl-2">
                                Nombre y Apellidos* <input name="cliente" type="text" required>
                            </div>
                            <div class="pl-2 pb-4">
                                Telefono Contacto* <input name="telefono" type="number" required>
                            </div>
                            <div class="pl-2 pb-2">
                                Correo Electronico* <input name="email" type="email" required>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="p-2">
                                Fecha* <input name="fecha" type="date" required>
                            </div>
                            <div class="p-2">
                                Tengo disponibilidad en otra fecha* 
                                <input name="disponibilidad" style="width:1.5vw; height:1.5vh; " type="checkbox">
                            </div>
                        </div>
                            <div>
                            <div class="m-2">
                                Escribe aquí tus requerimientos y/o el motivo de tu reserva*
                            </div>
                            <div class="m-2">
                                <textarea name="descripcion" id="" cols="30" rows="10" required></textarea>
                            </div>
                            <div>
                              <button type="submit" class="btn btn-secondary">ENVIAR</button>  
                            </div>
                        </div>
                </div>
            </div>
        </div>
        
    </form>
@endsection
