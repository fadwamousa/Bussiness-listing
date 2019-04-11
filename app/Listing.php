<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{

  protected $fillable = ['name','email','website','phone','address','bio','user_id'];
  //Listing belongs to One user
  public function user(){
    return $this->belongsTo(User::class,'user_id');
  }
}
