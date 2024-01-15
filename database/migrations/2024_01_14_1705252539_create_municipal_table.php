<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalTable extends Migration
{
    public function up()
    {
        Schema::create('municipal', function (Blueprint $table) {

		$table->string('MunicipalId',20);
		$table->string('MunicipalName',150);
		$table->string('Location',100);
		$table->string('IsActive',20);
		$table->string('BlockState',20)->default('NO');
		$table->string('UserId',20);
		$table->string('SystemId',20);
		$table->string('Telephone1',20);
		$table->string('Telephone2',20);
		$table->string('Email',100);
		;
		;
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
		$table->primary('MunicipalId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('municipal');
    }
}