<tr>
    <td>{{ $pessoa->id }}</td>
    <td>{{ $pessoa->nome }}</td>
    <td>{{ $pessoa->sobrenome }}</td>
    <td>{{ $pessoa->email }}</td>
    <td>{{ $pessoa->dataNascimento }}</td>
    <td>{{ $pessoa->Sexo}}</td>
    <td>{{ $pessoa->Idade }}</td>
    <td>{{ Carbon\Carbon::parse($pessoa->created_at)->format('d/m/Y H:i') }}</td>
    <td class="text-center">
        <a title="Editar Pessoa" class="btn btn-info" href="{{ route('pessoa.edit',  ['id'=>$pessoa->id]) }}" ><i class="fa fa-edit fa-fw"></i></a>
        <a title="Excluir Pessoa" class="btn btn-danger" href="{{ route('pessoa.destroy',  ['id'=>$pessoa->id]) }}" ><i class="fas fa-trash-alt"></i></a>
    </td>
</tr>