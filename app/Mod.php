<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mod extends Model
{
    protected $fillable = ['make', 'brand', 'description'];

    public function transaction() {
        return $this->hasMany('App\Transaction');
    }
}
