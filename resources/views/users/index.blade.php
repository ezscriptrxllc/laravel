@extends('layouts.app')
@section('content')
    <table class="text-gray-500 ">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}"
       style="
            background-color: aquamarine;
            color: #1a202c;
            padding: 0.2rem;
            border-radius: 0.5rem;
       ">
        New
    </a>
    <br>
    <a href="{{ route('home') }}" >Back to home</a>
@endsection
