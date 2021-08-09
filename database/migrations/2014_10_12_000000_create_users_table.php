<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dealership_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('crm_user_id');
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('work_phone')->nullable();
            $table->string('cell_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->string('pager')->nullable();
            $table->string('fax')->nullable();
            $table->string('outbound_callback_number')->nullable();
            $table->string('extension')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('email_signature')->nullable();
            $table->text('letter_signature')->nullable();
            $table->string('title')->nullable();
            $table->string('sales_team')->nullable();
            $table->string('department')->nullable();
            $table->string('access_level');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
