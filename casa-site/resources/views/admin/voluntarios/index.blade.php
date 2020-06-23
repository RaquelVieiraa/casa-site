@extends('layout.site')
@section('titulo', 'Lista de Voluntários')

@section('conteudo')
<div class="post">
    <div class="content main">
        <div class="item-title">
            <h1 class="">Lista de Voluntários</h1>
            <a class="btn btn-green" href="{{ route('admin.voluntario.adicionar') }}">Adicionar</a>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @elseif(Session::has('error'))
                <div class="alert alert-error">
                    <p>{{ Session::get('error') }}</p>
                </div>
            @endif
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr class="table-header">
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Projeto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->name }}</td>
                            <td>{{ $registro->email }}</td>
                            <td>{{ $registro->cpf }}</td>
                            <td>{{ isset($registro->projeto_id) ? $registro->projeto->nome : "Nenhum" }}</td>
                            <td class="action-cell">
                                @if(Auth::user()->id != $registro->id)
                                    <a class="btn btn-green" href="{{ route('admin.voluntario.ver', $registro->id) }}" title="Ver">
                                        <span class="fas fa-eye"></span>
                                    </a>
                                @endif

                                @if(Auth::user()->id == $registro->id)
                                    <a class="btn btn-green" href="{{ route('admin.voluntario.editar') }}" title="Editar">
                                        <span class="fas fa-pencil-alt"></span>
                                    </a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection