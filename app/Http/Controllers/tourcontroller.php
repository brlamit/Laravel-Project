<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTbltourpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
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

        // Add auto-increment to PackageId
        DB::statement('ALTER TABLE tbltourpackages MODIFY PackageId INT AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbltourpackages');
    }
}