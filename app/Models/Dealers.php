<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealers extends Model
{
    use HasFactory;
    protected $table = 'dealers';
    protected $fillable = [
        'name',
        'phoneNumber',
        'email',
        'address',
        'owner',
        'status_id'
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
