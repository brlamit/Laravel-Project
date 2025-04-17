<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTbltourpackagesTable extends Migration
{
    public function up()
    {
        Schema::create('tbltourpackages', function (Blueprint $table) {
            // For SQLite compatibility, we'll use bigIncrements which works everywhere
            $table->bigIncrements('PackageId');
            
            $table->string('PackageName', 200)->nullable();
            $table->string('PackageType', 150)->nullable();
            $table->string('PackageLocation', 100)->nullable();
            $table->integer('PackagePrice')->nullable();
            $table->string('PackageFetures', 255)->nullable();
            $table->mediumText('PackageDetails')->nullable();
            $table->string('PackageImage', 100)->nullable();
            
            // Timestamps that work in both SQLite and MySQL
            $table->timestamp('Creationdate')->useCurrent();
            $table->timestamp('UpdationDate')->nullable()->useCurrentOnUpdate();
        });

        // For MySQL, we'll rename the auto-increment column to match your requirements
        if (DB::getDriverName() === 'mysql') {
            DB::statement("ALTER TABLE tbltourpackages CHANGE PackageId PackageId INT AUTO_INCREMENT PRIMARY KEY");
        }
    }

    public function down()
    {
        Schema::dropIfExists('tbltourpackages');
    }
}