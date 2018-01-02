<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    //
    protected $fillable = [
        'title', 'content','user_id','mails','partner_id','partner_mail'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
