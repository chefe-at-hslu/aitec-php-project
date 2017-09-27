@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::user()->isConfirmed())
                        <a class="btn btn-info" href="/chat">Start chat</a>
                    @else
                        <p>Your account is not confirmed! Wait until an admin has confirmed your identity</p>
                    @endif
                    @if (Auth::user()->isAdmin())
                        <a class="btn btn-default" href="/users">Manage users</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
