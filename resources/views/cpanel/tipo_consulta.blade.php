@extends('layouts.app')
@section('content')
<noscript>
	<?php header(route("login")) ?>
</noscript>
	<div class="container">
		<section class="card">
			<header class="card-header">
				<h1>Tipo de Consulta</h1>
			</header>
			<article class="card-body">
				<div class="row d-flex justify-content-center">
						<div class="col-md-4">
							<div class="form-group">
								<label for="filtro">Filtro</label>
								<input type="text" id="filtro" value="{{ old('codigo') }}" required class="form-control" placeholder="filtro" title="escolha um atributo pra ser o filtro de busca" name="filtro" />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="descricao"> Nome da entidade</label>
								<input type="text" value="{{ old('descricao') }}" required name="descricao" placeholder="Digite aqui" id="descricao" class="form-control" title="Todas as suas entidades devem ser escrita no plural"/>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group my-4">
								<button class="btn btn-success btn-lg" type="button" id="btn_salvar">Save</button>
							</div>
						</div>
					</div>
			</article>
		</section>
	</div>
	<script type="text/javascript" defer>
		(()=>{
			var filtro = $('#filtro');
			var descricao = $('#descricao');
			var btn_salvar = document.getElementById('btn_salvar');

			btn_salvar.addEventListener('click', function (event) {
				axios({
					url: "{{ route('save_tipo_entidade')}}",
					method: "POST",
					data: {
						filtro: filtro.val(),
						descricao : descricao.val()
					}
				}).then( (response) => {
					alert(response.data.content)
					filtro.val("");
					descricao.val("");
					console.log(response.data.content)
				}).catch(erros => {
					var resultado = erros.response.data.errors;
					if (erros.response.status == 422){ 
						if (resultado.filtro != undefined)
							alert( resultado.filtro.map(resp => { return resp }))
						else 
							alert(resultado.descricao.map(resp => { return resp }))
					}else {
						alert("Erro interno ao salvar dados !!! ")
					}
				})	
			})
		})();
	</script>
@endsection