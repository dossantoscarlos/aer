@extends('layouts.app')
@section('content')
<style type="text/css">
    *{
        padding:3px;
    }
	.bannerLogin{
		background-size: contain;
		background-position:center;
		background-clip: border-box;
		height: 100px;
		background-image: url('{{asset("images/aerlogo.png")}}') ;
		background-repeat:no-repeat;

	}
	.background-footer-card {
		background-color: initial;
		background-size: contain;
		background-position:center;
		height: 50px;
		/*background-image: url('{{asset("images/aerlogo.png")}}');*/
		background-repeat: no-repeat;
	}
	
	.font{
		font-style: normal;
		font-size:14pt;
		font-variant-position: normal;
	}

	.border-aer{
		border-width: 4px;
		border-style: dashed;
		border-color:  rgb(0,0,032);
	}
	.background-aer {
		background-size: contain;
		height: 100vh;
		background-image: url('{{asset("images/aericone.png")}}');
		background-repeat: no-repeat;
		background-position: left;
	}
	body{
		background-color: rgb(0,0,032) !important;
		overflow-y: hidden;
		overflow-x:hidden;
		height: 100vh
	}
</style>
@if($users == 0)
<script async>
	(()=>{
		location.href="{{ route('config') }}"
	})();
</script>
@else
<div class="background-aer col-md-12">
	<div class="d-flex justify-content-end">
		<div class=" my-5 col-md-7 d-flex justify-content-end">
			<div class="mx-5 col-md-6 my-5">
				<div class="card border-aer">
					<div class="card-header bannerLogin">
						<div class="my-4">
							<span class="title sr-only">Login-in</span>
						</div>
					</div>
					<div class="card-body font">
						<form class="form-group" action="{{ route('auth') }}" method='post'>
							@csrf
							<div class="container d-flex justify-content-center">
								<div class="row">
									<div class="form-group col-md-12 my-3">
										<label for='usuario' class="label">Usuario</label>
										<input class="form-control" type="text" title='Usuario' placeholder="Usuario" id="usuario" name='usuario'>
									</div>
									<div class="form-group col-md-12 my-3">
										<label for="password" class="label">Password</label>
										<input class="form-control " type="password" placeholder="Password" name="password" id="password">
									</div>
									
									<div class="col-md-12 d-flex justify-content-center my-3">
										<button class="btn btn-primary btn-lg" type="submit" id='btnsalvar'>
											Login
										</button>
									</div>
									@endif
								</div>
							</div>
						</form>
					</div>
				<div class="card-footer background-footer-card">
				<i class="fa fa-copyright"></i>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@if(session(status))
<div id="modal-error" class="modal is-active is-clipped">
        <div class="modal-background"></div>
        <div class="modal-content">
          <article class="message is-danger">
        <div class="message-header">
          <p>Alerta</p>
          <button id='btnclosedelete' class="delete" aria-label="delete"></button>
        </div>
        <div class="message-body">
			{{ status }}
		</div>
      </article>
        </div>
      </div>
@endif
	  {{-- 
<script>
	window.onload = function (){

		var button  = $('#btnsalvar')
		var password = $('#password')
		var token = $('input[type=hidden]')
		var usuario = $('#usuario')
		password.on('keypress', function(evt) {
			if (evt.keyCode == 13){
				connect()
			}
		})
		button.on('click',  connect)
		function connect() {
			axios({
				url: '/login',
				method: 'post',
				data:{
					password: password.val(),
					_token: token.val(),
					usuario: usuario.val()
				}
			}).then(resp => {
				console.log(resp)
			}).catch(err => {
				console.error(err)
			})
		}
	}
</script> --}}
@endsection
