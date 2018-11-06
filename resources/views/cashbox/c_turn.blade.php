@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Formulario de Cierre de Caja</h1>
          </div>

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-5">
                <input type="number" placeholder="Propinas" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-5">
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
            <button class="btn btn-primary" type="submit">REALIZAR CIERRE</button>
          </form>
        </main>
      </div>
@endsection()