<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Auction extends Model
    {
        protected $fillable = [
            'title', 'description', 'start_price', 'start_time', 'end_time', 'user_id'
        ];

        public function photos()
        {
            return $this->hasMany(Photo::class);
        }

        public function bids()
        {
            return $this->hasMany(Bid::class);
        }

        public function messages()
        {
            return $this->hasMany(Message::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }
