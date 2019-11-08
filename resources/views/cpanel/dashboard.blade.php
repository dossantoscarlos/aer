@extends('layouts.app')
@section('content')
<style type="text/css">
    .nav-color a{
        color:blue;
    }
    .jumbheigth{
        padding: 1%;
    }
  
</style>
<div class="jumbotron jumbheigth" >
    <div class="container">
        <h1 class="display-3"><b>Ola Bem vindo ao CPanel</b></h1>
        <div style="font-size:14pt" class="hero">
        <p >
            Encontrado qualquer duvida ou dificuldades para operar o sistema,
            nao fique esperando entre em contato
        </p>
        <p>
           <b><span>Nossas Redes Sociais:</span></b>
            <ul class="nav">
                <li class="nav-item">
                    <a href='https://www.facebook.com' target="_blank" class="nav-link nav-color">Facebook</a>
                </li>
                <li class="nav-item">
                    <a href='https://www.instagram.com' target="_blank"  class="nav-link  nav-color">Instagram</a>
                </li>
                <li class="nav-item">
                    <a href='mailto:anjoazrael10@gmail.com' class="nav-link  nav-color">E-mail</a>
                </li>
                <li class="nav-item">
                    <a href='' class="nav-link nav-color">Whatsapp</a>
                </li>
            </ul>
        </p>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
            <fieldset class="fieldset">
                <legend>Clientes</legend>
                <table class="table">
                    <thead>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Carlos</td>
                            <td>Santos silva</td>
                            <td> 21 997894564</td>
                            <td>Rua doutor renato</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="card-body">
            <fieldset class="fieldset">
                <legend>Encomendas</legend>
                <table class="table">
                    <thead>
                        <th>Cliente</th>
                        <th>Data da Encomenda</th>
                        <th>Previsao de Entrega</th>
                        <th>Produtos</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Carlos</td>
                            <td>Santos silva</td>
                            <td> 21 997894564</td>
                            <td>Rua doutor renato</td>
                        </tr>
                    </tbody>
                </table>
            </fieldset>
        </div>
        <div class="card-body">
            <fieldset class='fieldset'>
                <legend class="legend">Produto mais vendidos</legend>
                <table class="table">
                <thead>
                    <th>Nome do Produto</th>
                    <th>Quantidade</th>
                    <th>valor</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td COLSPAN='2'>Valor: </td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            </fieldset>
        </div>
    <div class="card-body">
        <fieldset class='fieldset'>
            <legend class="legend">Vendas</legend>
                <table class="table">
                <thead>
                    <th>Encomenda</th>
                    <th>data de entrega</th>
                    <th>Preço</th>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td COLSPAN='1'><b>Redimento</b></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>
            </fieldset>
        </div>
    </div>
</div>
</div>
@endsection
