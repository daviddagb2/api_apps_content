<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('package')->nullable();
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->string('urlapp')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });


        Artisan::call( 'db:seed', [
            '--class' => 'ProjectTableSeeder',
            '--force' => true ]
        );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
