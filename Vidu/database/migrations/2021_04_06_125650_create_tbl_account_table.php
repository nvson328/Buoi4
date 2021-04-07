<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_account', function (Blueprint $table) {
            $table->id();
            $table->int('id_user',5);
            $table->string('username',10);
            $table->string('password');
            $table->string('email');
            $table->int('phone');
            $table->string('address');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_account');
    }
}
