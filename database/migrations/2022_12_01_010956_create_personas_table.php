<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('persona', 25)
                ->unique()
                ->nullable(false);
            $table->unsignedTinyInteger('level')
                ->nullable(false);
            $table->unsignedTinyInteger('strength')
                ->nullable(false);
            $table->unsignedTinyInteger('magic')
                ->nullable(false);
            $table->unsignedTinyInteger('endurance')
                ->nullable(false);
            $table->unsignedTinyInteger('agility')
                ->nullable(false);
            $table->unsignedTinyInteger('luck')
                ->nullable(false);
            $table->string('inherit', 50)
                ->nullable(false);
            $table->string('absorbs', 50)
                ->nullable(false);
            $table->string('block')
                ->nullable(false);
            $table->string('resists')
                ->nullable(false);
            $table->string('weak')
                ->nullable(false);
            $table->foreignId('arcana_id')
                ->constrained('cards');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
