<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
             $table->string('company_name');
			$table->string('contact_person');
            $table->string('email')->unique();
            $table->bigInteger('company_phone')->nullable();
            $table->bigInteger('contact_phone')->nullable();
            $table->string('address');
            $table->string('location');
            $table->string('image')->default('supplier.png')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
}
