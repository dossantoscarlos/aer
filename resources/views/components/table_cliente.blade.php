<div class="container">
	<table class="table">
		<thead>
			<th>Nome Completo</th>
			<th>CPF</th>
			<th>Telefone</th>
			<th>Whatsapp</th>
			<th>Mais dados</th>
		</thead>
		<tbody>
			@foreach($resultado as $lista)
				<tr>
					<td>{{ $lista->nome }}</td>
					<td>{{ $lista->cpf }}</td>
					<td>{{ $lista->tel_contato}}</td>
					<td>{{ $lista->whatsapp }} </td>
					<td>
						<button type="button" class="btn btn-success mais_dados" data-id="{{ $lista->id }}">{{ strtoupper(__('mais dados')) }}</button>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>

<script type="text/javascript" defer="true">
	(()=>{
		$('.mais_dados').on('click',function(event){
			alert($(this).data('id'))
		})
	})();
</script>