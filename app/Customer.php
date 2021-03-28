<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['lname', 'fname', 'address', 'phone'];

    public function transaction() {
        return $this->hasMany('App\Transaction');
    }
}
