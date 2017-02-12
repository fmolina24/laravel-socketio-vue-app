@extends('layouts.master')


@section('content')
    <div class="row">
        <div class="col s12">
            <h1>Chat</h1>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <chat></chat>
        </div>
    </div>
@endsection

@section('footer')
    <script src="https://cdn.socket.io/socket.io-1.4.5.js"></script>
@endsection