<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prefix');
            $table->string('iso_code')->nullable();
            $table->string('country_code', 10);
            $table->integer('orderb')->default(1);
            $table->boolean('active')->default(true);
            $table->timestamps();
            
        });


        Artisan::call( 'db:seed', [
            '--class' => 'CountryTableSeeder',
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
        Schema::dropIfExists('countries');
    }
}
