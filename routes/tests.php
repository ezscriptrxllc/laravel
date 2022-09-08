<?php

use Illuminate\Support\Facades\Route;

Route::get('/sentry', function() {
    throw new Exception('New forced issue for Sentry testing');
});
