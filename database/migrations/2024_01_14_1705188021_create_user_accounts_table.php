<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {

		$table->string('UserId',20);
		$table->string('Username',100);
		$table->string('Password',100);
		$table->string('HashSalt',100);
		$table->string('Firstname',100);
		$table->string('Othername',100);
		$table->string('Fullname',200);
		$table->string('Gender',10);
		$table->string('UserType',150);
		$table->string('Telephone1',20);
		$table->string('Telephone2',20);
		$table->string('Telephone3',20);
		$table->string('Block',20)->default('NO');
		$table->string('Email',50);
		$table->string('Mode',50)->default('NEW-USER');
		$table->string('ContractType',50);
		$table->datetime('AccountExpiry');
		$table->string('Expiry',20)->default('NO');
		$table->string('ActivateExpiry',20)->default('NO');
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('TeamId',20);
		$table->string('IsActive',20);
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
		$table->primary('UserId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('TeamId')->references('TeamId')->on('team');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}