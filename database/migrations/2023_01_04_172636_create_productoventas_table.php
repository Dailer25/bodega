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
        Schema::create('productoventas', function (Blueprint $table) {
            $table->foreignId('id_ventas')
            ->constrained('ventas')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->foreignId('id_productos')
            ->constrained('productos')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
            $table->integer('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productoventas');
    }
};
