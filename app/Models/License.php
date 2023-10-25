<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
        'note',
        'expired_at'
    ];

    protected $dates = ['expired_at'];

    public function getStatusAttribute()
    {
        return $this->expired_at->gt(Carbon::now()) ? 1 : 0;
    }
}
