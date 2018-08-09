<?php

namespace yedincisenol\Vision;

use Illuminate\Support\Facades\Facade;

class LaravelFacede extends Facade {

    protected static function getFacadeAccessor() { return Vision::class; }

}