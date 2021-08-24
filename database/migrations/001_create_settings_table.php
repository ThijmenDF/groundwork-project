<?php

use Groundwork\Migration\Builders\Blueprint;
use Groundwork\Migration\Builders\Schema;
use Groundwork\Migration\Migration;

class CreateSettingsTable implements Migration {

    public function up() : bool
    {
        Schema::create('settings', function(Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->text('value')->nullable();

            $table->timestamps();

            $table->unique('name');
        });

        return true;
    }

    public function down() : bool
    {
        Schema::dropIfExists('settings');

        return true;
    }
}