<?php

use App\Models\OrderItem;
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
            $table->integer('sub_total');
            $table->integer('dicount');
            $table->integer('tax');
            $table->integer('total');
            $table->string('first_name');
            $table->string('last_name');
            // $table->string('mobile');
            $table->string('phone');
            $table->string('line_1');
            $table->string('line_2');
            $table->string('city');
            // $table->string('provincy');
            $table->integer('count');
            $table->string('zip_code');
            $table->boolean('is_shiping')->default(0);
            $table->foreignId('customer_id')->references('id')->on('customers');
            $table->enum('status' , ['ordered' , 'deliverd' , 'canceld'])->default('ordered');
            $table->timestamp('deliverd_at')->nullable();
            $table->timestamp('canceled_at')->nullable();
            $table->timestamps();
            // order Item


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
