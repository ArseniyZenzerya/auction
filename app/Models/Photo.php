<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Photo extends Model
    {
        protected $fillable = [
            'auction_id', 'url'
        ];

        // Определение связи с аукционом
        public function auction()
        {
            return $this->belongsTo(Auction::class);
        }
    }
