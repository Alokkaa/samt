<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Home extends Model {

    

    

    protected $table    = 'home';
    
    protected $fillable = [
          'image',
          'en_text',
          'ar_text'
    ];
    

    public static function boot()
    {
        parent::boot();

        Home::observe(new UserActionsObserver);
    }
    
    
    
    
}