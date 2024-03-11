<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'form_id', 'name', 'form_description'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function formData()
    {
        return $this->hasMany(FormData::class);
    }
}
