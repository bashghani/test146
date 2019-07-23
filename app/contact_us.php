<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
   protected $table = 'cotact_us';
    protected $fillable = ['id','name','email','message','telephone','subject','completion_comment','status','created_at','updated_at',];
}
