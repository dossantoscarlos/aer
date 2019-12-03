@extends('layouts.app')
@section('content')
<section class="card">
    <header class="card-header">
        <h1 class="text-center title">Consultar</h1>
    </header>
    <article class="card-body">
    <form method="get" action="{{ route('pesquisa')}}">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 ml-5">
                <div class="form-group">
                    <label class="sr-only">Pesquisar</label>
                    <input type="seacher" class="form-control" name="buscar" placeholder="lista tabelas" title="Para buscar todos os items da tabela deixe em branco">
                </div>
            </div>   
           
            <div class="col-md-3">
                <div class="form-group">
                    <select name="entidades" id="entidades" class="form-control" title="Entidades">
                        <option >Selecione uma entidade</option>
                        @foreach ($entidades as $entidade )
                            <option value="{{ $entidade->id }}">{{ $entidade->descricao }}</option>
                       @endforeach
                    </select>
                </div>
            </div>
                
            <div class="col-md-2">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Buscar</button>
                </div>
            </div>
        </div>
   </form>
</article>
</section>
<section class="container">
    @if(isset($validarsTabela))
        @if($validarTabela > 0 )
            <fieldset>
                <legend class="text-center">Listando Registros</legend>
                    @include("$tabela")
            </fieldset>
        @endif
    @endif
</section>
@endsection