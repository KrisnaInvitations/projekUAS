<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PageComments extends Model
{
    use HasFactory;
    protected $fillable = [
        'page_id',
        'comment',
    ];

    public function pagee(): BelongsTo
    {
        return $this->belongsTo(Page::class, 'id');
    }
}
