
<!--ventana para Create --->
<div class="modal fade" id="createChildren" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Registrar Información
        </h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>



      <!-- <form name="form-data" action="{{ route('SaveChildren') }}" method="POST"> -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token"> -->
      <!-- <form method="post" action="{{ route('SaveChildren') }}"> -->
      <form method='post' action="{{url('children/add')}}">
      @csrf
            <div class="modal-body" id="cont_modal">

              <div class="row">
                <div class="col-md-12">
                    <label for="name" class="form-label">Nombre del Niño</label>
                    <input type="text" class="form-control" name="name" required='true' autofocus>
                </div>
                <div class="col mt-2">
                    <label for="year" class="form-label">Edad</label>
                    <input type="number" class="form-control" name="year" required='true'>
                </div>
                <div class="col mt-2">
                    <label for="Sexo" class="form-label">Sexo</label>
                    <fieldset class="form-group row">
                        <div class="col-sm-10">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Masculino" checked>
                            <label class="form-check-label" for="gridRadios1">
                              Masculino
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="sex" value="Femenino">
                            <label class="form-check-label" for="gridRadios2">
                              Femenino
                            </label>
                          </div>
                        </div>
                      </fieldset>
                </div>
              </div>
            </div>


            <div class="modal-footer">
<!-- 
              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                Cerrar
              </button>
 -->
<!-- 
              <button class="btn btn-primary btn-block" id="btnEnviar">
                  Registrar Niñ@
              </button>
 -->
              <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
