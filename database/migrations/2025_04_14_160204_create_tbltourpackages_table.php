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
        Schema::create('tbltourpackages', function (Blueprint $table) {
            $table->integer('PackageId')->unsigned();
            $table->primary('PackageId');
            $table->string('PackageName', 200)->nullable();
            $table->string('PackageType', 150)->nullable();
            $table->string('PackageLocation', 100)->nullable();
            $table->integer('PackagePrice')->nullable();
            $table->string('PackageFetures', 255)->nullable();
            $table->mediumText('PackageDetails')->nullable();
            $table->string('PackageImage', 100)->nullable();
            $table->timestamp('Creationdate')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('UpdationDate')->nullable()->default(DB::raw('NULL ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbltourpackages');
    }
};
