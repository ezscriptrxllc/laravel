@extends('layouts.app')
@section('content')
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">
            {{ config('app.env') }} environment
        </div>
    </div>
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) | EZScript
        </div>
    </div>
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            <a href="{{ route('users.index') }}">Go to Users</a>
        </div>
    </div>
@endsection
