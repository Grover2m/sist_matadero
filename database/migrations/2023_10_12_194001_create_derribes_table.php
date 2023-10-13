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
        Schema::create('derribes', function (Blueprint $table) {
            $table->id();
            $table->integer("orden");
            $table->string("fecha");
            $table->integer("tongada")->default(1);
            $table->integer("cant_reserva")->default(0);
            $table->integer("cant_adicional")->default(0);
            
            $table->bigInteger("socio_id")->unsigned();
            $table->foreign("socio_id")->references("id")->on("socios");
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users");

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
        Schema::dropIfExists('derribes');
    }
};
