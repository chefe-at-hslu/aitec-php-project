@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Users</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>EMail</th>
                                    <th>Type</th>
                                    <th>Confirmed</th>
                                    <th>Blocked</th>
                                </tr>
                            </thead>
                            <body>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <p>{{ $user->isAdmin() ? 'admin' : 'standard' }}</p>
                                        </td>
                                        <td>
                                            @if ($user->isConfirmed())
                                                <p>Confirmed<p>
                                            @else
                                                <a class="btn btn-success btn-small" href="/user/{{ $user->id }}/confirm">Confirm</a>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($user->isBlocked())
                                                <a class="btn btn-danger btn-small" href="/user/{{ $user->id }}/unblock">Unblock</a>
                                            @else
                                                <a class="btn btn-danger btn-small" href="/user/{{ $user->id }}/block">Block</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
