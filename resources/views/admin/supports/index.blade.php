{{-- @extends('admin.layouts.app')

@section('title', 'Fórum')

@section('header')
@include('admin.supports.partials.header', compact('supports'))
@endsection

@section('content')
@include('admin.supports.partials.content')

<x-pagination
    :paginator="$supports"
    :appends="$filters" />

@endsection --}}

<h1>Listagem de Suportes</h1>
<a href="{{ route('supports.create') }}">Criar Suporte</a>
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
    <tbody>
    @foreach ( $supports as $support)
        <tr>
            <td>{{ $support['subject'] }}</td>
            <th>{{ $support['status'] }}</th>
            <th>{{ $support['body'] }}</th>
            <td>
                <a href="{{ route('supports.show', $support['id']) }}">Ir</a>
                <a href="{{ route('supports.edit', $support['id']) }}">Editar</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
