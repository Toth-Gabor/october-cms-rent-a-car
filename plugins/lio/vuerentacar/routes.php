<?php

use \Lio\Vuerentacar\Models\Vehicle;

Route::get('vehicles', function () {
    return Vehicle::all();
});
