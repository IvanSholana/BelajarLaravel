<?php

namespace App\Models;

use App\Models\value;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class student extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_Lengkap', 'Jenis_Kelamin', 'Umur', 'NIM'];

    public function value(): HasOne
    {
        return $this->hasOne(value::class, 'NIM', 'NIM');
    }
}
