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
    Schema::create('address_contacts', function (Blueprint $table) {
      $table->id();
      $table->string('neighbourhood');
      $table->string('street')->nullable();
      $table->string('country')->nullable();
      $table->string('house_number')->nullable();
      $table->unsignedBigInteger('contact_id');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('addresses_contact');
  }
};
