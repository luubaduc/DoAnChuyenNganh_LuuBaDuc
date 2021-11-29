<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_id');//increments: là từ khóa chính, tự động tăng
            $table->string('admin_username',100); //để mặc định nó sẽ lấy là 255
            $table->string('admin_password');
            $table->string('admin_name'); //unique là tự kiểm tra đọc nhất email
             $table->string('admin_email');
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
        Schema::dropIfExists('tbl_admin');
    }
}
