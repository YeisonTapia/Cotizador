<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> ¿ Esta seguro de eliminar el registro ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Tener en cuenta: Si el registro que desea eliminar está relacionado con otro, este no se podra eliminar por motivos de seguridad, para eliminarse no debe de tener ninguna relacion. 
      </div>
      <div class="modal-footer">
        <div class="row">
          <div class="col-md-3 col-md-offset-6">
            <button type="button" class="btn btn-success btn-block" data-dismiss="modal">Cancelar</button>
          </div>
          <div class="col-md-3">
            {!!Form::open(['route'=> ['author.destroy',$author->id],'method'=>'DELETE','class'=>''])!!}
              {!!Form::submit('Continuar',['class'=>'btn btn-danger btn-block'])!!}
            {!!Form::close()!!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>