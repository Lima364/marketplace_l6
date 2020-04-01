@extends('layouts.app')

@section('content')
    <h1>Atualizar Loja</h1>
    <!-- <form action="{{route('admin.stores.update', ['store' => $store->id])}}, ['store'=>$store->id])
    /admin/stores/update/{{$store->id}}" method="post"> -->
    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> // @csrf-->
 
           @csrf
            @method("PUT")
        
        <div class="form-group">
            <label>Nome Loja</label>
            <input type="text" name="name"  class="form-control" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <label>Celular/Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

<!-- usuário tem uma loja só por isso não preciso desta div do usuário - não irei editar usuário
apenas as informações da loja -->

        <div>
            <button type="submit" class="btn btn-lg btn-success">Atualizar Loja</button>
        </div>

    </form>
@endsection