<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vacation extends Model
{
    //
    use HasFactory;
    protected $table = 'vacations';
    protected $fillable = ['personal_id', 'vacation_type_id', 'start_at', 'deadline'];

    public function personal(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function vacationType(): BelongsTo
    {
        return $this->belongsTo(VacationType::class);
    }
}
