@extends('CPanel.layout')
@section('content')
<div class="hero is-light">
	<div class="hero-body">
		<div class="is-fluid">
			<h1 class="title">
				Cadrastamento de Grupos
			</h1>
			<h2 class="subtitle">
				Digite o nome do grupo de usuario
			</h2>
		</div>
	</div>
</div>
<div id="divProdutoBase" class="column is-offset-1 tile is-10 "style="display:none;">
	<input type="text" class='input is-medium control is-6' name="produto[]" placeholder="Nivel de Grupo" />
	<span> &nbsp;</span>
	<button type="button" class="button is-danger is-medium is-6" onclick="produtoList.remove(this.parentNode)">Remover</button>
</div>
<form class="field">
	<div id="divProdutoList"></div>
	<p>&nbsp;</p>
	<div class="field is-grouped is-grouped-centered">
		<div class="control">
			<button type="button" id='btngravar'class="button is-medium is-info ">Gravar</button>
		</div>
		<div class="control"> 
			<button type="button" id='btnplus' onclick="produtoList.insert()" class="button is-medium is-primary">Mais</button>
		</div>

	</div> 
</div>
</form>

<script type="text/javascript">
	var produtoList = {
		'init': function()
		{
			this.divProdutoList = document.getElementById('divProdutoList');
			this.divProdutoBase = document.getElementById('divProdutoBase');
		},

		'insert': function()
		{
			var newDiv = this.divProdutoBase.cloneNode(true);
			newDiv.style.display = '';
			console.log('newDiv => ', newDiv);
			this.divProdutoList.appendChild(newDiv);
		},

		'remove': function(el)
		{
			el.parentNode.removeChild(el);
		}
	};
	produtoList.init();
</script>

</div>
<p>&nbsp;</p>
@endsection