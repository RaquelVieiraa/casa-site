@extends('layout.site')
@section('titulo', 'Lista de Eventos')
@section('anchor', 'eventos')

@section('conteudo')
        <div class="item-title">
            <h1>Eventos</h1>
        </div>
        <div class="item border-0">
        @if(isset($eventos) && count($eventos) > 0)
            @foreach ($eventos as $evento)
                @include('site.eventos._card')
            @endforeach
        @else
            <p>Eita, ainda não houve nenhum evento, digite seu email abaixo para saber das novidades</p>
        @endif
        </div>
@endsection