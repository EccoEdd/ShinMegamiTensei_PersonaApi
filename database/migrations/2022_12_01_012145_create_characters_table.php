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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20)
                ->nullable(false);
            $table->string('family_name', 20)
                ->nullable(false);
            $table->char('gender', 1)
                ->nullable(false);
            $table->date('birthday')
                ->nullable(false);
            $table->foreignId('persona_id')
                ->constrained('personas');
            $table->foreignId('title_id')
                ->constrained('titles');
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
        Schema::dropIfExists('characters');
    }
};
