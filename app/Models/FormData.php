<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;
    protected $table = 'form_data';

    protected $fillable = [
        'form_id',
        'fullname',
        'email',
        'phone',
        'message',
        'ip_address',
        'site',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
