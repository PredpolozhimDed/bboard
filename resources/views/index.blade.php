@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    @if(count($bbs)>0)
        <table class="table table-striped table-borderless">
            {{--NOTES Все блоки разметки(кода), которые переиспользуются  вдвух и более шаблонах лучше выносить в отдельные шаблоны--}}
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            {{--NOTES Все блоки разметки(кода), которые переиспользуются  вдвух и более шаблонах лучше выносить в отдельные шаблоны--}}
            @foreach ($bbs as $bb)
                <tr>
                    <td><h4>{{ $bb->title }}</h4></td>
                    <td>{{ $bb->price }}</td>
                    <td>
                        <a href="{{ route('detail', ['bb'=>$bb->id]) }}">Подробнее...</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
