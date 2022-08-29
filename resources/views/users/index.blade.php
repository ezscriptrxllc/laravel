@extends('layouts.app')
@section('content')
    <table class="text-gray-500 ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="padding-top: 2rem;">
        <a href="{{ route('users.create') }}"
           style="
            background-color: aquamarine;
            color: #1a202c;
            padding: 0.2rem;
            border-radius: 0.5rem;
       ">
            New
        </a>
        <a href="{{ route('home') }}"
           style="
            background-color: #a0aec0;
            color: #1a202c;
            padding: 0.2rem;
            margin-left: 0.2rem;
            border-radius: 0.5rem;
            display: inline;"
        >
            Back to home
        </a>
    </div>

@endsection
