<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code',60);//コード番号
            $table->string('name');//商品名
            $table->string('abname',40);//省略名
            $table->string('artist');//アーティスト名
            $table->string('img');//商品画像
            $table->integer('price');//値段
            $table->string('expl');//商品説明
            $table->text('detail');//詳細
            $table->text('records');//収録楽曲
            $table->integer('amounts');//在庫数
            $table->integer('postage');//送料
            $table->integer('orderlimit');//一回のオーダー制限
            $table->string('category',100);
            $table->integer('shopid');//ショップID
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
        Schema::dropIfExists('items');
    }
}
