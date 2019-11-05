@extends('cpanel.layout')
@section('content')
<link rel="stylesheet" href="{{ asset('css/bulma/css/bulma.min.css') }}">
<style>
    .card-header{
        height: 80px ;
        padding:20px !important;
        background-color: #F7F7F7;
    }
    .card{
        margin-top: 3%;
    }
</style>
<div class="card offset-1">
    <header class="card-header">
        <h1 class="title">Cadastro de Usuario</h1>
    </header>
    <div class="card-body">
        <div class="container">
            <div class="column is-10 col-md-9 offset-3">
                <div class="container">
                    <form class="field" method="post" >
                        @csrf
                        <div class="field column is-12">
                            <div class="tile">
                                <div class="field column is-6">
                                 <label class="label" for="usuario">Usuario</label>
                                    <input type="text" name="usuario"  id="usuario" class="input is-large">
                                </div>
                            </div>
                        </div>
                        <div class="field column is-12">
                            <div class="tile">
                                <div class="field column is-5">
                                    <label class="label">Nivel</label>
                                    <div class="select">
                                        <select class="input select is-large"  id="select">
                                            <option value="1" selected>Administrador</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field column is-12">
                            <div class="tile">
                                <div class="field column is-4">
                                    <label class="label" for="pass">Senha</label>
                                    <input type="password" name="pass" id="pass" class="input is-large" />
                                </div>
                                <div class="field column is-4">
                                    <label class="label" class="confirma">Confirma senha</label>
                                    <input type="password" name="confirma" id="confirma" class="input is-large" />
                                </div>
                            </div>
                        </div>
                        <div class="field column">
                            <div class="is-4 column">
                                <button type="button" id="btngravar" class="button is-info is-large is-4">Gravar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--modal sucesso-->
<div id="modal-sucesso" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
          <article class="message is-success">
        <div class="message-header">
          <p>Sucesso</p>
          <button id='btnclosesuccess' class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body"></div>
      </article>
      </div>
      </div>

<!-- modal error -->
<div id="modal-error" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
          <article class="message is-danger">
        <div class="message-header">
          <p>Alerta</p>
          <button id='btnclosedelete' class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body"></div>
      </article>
        </div>
      </div>
<script>
    (function(){
        const usuario = document.getElementById('usuario');
        const password = document.getElementById('pass');
        const confirma = document.getElementById('confirma');
        const btngravar = document.getElementById("btngravar");

        let valSenha ="";
        const modalError = () => {
            $("#modal-error").addClass(function (index){
                return index + " is-active is-clipped";
            });
        };
        
        const modalSucesso = () => {
            $("#modal-sucesso").addClass((index)=>{
                return index + " is-active is-clipped"; 
            });
        };

		$('#btnclosedelete').click(function(){
			$('#modal-error').removeClass(' is-active is-clipped ');
        })
        
        $('#btnclosesuccess').click(function(){
			$('#modal-sucesso').removeClass(' is-active is-clipped ');
        })
        
        function valida (){
            if (confirma.value != password.value){
               modalError();
				$('.message-body').text("Senha nao confere");
            }
        }
        confirma.addEventListener("keypress",function(evt){
            if(evt.keyCode == 13)
            {
               valida();
            }
        })
        confirma.addEventListener("blur", valida, false);

        btngravar.addEventListener("click", function(){
            if (usuario.value.trim() == "" || 
                password.value.trim() == "" ||
                confirma.value.trim()=="" )
            {
                modalError();               
                $(".message-body").text("Componentes em branco verifique os campos");
               
            }else if (password.value != confirma.value){
                modalError();
                $(".message-body").text("campo senha nao confere");
            } else {
            const user = {
                usuario: usuario.value,
                password: password.value,
                nivel:  $("#select option:selected").val(),
            };
            $.ajax({
                url: "{{ route('Usuario_create') }}",
                method: "post",
                data:{
                    "_token": $("[name='_token']").val(),
                    "user" : user
                },
                success: function(response) {
                    if (response.code == 204){
                        $("#modal-sucesso").addClass((index)=>{
                            return index + " is-active is-clipped ";
                        });
                        $(".message-body").text(response.msg);
                    }else if(response.code == 302){
                        $("#modal-error").addClass((index)=>{
                            return index + " is-active is-clipped ";
                        });
                        $(".message-body").text(response.msg);
                    }
                }
            });
        }
    }, false);
})();
</script>
@endsection
