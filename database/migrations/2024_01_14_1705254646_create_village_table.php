<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageTable extends Migration
{
    public function up()
    {
        Schema::create('village', function (Blueprint $table) {

		$table->string('VillageId',20);
		$table->string('VillageName',150);
		$table->string('IsActive',10)->default('YES');
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->useCurrent();
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('VillageId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('village');
    }
}