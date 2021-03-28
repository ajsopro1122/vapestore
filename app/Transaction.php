<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['customer_id', 'mod_id', 'quantity', 'amount'];

    public function mod() {
        return $this->belongsTo('App\Mod');
    }

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
