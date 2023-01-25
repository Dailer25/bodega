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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('id_empleados')
            ->constrained('empleados')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('id_clientes')
            ->constrained('clientes')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->integer('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
