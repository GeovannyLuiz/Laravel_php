<h1>Formulário de contatos</h1>
@if ($errors->any())
@foreach($errors as $error)
{{ $error }}
@endforeach
@endif
<form action="{{ route('contacts.update',$contact->id) }}" method="post">
    @csrf()
    @method('put')
    <label>Nome Completo</label>
    <input type="text" name="name" value="{{ $contact->name }}" id="name" placeholder="Nome Completo">
    <label>Email</label>
    <input type="text" name="email" value="{{ $contact->email }}" id="email" placeholder="E-mail">
    <label>Contato</label>
    <input type="text" name="phone" value="{{ $contact->phone }}" id="phone" maxlength="9" placeholder="xxxxx-xxxx">
    <button type="submit">Enviar</button>
</form>