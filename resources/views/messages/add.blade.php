@extends('layouts.layout')

@section('content')

    <form method="POST" id="id-form_messages">
            <div class="form-group">
                    <label for="name">Имя: *</label>
                    <input type="text" class="form-control" value="Введите имя" name="name" id="name">
            </div>
            <div class="form-group">
                    <label for="message">Сообщение: *</label>
                    <textarea class="form-control" rows="5" name="message" cols="56" id="message">Введите сообщение</textarea>
            </div>
            <div class="form-group">
                    <label for="name"></label>
                    <input type="submit" class="btn btn-primary" value="Добавить">
            </div>
    </form>
@endsection

