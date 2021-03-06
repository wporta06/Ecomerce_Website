<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();  //positifhhh
            $table->string("product_name");
            $table->integer("qty");
            $table->decimal("price",8,2);
            $table->decimal("total",8,2);
            $table->boolean("delivered")->default(0);
            $table->string("note");
            $table->string("name");
            $table->string("phone");
            $table->string("adresse");

            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade"); //references id that is on users Table ondelete users delete also Table
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
