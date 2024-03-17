<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GroupPostComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment',
    ];

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Attributes
     * |______________________________________________________________________________________________________
     */

     public function likeCount():Attribute
     {
        return Attribute::get(fn()=>$this->renderLikeCount());
     }

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function groupPost():BelongsTo
    {
        return $this->belongsTo(GroupPost::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function postLikes():BelongsToMany
    {
        return $this->belongsToMany(User::class,'post_comments_likes','group_post_comment_id','user_id');
    }

        /**
     * ______________________________________________________________________________________________________
     * |
     * |Methods
     * |______________________________________________________________________________________________________
     */

    public function renderLikeCount():int
    {
        return $this->postLikes()->count();
    }
}
