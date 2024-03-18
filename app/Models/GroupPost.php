<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GroupPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'vote'
    ];

        /**
     * ______________________________________________________________________________________________________
     * |
     * |Attributes
     * |______________________________________________________________________________________________________
     */
    public function commentCount():Attribute
    {
        return Attribute::get(fn()=>$this->renderCommentCount());
    }

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function book():BelongsTo
    {
        return $this->belongsTo(Book::class);
    }

    public function postComments():HasMany
    {
        return $this->hasMany(GroupPostComment::class);
    }

       /**
     * ______________________________________________________________________________________________________
     * |
     * |Methods
     * |______________________________________________________________________________________________________
     */
    public function renderCommentCount():int
    {
        return $this->postComments()->count();
    }
}
