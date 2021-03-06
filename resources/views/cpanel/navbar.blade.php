<?php 
  $user = session()->get("user");
  $nome = $user->nome;
  $nome = explode(" ", $nome);
  foreach ($nome as $resp):
    $operador = ucfirst($resp)." ";
endforeach;

?>
<style>
  #navbarTogglerDemo02 li.nav-item {
    padding:10px
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-size:13pt">
            <li class="nav-item active">
              <span style="color:aliceblue">
                Operador:
                &nbsp;&nbsp;{{ trim($operador) }}
              </span>
            </li>
            <li class="nav-item">
              <span style="color:aliceblue">
                  Data: {{ date('d/m/Y') }} 
              </span>
            </li>
            <li class="nav-item">
              <span style="color:#FFF">
                  <span id="data"></span>
              </span>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}">
             <button class="btn btn-success my-2 my-sm-0"
              type="submit">Sair</button>
          </form>
        </div>
      </nav>

 <style>
.bg-black{
    background-color: #111 !important;
    font-size: 18pt;
}
</style>
