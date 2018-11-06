@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Métodos de Pago</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-hover table-sm">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Método</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Método de pago</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Método de pago</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Método de pago</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Método de pago</td>
                </tr>
                <tr data-toggle="modal" data-target="#exampleModal">
                  <td>5</td>
                  <td>Método de pago</td>
                </tr>
                <tr class="collapse" id="collapseExample">
                  <td colspan="2">
                    <form action="#" class="form-inline">
                      <input type="text" class="form-control mb-2 mr-sm-2" id="newPaymentMethod" placeholder="Nuevo método de pago">
                      <button type="submit" class="btn btn-link mb-2"><span data-feather="save"></span></button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Crear nuevo método
          </button>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar método de pago</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="#">
                    <div class="form-group">
                      <label for="newPaymentMethod">Método de pago</label>
                      <input type="text" class="form-control" id="newPaymentMethod" value="Método de pago">
                    </div>
                    <button class="btn btn-primary">Modificar</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                  <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
              </div>
            </div>
          </div>

        </main>
      </div>
@endsection()