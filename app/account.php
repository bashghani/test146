<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = 'account';
    protected $fillable = ['id','name','email','message','telephone','company_name','completion_comment','status','created_at','updated_at',];
}
