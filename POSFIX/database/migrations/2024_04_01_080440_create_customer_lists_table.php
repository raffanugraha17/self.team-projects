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
        Schema::create('customer_lists', function (Blueprint $table) {
            $table->id('customer_id')->autoIncrement();
            $table->integer('customer_code')->default(0);
            $table->string('customer_name');
            $table->text('customer_telephone');
            $table->integer('customer_age');
            $table->string('customer_occupation');
            $table->string('customer_address');
            $table->enum('customer_gender', ['male', 'female']);
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
        Schema::dropIfExists('customer_lists');
    }
};
