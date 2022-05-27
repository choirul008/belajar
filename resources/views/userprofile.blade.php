@extends('adminlte::page')

@section('title', 'AdminLTE Profile')

@section('content_header')
    <h1 class="m-0 text-dark">PROFILE</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0"><h>My Profile</h></p>
                    <img src="vendor/adminlte/dist/img/user.jpg" alt="User Avatar" class="img-size-50 mr-2 img-circle">
                    <div class="info">
                    <a href="#" class="d-block">Name : Squidward Tentacle</a>
                </div>
                </div>
            </div>
        </div>
    </div>
@stop