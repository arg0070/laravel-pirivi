<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('items', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('categorie_id');
            $table->text('description');
            $table->float('price_day');
            $table->float('price_week');
            $table->float('price_weekend');
            $table->float('price_month');
            $table->integer('days_min');
            $table->integer('days_max');
           /*
            * Método de pago
            * Población
            */
            $table->timestamps();
            $table->engine = 'MyISAM';
        });
        DB::statement('ALTER TABLE items ADD FULLTEXT search(name, description)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('items', function(Blueprint $table) {
            $table->dropIndex('search');
            $table->drop();
        });
    }

}
