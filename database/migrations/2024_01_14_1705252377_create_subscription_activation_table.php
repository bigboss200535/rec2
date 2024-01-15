<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionActivationTable extends Migration
{
    public function up()
    {
        Schema::create('subscription_activation', function (Blueprint $table) {

		$table->increments(SubId);
		$table->string('Subscription',100);
		$table->string('SubscriptionKey',100);
		$table->date('SubscriptionStart');
		$table->date('SubscriptionEnd');
		$table->string('SubscriptionStatus',100)->default('ACTIVATED');
		$table->string('Transactions',100);
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
		$table->primary('SubId');

        });
    }

    public function down()
    {
        Schema::dropIfExists('subscription_activation');
    }
}