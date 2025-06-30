<h1>Lista de Contatos</h1>

<a href="{{ route('contacts.create') }}">+ Novo Contato</a>

<table>
    <thead>
        <th>Nome Completo</th>
        <th>E-mail</th>
        <th>Contato</th>
        <th>#</th>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone }}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id) }}">Editar</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este contato?')">
                        <i class="fas fa-trash-alt"></i> Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
</table>