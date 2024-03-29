<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTable extends Migration
{
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {

		$table->string('ActivityId',20);
		$table->string('ActivityCategoryId',20);
		$table->string('ActivityName',150);
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->text('Comment');
		$table->string('ServiceDescription',100);
		$table->string('UserId',20);
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
		$table->primary('ActivityId');
		$table->foreign('ActivityCategoryId')->references('ActivityCategoryId')->on('activity_category');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('UserId')->references('UserId')->on('user_accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity');
    }
}