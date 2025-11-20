<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNivelUser extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nivel',10)->after('email')->default('usuário');
            $table->integer('part_codigo',)->after('nivel')->nullable();
        });
    }
}
