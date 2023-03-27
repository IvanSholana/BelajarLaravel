<?php

namespace App\Models;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class value extends Model
{
    use HasFactory;
    protected $primaryKey = 'NIM';
    public $incrementing = false;

    public function student(): HasMany
    {
        return $this->hasMany(student::class, 'NIM', 'NIM');
    }
}
