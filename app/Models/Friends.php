<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id',
        'user_name',
        'tag_name',
    ];

    public function container() {
        return $this->belongsTo('App\Models\Friends', 'tag_name', 'id');
    }
}
