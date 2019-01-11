<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration {

    public function up() {

        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('last_name', 100);
            $table->date('date_birth');
            $table->char('genre',10)->nullable();
            $table->string('curriculum_link', 150);
            $table->char('marital_status',25);
            $table->char('cpf',15);
            $table->tinyInteger('flag_deficient');
            $table->text('obs_deficient')->nullable();
            $table->string('name_mother',150);
            $table->string('name_father',150)->nullable();
            $table->string('name_social',150)->nullable();
            $table->string('nationality',100);
            $table->string('phone',20);
            $table->string('mobile',20);
            $table->timestamps();
        });
    }

    public function down() {

        Schema::dropIfExists('candidates');
    }
}
