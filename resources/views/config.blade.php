@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{{ asset('css/bulma/css/bulma.min.css') }}">
<div class="container column is-4">
	<div class="title is-primary">
		<h3 class="title has-text-centered">Cadastre seu usuario</h3>
	</div>
	<hr/>
	<form method="post" action="{{ route('configPost') }}">
	<div class="field">
		@csrf
			<p class="control">
				<label class="label">Nome de usuario</label>
				<input type="text" id="usuario" name="usuario" class="input is-large" placeholder="nome de usuario" />
			</p>
			<p class="control">
				<label class="label">Nivel</label>
				<div class="select is-large">
					<select id="nivel" name='nivel'>
						<option value="1">Administrador</option>
					</select>
				</div>
			</p>
		</div>
		<div class="field">
			<p class="control">
				<label class="label">Senha para conectar</label>
				<input type="password" id="password" name="password"
				class='input is-large' placeholder="******" />
			</p>
			<p class="control">
				<label class="label">Confirma senha</label>
				<input type="password" class="input is-large" id="confpass" placeholder="******" />
			</p>
		</div>
		<div class="field tile column is-7">
			<p class="control">
				<button type='button' id="btnsalvar" class="button is-success is-large" >Salvar</button>
			</p>
		</div>
		</form>
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
	  <p>Sucesso</p>
	  <button id='btnclosedelete' class="delete" aria-label="delete"></button>
	</div>
	<div class="message-body"></div>
  </article>
  </div>
  </div>

<script type="text/javascript">

	$(document).ready(function (){

		$('#btnclosesuccess').click(function(){
			$('#modal-sucesso').removeClass(' is-active is-clipped')
			location.href="{{ route('login') }}";
		})
		$('#btnclosedelete').click(
			function(){
				$('#modal-error').removeClass(' is-active is-clipped')
			}
		)

		$("#btnsalvar").on('click', function () {

			const modalError = (msg) => {
				$('#modal-error').addClass((index) => {
					return index + ' is-active is-clipped'
				});
				$('.message-body').text(msg)
			};

			const modalSuccess = (msg) => {
				$('#modal-sucesso').addClass(function(index){
					return index + ' is-active is-clipped'
				});
				$('.message-body').text(msg)
			};

			let validaSenha = (pass,confpass) => {
				if ($('#usuario').val().trim()==""){
					modalError("Campo usuario esta em branco")
					return false
				}else if (pass.trim() == "" || confpass.trim() ==""  )
				{
					modalError("Campo senha ou confirma senha esta em branco")
					return false
				}else if (pass != confpass ){
					modalError("Campo senha e confirma senha nao sao iguais")
					console.log(pass)
					return false
				}else{
					return true
				}
			}

			if(validaSenha($("#password").val(),$("#confpass").val()))
			{		
				var  caminho = '/config';
				$.ajax({
					method : "POST",
					url: caminho,
					data : {
						password: $('#password').val(),
						usuario : $('#usuario').val(),
						_token: $('input[type=hidden]').val(),
						nivel : $('#nivel').val(),
					},
					success:function (response) {
						modalSuccess(response.msg)
						console.log(response)
					},
					fail: function (resp,status){
						modalError(resp)
						console.log(resp ,status)
					}
				});
			}
		})
	});
</script>
@endsection
