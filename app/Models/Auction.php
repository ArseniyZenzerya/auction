<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Auction extends Model
    {
        protected $fillable = [
            'title', 'description', 'start_price', 'start_time', 'end_time', 'user_id'
        ];

        // Correcting the method name to use the plural form "photos"
        public function photos()
        {
            return $this->hasMany(Photo::class);
        }
    }
