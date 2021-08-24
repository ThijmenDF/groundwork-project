<?php

use App\Models\Setting;
use Groundwork\Migration\Builders\Schema;

Schema::truncate('settings');

Setting::create([
    'name' => 'hello',
    'value' => 'Hello World'
]);