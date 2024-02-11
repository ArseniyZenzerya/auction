<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Message extends Model
    {
        use HasFactory;

        protected $fillable = ['user', 'content', 'auction_id'];

        public function auction()
        {
            return $this->belongsTo(Auction::class);
        }
    }
