@extends('layouts.layout')

@section('content')

<h2>Новое сообщение</h2>
<form action="messages" method="POST" id="id-form_messages">
    {{csrf_field()}}
    <div class="form-group">
            <label for="name">Имя: *</label>
            <input type="text" class="form-control" placeholder="Введите имя" name="username" id="name">
    </div>
    <div class="form-group">
            <label for="message">Сообщение: *</label>
            <textarea class="form-control" rows="5" placeholder="Введите сообщение" name="message" cols="56" id="message"></textarea>
    </div>
    <div class="form-group">
            <label for="name"></label>
            <input type="submit" class="btn btn-primary" value="Добавить">
    </div>
    @include('layouts.error')
</form>
@endsection

