<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'description',
        'apointment_date',
        'start_time',
        'end_time',
        // 'user_id',
        // 'created_by',
    ];

    protected $cast = [
        'apointment_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
