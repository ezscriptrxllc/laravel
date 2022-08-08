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
                <td>{{ strtoupper($user->name) }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">New</a>
    <br>
    <a href="{{ route('home') }}" class="btn btn-sm btn-primary">Back to home</a>
@endsection
