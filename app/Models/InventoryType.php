<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InventoryType extends Model
{
    //
    use HasFactory;
    protected $table = 'inventory_types';
    protected $fillable = ['name'];

    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
}
