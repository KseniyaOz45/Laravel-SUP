<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VacationType extends Model
{
    //
    use HasFactory;
    protected $table = 'vacation_types';
    protected $fillable = ['name'];

    public function vacations(): HasMany
    {
        return $this->hasMany(Vacation::class);
    }
}
