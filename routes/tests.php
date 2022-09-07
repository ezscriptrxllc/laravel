<?php

use Illuminate\Support\Facades\Route;

Route::get('/sentry', function() {
    throw new Exception('Forced issue for Sentry testing');
});
