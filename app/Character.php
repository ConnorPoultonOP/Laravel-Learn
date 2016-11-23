<?php

namespace app {

    use Illuminate\Database\Eloquent\Model;

    class Character extends Model
    {
        protected $fillable = ['characterName', 'playerName'];

        public function dm()
        {
            return $this->belongsTo(dm::class);
        }
    }
}
