@extends('layout.site')
@section('titulo', 'Adicionar projeto')

@section('conteudo')
<div class="post">
    <div class="content main">
        <div class="item-title">
            <h1>Adicionar projeto</h1>
        </div>
        <div class="item-form">
            <form action="{{ route('admin.projeto.salvar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.projetos._form')

                <div class="input-btn">
                    <button class="btn btn-green">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection