<?php

use App\Enums\PropertyStatusEnum;
use App\Enums\PropertyTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('property_characteristics', function (Blueprint $table) {
            $table->unsignedBigInteger('property_id')->unique();
            $table->float('price')->required();
            $table->integer('bedrooms')->required();
            $table->integer('bathrooms')->required();
            $table->float('sqft')->required();
            $table->float('price_sqft')->required();
            $table->date('date_available')->required();
            $table->string('laundry')->required();
            $table->string('cooling')->required();
            $table->string('heating')->required();
            $table->string('parking_area')->required();

            $table->enum('property_type', [
                PropertyTypeEnum::SINGLE->value,
                PropertyTypeEnum::TOWNHOUSE->value,
                PropertyTypeEnum::MULTIFAMILY->value,
                PropertyTypeEnum::BUNGALOW->value,
            ]);

            $table->enum('status', [
                PropertyStatusEnum::SOLD->value,
                PropertyStatusEnum::SALE->value,
                PropertyStatusEnum::HOLD->value,
            ])->default(PropertyStatusEnum::HOLD->value)->required();
            $table->timestamps();


            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_characteristics');
    }
};
