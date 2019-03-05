<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table='campaign';
    protected $fillable = ['brand_logo'];
 
    protected $with = ['InCampaign'];
    
    public function InCampaign(){
        return $this->hasMany(AssignCampaign::class, 'campaign_id');
    }
    
}
