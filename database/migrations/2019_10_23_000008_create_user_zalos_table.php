<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserZalosTable extends Migration
{
    public function up()
    {
        Schema::create('user_zalos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('userid')->nullable();

            $table->integer('user_id_by_app')->nullable();

            $table->string('avatar')->nullable();

            $table->string('avatars')->nullable();

            $table->string('display_name')->nullable();

            $table->date('birth_date')->nullable();

            $table->string('shared_info')->nullable();

            $table->string('tags_and_notes_info')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
