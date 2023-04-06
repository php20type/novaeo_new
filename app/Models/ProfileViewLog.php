<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileViewLog extends Model
{
    use HasFactory;
    protected $table="profile_view_logs";
    protected $fillable = [
        'ipaddress'
    ];
}
