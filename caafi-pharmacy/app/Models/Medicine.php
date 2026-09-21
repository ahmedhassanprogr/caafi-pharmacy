<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'quantity',
        'expiry_date', 

      
    ];

    public function category(): BelongsTo
{
    return $this->belongsTo(Category::class);
}
}
