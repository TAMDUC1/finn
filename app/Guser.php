<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guser extends Model
{
    //
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email'
    ];

}
