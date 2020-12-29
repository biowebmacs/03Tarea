@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h3 class="display-3">Actualizar Producto</h3>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="name">Producto:</label>
                <input type="text" class="form-control" name="name" value={{ $product->name }} />
            </div>

            <div class="form-group">
                <label for="sku">Sku:</label>
                <input type="text" class="form-control" name="sku" value={{ $product->sku }} />
            </div>

            <div class="form-group">
                <label for="description">Descripcion:</label>
                <input type="text" class="form-control" name="description" value={{ $product->description }} />
            </div>
           
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection