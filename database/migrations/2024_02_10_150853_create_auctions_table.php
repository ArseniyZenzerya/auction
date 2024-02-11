<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateAuctionsTable extends Migration
    {
        public function up()
        {
            Schema::create('auctions', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id')->nullable(); // Foreign key column
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->decimal('start_price', 10, 2)->nullable();
                $table->timestamp('start_time')->nullable();
                $table->timestamp('end_time')->nullable();
                $table->timestamps();

                // Foreign key relationship
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });
        }

        public function down()
        {
            Schema::dropIfExists('auctions');
        }
    }
