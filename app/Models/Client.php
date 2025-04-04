<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Client extends Model
{
    //
    use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['name', 'email', 'phone', 'address'];

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
