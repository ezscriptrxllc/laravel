@extends('layouts.app')
@section('content')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" value="{{ old('email') }}">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <input type="submit" value="Save">
    </form>
@endsection
