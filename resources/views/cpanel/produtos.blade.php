@extends('layouts.app')
@section('content')
   <section class="card">
        <header class="card-header">
            <h2>Produto</h2>
        </header>
        <article class="card-body">
            <fieldset class="fieldset">
                <legend>Dados do produto</legend>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="nome">Nome do produto</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="tipo">Tipo</label>
                            <input type="text" name="tipo" id="tipo" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="sku">SKU</label>
                            <input type="text" name="sku" id="sku" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="modelo">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <input type="text" name="categoria" id="categoria" class="form-control">
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset >
                <legend>Campos Extras</legend>
                <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-md btn-success">Add</button>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                            <input type="text" name="extra" class="form-control" id="extra" />
                                       </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <fieldset class="fieldset">
                <legend>Dados Extras</legend>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <textarea name="observacao" id="observacao"
                            cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </fieldset>
        </article>
    </section>
@endsection
