<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('motions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titdni')->nullable();
            $table->string('titnombre')->nullable();
            $table->string('tarjetiad')->nullable();
            $table->string('Nrotarje')->nullable();
            $table->date('fechacomp');
            $table->string('detacomp');
            $table->string('plancomp');
            $table->integer('nrocuota')->nullable();
            $table->integer('totcuota');
            $table->double('impcuota',11,2);
            $table->double('imptotal',11,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motions');
    }
};
