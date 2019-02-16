<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;




class Photography extends Model {

    

    

    protected $table    = 'photography';
    
    protected $fillable = [
          'photo',
          'en_text',
          'ar_text',
          'settings_id'
    ];
    

    public static function boot()
    {
        parent::boot();

        Photography::observe(new UserActionsObserver);
    }
    
    public function settings()
    {
        return $this->hasOne('App\Settings', 'id', 'settings_id');
    }


    
    
    
}