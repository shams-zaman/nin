<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [

        'isActive',


    ];
    public function scopeSearch($query, $val)
    {
        return $query
            ->where('wallet', 'like', '%' . $val . '%')
            ->orWhere('username', 'like', '%' . $val . '%')
            ->orWhere('unique_id', 'like', '%' . $val . '%')
            ->orWhere('desig', 'like', '%' . $val . '%');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
