<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Settings extends Model {

    

    

    protected $table    = 'settings';
    
    protected $fillable = [
          'name',
          'value'
    ];
    

    public static function boot()
    {
        parent::boot();

        Settings::observe(new UserActionsObserver);
    }
    
    
    
    
}