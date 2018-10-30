@extends('layouts.panel')

@section('content')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">BigLabs Panel</h1>
          </div>

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <input type="number" placeholder="Método de pago" class="form-control">
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
          </form>
        </main>
      </div>
@endsection()