<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignCampaign extends Model
{
    protected $table='assign_campaign';
    
    protected $fillable=['user_id', 'campaign_id'];

    public function Campaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
