<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoidung', function (Blueprint $table) {
            $table->string('taikhoan');
            $table->string('matkhau');
            $table->string('sodienthoai');
            $table->string('email');
            $table->string('hovaten');
            $table->string('diachi');
            $table->string('gioitinh');
            $table->string('anh');
            $table->string('sanpham');

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
        Schema::dropIfExists('nguoidung');
    }
};
