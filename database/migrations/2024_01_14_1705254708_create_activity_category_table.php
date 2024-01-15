<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('activity_category', function (Blueprint $table) {

		$table->string('ActivityCategoryId',20);
		$table->string('ActivityCategoryName',150);
		$table->string('ServiceDescription',100);
		$table->text('Comment');
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->string('UserId',20);
		$table->string('IsActive',10)->default('YES');
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
		$table->primary('ActivityCategoryId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('UserId')->references('UserId')->on('user_accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activity_category');
    }
}