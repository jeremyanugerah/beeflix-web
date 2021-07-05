<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
        public function genres() {
            return $this->belongsTo(Genre::class);
        }

        public function episodes() {
            return $this->hasMany(Episode::class);
        }
}
