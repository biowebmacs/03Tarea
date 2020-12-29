@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h4 class="display-3">Añadir Productos</h4>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form  method="post" action="{{ route('products.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Producto:</label>
              <input type="text" class="form-control" name="name" placeholder="Coloca nombre del producto"/>
          </div>

          <div class="form-group">
              <label for="sku">Sku:</label>
              <input type="text" class="form-control" name="sku" placeholder="Asigna codigo del producto"/>
          </div>
          <div class="form-group">
              <label for="description">Descripción:</label>
              <input type="text" class="form-control" name="description" placeholder="Coloca caracteristicas del producto"/>
          </div>
                                
          <button type="submit" class="btn btn-primary">Añadir</button>
      </form>
  </div>
</div>
</div>
@endsection