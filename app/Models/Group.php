<?php

namespace App\Models;

use App\Enums\GroupType;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'introduction'
    ];

    protected $cast = [
        'type'=>GroupType::class
    ];

       /**
     * ______________________________________________________________________________________________________
     * |
     * |Attribute
     * |______________________________________________________________________________________________________
     */
    public function memberCount():Attribute
    {
        return Attribute::get(fn()=>$this->renderMemberCount());
    }

    /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */

    public function userGroup():BelongsToMany
    {
        return $this->belongsToMany(User::class,'user_groups','group_id','user_id');
    }

    public function groupPosts():HasMany
    {
        return $this->hasMany(GroupPost::class);
    }


    
    /**
     * ______________________________________________________________________________________________________
     * |
     * |Scopes
     * |______________________________________________________________________________________________________
     */

    public function scopeOnlyPublic(Builder $query):Builder
    {
        return $query->where('type',GroupType::PUBLIC);
    }

    public function scopeOnlyPrivate(Builder $query):Builder
    {
        return $query->where('type',GroupType::PRIVATE);
    }
    
    
    /**
     * ______________________________________________________________________________________________________
     * |
     * |Methods
     * |______________________________________________________________________________________________________
     */

    public function renderMemberCount():int
    {
        return $this->userGroup()->count();
    }
}
