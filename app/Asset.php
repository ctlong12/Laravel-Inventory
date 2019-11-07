<?php

namespace App;
use App\Person;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['name', 'description', 'purchased', 'person_id'];
    
    // A asset belongs to a user
    public function person() {
        return $this->belongsTo(Person::class);
    }
    
    public function user() {
        return $this->belongsTo('App\User');
    }
}
