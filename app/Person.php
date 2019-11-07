<?php

namespace App;

use App\Asset;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
        protected $fillable = ['fname', 'lname', 'birthDate', 'email'];
        
        // A person can have many tools, one to many relationship
        public function assets() {
            
            return $this->hasMany(Asset::class);
        }

}
