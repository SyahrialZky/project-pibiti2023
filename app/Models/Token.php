<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Token extends Model
{
    use HasFactory;

    protected $table = 'tokens';

    protected $fillable = [
        'token',
        'expired',
        'hari',
    ];
}