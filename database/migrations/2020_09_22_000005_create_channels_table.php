<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChannelsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'channels';

    /**
     * Run the migrations.
     * @table userchannel
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('phoneNo')->nullable()->default(null);
            $table->string('auth_phoneNo', 10)->nullable()->default(null);
            $table->string('password')->default(null);
            $table->boolean('type')->default(0);
            $table->string('name')->nullable()->default(null);
            $table->string('about')->nullable()->default(null);
            $table->string('websiteAddress')->nullable()->default(null);
            $table->string('lenzorAddress')->nullable()->default(null);
            $table->string('twitterAddress')->nullable()->default(null);
            $table->string('facebookAddress')->nullable()->default(null);
            $table->string('telegramAddress')->nullable()->default(null);
            $table->string('instagramAddress')->nullable()->default(null);
            $table->binary('postComment')->default('0\0');
            $table->tinyInteger('alarm_liked')->nullable()->default('1');
            $table->tinyInteger('alarm_comment')->nullable()->default('1');
            $table->tinyInteger('alarm_follow')->nullable()->default('1');
            $table->tinyInteger('alarm_buySubscription')->nullable()->default('0');
            $table->tinyInteger('alarm_sharing')->nullable()->default('0');
            $table->tinyInteger('alarm_event')->nullable()->default('1');
            $table->string('profilePicture')->nullable()->default(null);
            $table->string('natural_name')->nullable()->default(null);
            $table->string('natural_phoneNo')->nullable()->default(null);
            $table->string('natural_IDcode')->nullable()->default(null);
            $table->string('natural_address')->nullable()->default(null);
            $table->string('juridical_name')->nullable()->default(null);
            $table->string('juridical_IDcode')->nullable()->default(null);
            $table->string('juridical_economicCode')->nullable()->default(null);
            $table->string('juridical_registrationNo')->nullable()->default(null);
            $table->string('juridical_phoneNo')->nullable()->default(null);
            $table->string('juridical_cellPhoneNo')->nullable()->default(null);
            $table->string('juridical_address')->nullable()->default(null);
            $table->unsignedBigInteger('aparatcategory_ID');
            $table->timestamps();


            $table->foreign('aparatcategory_ID')
                ->references('id')->on('aparatcategories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
