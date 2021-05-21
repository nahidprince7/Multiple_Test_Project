<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectUser extends Migration
{
    public function up()
    {
        /**
        ** Eloquent will handle M2M (id will singular)
        code // Schema::create('projects_users', function (Blueprint $table) {
         */


        Schema::create('projects_users', function (Blueprint $table) {
            $table->foreignId('projects_id')->constrained();
            $table->foreignId('users_id')->constrained();
            $table->boolean('is_manager')->default(false);
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
        //
    }
}
