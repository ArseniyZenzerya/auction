<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreatePhotosTable extends Migration
    {
        public function up()
        {
            Schema::create('photos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('auction_id');
                $table->foreign('auction_id')->references('id')->on('auctions')->onDelete('cascade');
                $table->string('url');
                $table->timestamps();
            });
        }

        public function down()
        {
            Schema::dropIfExists('photos');
        }
    }
