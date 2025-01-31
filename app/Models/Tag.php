<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'tag_id',
        'name',
        'created_at',
        'updated_at',
    ];
    public function getCreatedAtAttribute($value)
    {
        return  Carbon::parse($value)->format('d-m-Y');
    }

    public function getUpdatedAtAttribute($value)
    {
        return  Carbon::parse($value)->format('d-m-Y');
    }
}
