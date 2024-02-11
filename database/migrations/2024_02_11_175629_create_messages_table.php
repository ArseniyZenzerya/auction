<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateMessagesTable extends Migration
    {
        public function up()
        {
            Schema::create('messages', function (Blueprint $table) {
                $table->id();
                $table->string('user');
                $table->text('content');
                $table->unsignedBigInteger('auction_id'); // Добавляем поле для аукционного идентификатора
                $table->timestamps();

                $table->foreign('auction_id')->references('id')->on('auctions')->onDelete('cascade');
            });
        }

        public function down()
        {
            Schema::dropIfExists('messages');
        }
    }

