<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {

		$table->string('ZoneId',20);
		$table->string('ZoneName',100);
		$table->string('ZoneLocation',200);
		$table->string('Geolocation',200);
		$table->string('MunicipalId',20);
		$table->string('IsActive',20);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->string('SystemId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('ZoneId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('SystemId')->references('SystemId')->on('system_data');
        });
    }

    public function down()
    {
        Schema::dropIfExists('zones');
    }
}