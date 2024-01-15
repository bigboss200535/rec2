<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenderTable extends Migration
{
    public function up()
    {
        Schema::create('gender', function (Blueprint $table) {

		$table->string('GenderId',20);
		$table->string('GenderName',100);
		$table->string('IsActive',10)->default('YES');
		$table->string('Differential',10)->default('0');
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
		$table->primary('GenderId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('gender');
    }
}