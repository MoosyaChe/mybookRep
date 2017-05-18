@extends('layouts.layout')

@section('content')
        <div class="text-right"><b>Всего сообщений:</b><i class="badge">0</i></div></br>
@foreach($messages as $message)
        <div class="messages">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                            <span>{{$message->username}}</span>
                            <span class="pull-right label label-info">{{$message->created_at}}</span>
                    </h3>
                </div>
                <div class="panel-body">
                    {{$message->message}}
                    </hr>
                    <div class="pull-right">
                        <a href="#" class="btn btn-info">
                                <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                                <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

   @endsection