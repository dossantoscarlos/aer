<div class="container">
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nome</th>
			<th>Nivel</th>
		</thead>
		<tbody>
			@foreach($resultado as $lista)
				<tr>
					<td>{{ $lista->id }} </td>
					<td>{{ $lista->nome }} </td>
					<td>{{ $lista->nivel }} </td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
