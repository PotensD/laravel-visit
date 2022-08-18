<?php

// config for dinhdjj/laravel-visit package
return [

    /**
     * Table name for visit logs
     */
    'table' => 'visits',

    /**
     * The model class name that will be used to store visit logs, must be a subclass of \Dinhdjj\Visit\Models\Visit
     */
    'model' => Dinhdjj\Visit\Models\Visit::class,
];
