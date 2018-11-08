@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Asistencia</h1>
          </div>

          <div class="container">
            <h4>Equipo</h4>
            <form action="#">
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Constanza Schadenberg</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-1"><label for="" class="form-check-label">Asiste</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-1"><label for="" class="form-check-label">Asiste sin propina</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-1" checked><label for="" class="form-check-label">No asiste</label></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Eduardo Del Pino</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-2"><label for="" class="form-check-label">Asiste</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-2"><label for="" class="form-check-label">Asiste sin propina</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-2" checked><label for="" class="form-check-label">No asiste</label></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Fernando Blanco</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-3"><label for="" class="form-check-label">Asiste</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-3"><label for="" class="form-check-label">Asiste sin propina</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-3" checked><label for="" class="form-check-label">No asiste</label></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Danielly Mendoza</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-4"><label for="" class="form-check-label">Asiste</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-4"><label for="" class="form-check-label">Asiste sin propina</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-4" checked><label for="" class="form-check-label">No asiste</label></div>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Sebastián Escalona</label>
                <div class="col-sm-8">
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-5"><label for="" class="form-check-label">Asiste</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-5"><label for="" class="form-check-label">Asiste sin propina</label></div>
                  <div class="form-check form-check-inline"><input type="radio" class="form-check-input" name="shift-5" checked><label for="" class="form-check-label">No asiste</label></div>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-4 ml-auto">
                  <div class="input-group date"  id="cl-date" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input form-control-lg" placeholder="Turno" data-target="#cl-date"/>
                    <div class="input-group-append" data-target="#cl-date" data-toggle="datetimepicker">
                      <div class="input-group-text"><span data-feather="calendar"></span></div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-2">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="turn" id="day" value="1" checked>
                    <label class="form-check-label" for="day">
                      Día
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="turn" id="night" value="2">
                    <label class="form-check-label" for="night">
                      Noche
                    </label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Guardar asistencia</button>
            </form>
          </div>
        </main>
@endsection()