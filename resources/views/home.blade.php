@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::user()->isConfirmedAndNotBlocked())
                        <a class="btn btn-info" href="/chat">Start chat</a>
                    @endif

                    @if (Auth::user()->isBlocked())
                        <p>Your account is blocked!</p>
                    @else
                        @unless (Auth::user()->isConfirmed())
                            <p>Your account is not confirmed! Wait until an admin has confirmed your identity.</p>
                        @endunless

                        @if (Auth::user()->isAdmin())
                            <a class="btn btn-default" href="/users">Manage users</a>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
