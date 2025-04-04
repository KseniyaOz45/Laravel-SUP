<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Inventory extends Model
{
    //
    use HasFactory;
    protected $table = 'inventories';
    protected $fillable = ['name', 'batch_number', 'price', 'type_id', 'manufacturer_id'];

    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(InventoryType::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
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
