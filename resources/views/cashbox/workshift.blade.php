@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Formulario de Cierre de Caja</h1>
          </div>

          <form>
            <div class="form-row">
              <div class="col-md-12">
                <h3>Efectivo</h3>
              </div>
              <div class="form-group col-md-6">
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">20.000</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
                <div class="row">
                  <label for="ten" class="col-sm-2 col-form-label">10.000</label>
                  <input type="number" class="form-control col-sm-2" id="ten">
                  <input type="number" class="form-control col-sm-6" value="10000" disabled>
                </div>
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">5.000</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
                <div class="row">
                  <label for="ten" class="col-sm-2 col-form-label">2.000</label>
                  <input type="number" class="form-control col-sm-2" id="ten">
                  <input type="number" class="form-control col-sm-6" value="10000" disabled>
                </div>
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">1.000</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
              </div>
              <div class="form-group col-md-6">
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">500</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
                <div class="row">
                  <label for="ten" class="col-sm-2 col-form-label">100</label>
                  <input type="number" class="form-control col-sm-2" id="ten">
                  <input type="number" class="form-control col-sm-6" value="10000" disabled>
                </div>
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">50</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
                <div class="row">
                  <label for="twenty" class="col-sm-2 col-form-label">10</label>
                  <input type="number" class="form-control col-sm-2" id="twenty">
                  <input type="number" class="form-control col-sm-6" value="20000" disabled>
                </div>
                <div class="row">
                  <label class="col-sm-4">RETIROS</label>
                  <input type="number" class="form-control col-sm-6" value="55555" disabled>
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="row">
                  <h4 class="col-sm-5">TOTAL</h4>
                  <input type="number" class="form-control form-control-lg col-sm-6" value="5555555" disabled>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" placeholder="Débito" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Crédito" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Cheque" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Delivery" class="form-control form-control-lg">
              </div>
              <div class="form-group col-md-12">
                <textarea class="form-control form-control-lg" placeholder="Observaciones" rows="3"></textarea>
              </div>
              <div class="form-group col-md-5">
                <input type="number" placeholder="Propinas" class="form-control form-control-lg">
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Realizar cierre</button>
          </form>
        </main>
@endsection()