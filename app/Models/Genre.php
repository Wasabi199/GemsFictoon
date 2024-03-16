<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
    ];

    
     /**
    * ______________________________________________________________________________________________________
    * |
    * |Relationships
    * |______________________________________________________________________________________________________
    */
    public function book():HasMany
    {
        return $this->hasMany(Book::class);
    }
}
