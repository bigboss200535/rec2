<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainsTable extends Migration
{
    public function up()
    {
        Schema::create('complains', function (Blueprint $table) {

		$table->string('ComplainId',20);
		$table->text('Complain');
		$table->string('ComplainReadStatus',20)->default('NO');
		$table->string('ComplainAddress',20)->default('NO');
		$table->string('ComplainAddressBy',20);
		$table->string('MunicipalId',20);
		$table->string('UserId',20);
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
		$table->primary('ComplainId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('complains');
    }
}