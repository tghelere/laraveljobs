<?php

namespace Jobs;

use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    protected $table = 'jobs';
    
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'expires_at'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}