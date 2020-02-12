@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$product->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" value="{{$product->nome}}"
                        id="nomeProduto" placeholder="Produto">
                </div>
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <select class="form-control" name="nomeCategoria" id="nomeCategoria">
        @forEach($cats as $cat)
                        @if ($product->categoria_id == $cat->id)
                            <option value="{{ $cat->id }}"> {{ $cat->nome }} </option>
                        @endif
        @endforeach

        @forEach($cats as $cat)
                        @if ($product->categoria_id <> $cat->id)
                            <option value="{{ $cat->id }}"> {{ $cat->nome }} </option>
                        @endif
        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm"><a href="/produtos">Cancel</a></button>
            </form>
        </div>
    </div>

@endsection
