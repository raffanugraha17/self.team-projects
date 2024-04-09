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
        Schema::create('cashier_lists', function (Blueprint $table) {
            $table->bigInteger('cashier_id')->autoIncrement();
            $table->bigInteger('cashier_code')->default(0);
            $table->string('cashier_name');
            $table->text('cashier_telephone');
            $table->integer('cashier_role');
            $table->enum('cashier_shift', ['morning', 'afternoon', 'night']);
            $table->enum('cashier_gender', ['male', 'female']);
            $table->boolean('flag')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashier_lists');
    }
};