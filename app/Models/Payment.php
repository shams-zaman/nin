<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'note',

        'tusername'
    ];
    public function prouser()
    {
        return $this->belongsTo(Profile::class);
    }
}
