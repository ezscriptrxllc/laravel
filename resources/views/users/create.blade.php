@extends('layouts.app')
@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" required>
        <hr>
        <input type="submit" value="Save">
    </form>
@endsection
