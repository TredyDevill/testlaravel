@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hello {{ Auth::user()->name }}<br>
                    Selamat datang dan Email anda adalah {{ Auth::user()->email }}<br>
                    Anda login menggunakan Username {{ Auth::user()->username }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
