<div>
	<table>
		<thead>
			<th>Nome Completo</th>
			<th>CPF</th>
			<th>Telefone</th>
			<th>Mais dados</th>
		</thead>
		<tbody>
			@foreach($entidade as $lista)
				<tr>
					<td>{{ $lista->nome }}</td>
					<td>{{ $lista->cpf }}</td>
					<td>{{ $lista->fixo}}</td>
					<td><button>{{ toUpperCase(__('mais dados')) }}</button></td>
				</tr>
			@endiforeach
		</tbody>
	</table>
</div>
