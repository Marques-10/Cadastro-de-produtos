@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">

    @if(count($cats) > 0)

            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                </div>
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria</label>
                    <select class="form-control" name="nomeCategoria" id="nomeCategoria">

        @forEach($cats as $cat)

                        <option value="{{ $cat->id }}">{{ $cat->nome }}</option>

        @endforeach

                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm"><a href="/produtos">Cancel</a></button>
            </form>

    @endif

        </div>
    </div>

@endsection
