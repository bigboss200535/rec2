<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('user_permissions', function (Blueprint $table) {

		$table->string('UserId',20);
		$table->string('CanModify',20);
		$table->string('CanDelete',20);
		$table->string('CanPrint',20);
		$table->string('CanCreate',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('IsZoneManager',20)->default('NO');
		$table->string('IsAdmin',20)->default('NO');
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
		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_permissions');
    }
}