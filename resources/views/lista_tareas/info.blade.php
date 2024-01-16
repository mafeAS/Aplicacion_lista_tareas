
<div class="modal fade" id="edit{{$lista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR TAREA</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('home.update',$lista->id)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="modal-body">
                <div class="form-outline mb-3">
                    <label require class="form-label" for="form2Example17">Descripción</label>
                    <input type="text" name="descripcion" id="" class="form-control" placeholder="" value="{{$lista->descripcion}}"/>
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Observación</label>
                    <textarea name="observaciones" id="form2Example17" class="form-control" placeholder="">{{$lista->observaciones}}</textarea>

                </div>
            </div>
        
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>







<div class="modal fade" id="delete{{$lista->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ELIMINAR TAREA</h5>
       
      </div>
      <form action="{{route('home.destroy',$lista->id)}}" method="post"  enctype="multipart/form-data">
        @csrf
        @method('DELETE')
            <div class="modal-body">
                Estás seguro de eliminar <strong>{{$lista->descripcion}}</strong>
            </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>