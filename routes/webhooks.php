<?php

use Illuminate\Support\Facades\Route;

Route::get('/fetch-tags', function () {
    exec('git --git-dir ' . base_path('.git') . ' fetch --prune --prune-tags origin');
});
