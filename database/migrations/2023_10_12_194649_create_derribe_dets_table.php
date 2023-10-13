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
        Schema::create('derribe_dets', function (Blueprint $table) {
            $table->id();
            $table->integer("orden");
            $table->integer("peso_izq")->default(0);
            $table->integer("peso_der")->default(0);
            $table->char("estado",1)->default('A');
            
            $table->bigInteger("berribe_id")->unsigned();
            $table->foreign("berribe_id")->references("id")->on("derribes");

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('derribe_dets');
    }
};
