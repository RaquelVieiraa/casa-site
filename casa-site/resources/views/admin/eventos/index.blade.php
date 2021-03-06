@extends('layout.site')
@section('titulo', 'Lista de Eventos')

@section('conteudo')
        <h1 class="">Lista de Eventos</h1>

        <div>
            <table class="table">
                <thead>
                    <tr class="table-header">
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data</th>
                        <th>Publicado</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody class="table-body">
                    @foreach ($registros as $registro)
                        <tr>
                            <td>{{ $registro->id }}</td>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->data}}</td>
                            <td>{{ $registro->publicado ? "Sim" : "Não" }}</td>
                            <td>
                                <a class="btn" href="{{ route('admin.evento.editar',$registro->id) }}">Editar</a>
                                <a class="btn btn-danger" href="{{ route('admin.evento.deletar',$registro->id) }}" onclick="return confirm('Tem certeza que deseja deletar o evento?');">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div>
            <a class="btn" href="{{ route('admin.evento.adicionar') }}">Adicionar</a>
        </div>
@endsection