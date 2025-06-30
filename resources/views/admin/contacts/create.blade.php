<h1>Formulário de contatos</h1>
@if ($errors->any())
@foreach($errors->all() as $error)
{{ $error }}
@endforeach
@endif
<form action="{{ route('contacts.store') }}" method="post">
    @csrf()
    <label>Nome Completo</label>
    <input type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name') }}">
    <label>Email</label>
    <input type="text" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}">
    <label>Contato</label>
    <input type="text" name="phone" id="phone" maxlength="9" placeholder="xxxxx-xxxx" value="{{ old('phone') }}">
    <button type="submit">Enviar</button>
</form>