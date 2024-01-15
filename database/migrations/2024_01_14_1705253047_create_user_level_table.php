<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLevelTable extends Migration
{
    public function up()
    {
        Schema::create('user_level', function (Blueprint $table) {

		$table->string('UserId',20);
		$table->string('SystemId',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('CanAdd',10);
		$table->string('CanEdit',10);
		$table->string('CanDelete',10);
		$table->string('CanPrint',10);
		$table->string('CanView',10);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_level');
    }
}