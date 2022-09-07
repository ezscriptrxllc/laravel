<?php

use Illuminate\Support\Facades\Route;

Route::get('/sentry', function() {
    throw new Exception('Issue sample for Sentry testing');
});
