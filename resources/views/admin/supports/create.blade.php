{{-- @extends('admin.layouts.app') --}}

{{-- @section('title', 'Criar Novo Tópico') --}}

{{-- @section('header') --}}
<h1 class="text-lg text-black-500">Nova Dúvida</h1>
@if ($errors->any())
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="POST">
    @csrf()
    <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>
{{-- @endsection --}}

{{-- @section('content')
<form action="{{ route('supports.store') }}" method="POST">
    @include('admin.supports.partials.form')
</form> --}}
{{-- @endsection --}}
