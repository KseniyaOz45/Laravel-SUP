<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Manufacturer extends Model
{
    //
    use HasFactory;
    protected $table = 'manufacturers';
    protected $fillable = ['name', 'logo', 'email', 'phone', 'address'];

    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->name); // генерируем slug на основе title
            }
        });
    }
}
