@extends('layout.app', [ "current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Página de produtos</h4>
@if(count($products) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                    <th>Categoria do Produto</th>
                    <th>Ações</th>
                </thead>
                <tbody>
    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->nome }}</td>
                        <td>
                            @foreach($cats as $cat)
                                @if($cat->id == $product->categoria_id)
                                    {{ $cat->nome }}
                                @endif
                            @endforeach
                        </td>
                        <td>
                            <a href="/produtos/editar/{{ $product->id }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/produtos/apagar/{{ $product->id }}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
    @endforeach
                </tbody>
            </table>
@endif
        </div>
        <div class="card-footer">
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@endsection
