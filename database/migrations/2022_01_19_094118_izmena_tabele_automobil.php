<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleAutomobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('automobils',function (Blueprint $table){
            $table->renameColumn('cena','CENA');
        });
        Schema::table('automobils', function (Blueprint $table) {
            //vidi se u phpmysql-u, deo structure
            $table->string('gorivo', 50)->change();
        });
        Schema::table('automobils',function (Blueprint $table){
            $table->string('test');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('grads',function (Blueprint $table){
            $table->dropColumn('test');
          $table->renameColumn('CENA','cena');
          });
    }
}
