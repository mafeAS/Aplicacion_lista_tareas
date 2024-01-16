
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AGREGAR TAREA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{route('home.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                <div class="form-outline mb-3">
                    <label require class="form-label" for="form2Example17">Descripción</label>
                    <input type="text" name="descripcion" id="" class="form-control" placeholder="Ingresa la descripción de la tarea" />
                  
                </div>
                <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Observación</label>
                    <textarea name="observaciones" id="form2Example17" class="form-control" placeholder="Ingrese las observaciones de la tarea"></textarea>
                </div>
            </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>