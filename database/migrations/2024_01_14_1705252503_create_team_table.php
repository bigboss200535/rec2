<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {

		$table->string('TeamId',20);
		$table->string('TeamName',100);
		$table->string('IsActive',10)->default('YES');
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('UserId',20);
		$table->datetime('DateCreated')->default('current_timestamp');
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
		$table->primary('TeamId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('team');
    }
}