<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBidsTable extends Migration
    {
        public function up()
        {
            Schema::create('bids', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('auction_id');
                $table->unsignedBigInteger('user_id');
                $table->decimal('amount', 10, 2);
                $table->timestamps();

                // Foreign keys
                $table->foreign('auction_id')->references('id')->on('auctions')->onDelete('cascade');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        public function down()
        {
            Schema::dropIfExists('bids');
        }
    }

