<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class buku extends Model
{
    protected $guarded = [];
    
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    public function penerbit(): BelongsTo
    {
        return $this->belongsTo(penerbit::class);
    }
}
