<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {

		$table->string('UserId',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('LogName',100);
		$table->datetime('LogDate')->default('current_timestamp');
		$table->datetime('LogTime')->default('current_timestamp');
		$table->string('LogIp',20);
		$table->string('SystemPC',20);
		$table->string('Transactions',20);
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
        Schema::dropIfExists('user_logs');
    }
}