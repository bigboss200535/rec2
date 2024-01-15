<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleTable extends Migration
{
    public function up()
    {
        Schema::create('title', function (Blueprint $table) {

		$table->string('TitleId',20);
		$table->string('Title',100);
		$table->string('Transactions',20);
		$table->string('UserId',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
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
		$table->primary('TitleId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('title');
    }
}