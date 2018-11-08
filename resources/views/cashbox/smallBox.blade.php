@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Caja chica (Retiros)</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <tr>
                <th>Fecha</th>
                <th>Monto</th>
                <th>Factura/Boleta</th>
                <th>Motivo</th>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-success">12.000</td>
                <td>N/A</td>
                <td>Arturo</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-danger">12.000</td>
                <td>N/A</td>
                <td>Pago personal cocina (Empleado)</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-success">12.000</td>
                <td>N/A</td>
                <td>Arturo</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-danger">12.000</td>
                <td>N/A</td>
                <td>Pago personal cocina (Empleado)</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-success">12.000</td>
                <td>N/A</td>
                <td>Arturo</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-danger">12.000</td>
                <td>N/A</td>
                <td>Pago personal cocina (Empleado)</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-success">12.000</td>
                <td>N/A</td>
                <td>Arturo</td>
              </tr>
              <tr>
                <td>01/11/2018</td>
                <td class="text-danger">12.000</td>
                <td>N/A</td>
                <td>Pago personal cocina (Empleado)</td>
              </tr>
            </table>
          </div>

          <h4>
            Total retiros a la fecha: <span class="text-warning">0,00 $</span>
          </h4>

          <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            + Agregar movimiento
          </button>
        </main>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nuevo movimiento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="#">
                    <div class="form-group row">
                      <label for="x" class="col-sm-3 col-form-label">Monto:</label>
                      <div class="col-sm-9">
                        <input type="number" class="form-control" id="x">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="x" class="col-sm-3 col-form-label">Comprobante:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="x">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="x" class="col-sm-3 col-form-label">Motivo:</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="x" class="col-sm-3 col-form-label">Tipo de movimiento:</label>
                      <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
                          <label class="form-check-label" for="inlineRadio1">Retiro</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                          <label class="form-check-label" for="inlineRadio2">Reposición</label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 ml-auto">
                      <button class="btn btn-primary">Agregar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
@endsection()