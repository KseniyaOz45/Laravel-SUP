<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Order extends Model
{
    //
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ['client_id', 'personal_id',
        'status_id', 'inventory_id', 'quantity',
        'batch_number'];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function personal(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $inventory = $model->inventory()->first(); // Загружаем товар
            if ($inventory) {
                $model->sum = $model->quantity * $inventory->price;
            }
        });
    }
}
