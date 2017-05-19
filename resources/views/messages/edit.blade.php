@extends('layouts.layout')

@section('content')

<form action="/messages/{{$messagesItem->id}}" method="post" id="id-form_messages">
        {{csrf_field()}}
        {!! method_field('patch') !!}
        
        <div class="form-group">
                <label for="name">Имя: *</label>
                <input type="text" class="form-control" value="{{$messagesItem->username}}" name="username" id="name">
        </div>
        <div class="form-group">
                <label for="message">Сообщение: *</label>
                <textarea class="form-control" rows="5" name="message" cols="56" id="message">{{$messagesItem->message}}</textarea>
        </div>
        <div class="form-group">
                <label for="name"></label>
                <input type="submit" class="btn btn-primary" value="Обновить">
        </div>
        @include('layouts.error')  
    </form>
@endsection