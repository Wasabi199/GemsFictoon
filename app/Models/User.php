<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserType;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'usertype',
        'biography'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'usertype'=>UserType::class
    ];

            /**
     * ______________________________________________________________________________________________________
     * |
     * |Attributes
     * |______________________________________________________________________________________________________
     */
    public function following():Attribute
    {
        return Attribute::get(fn()=>$this->followingUser()->count());
    }


    public function follower():Attribute
    {
        
        return Attribute::get(fn()=>$this->followerUser()->count());
    }

        /**
     * ______________________________________________________________________________________________________
     * |
     * |Relationships
     * |______________________________________________________________________________________________________
     */
    public function books():HasMany
    {
        return $this->hasMany(Book::class);
    }

     public function nicknames():HasMany
    {
        return $this->hasMany(Nickname::class);
    }

    public function followingUser():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'following_users','user_id','following_id');
    }

    public function followerUser():BelongsToMany
    {
        return $this->belongsToMany(User::class, 'follower_users','user_id','follower_id');
    }

    public function userGroup():BelongsToMany
    {
        return $this->belongsToMany(Group::class,'user_groups','user_id','group_id');
    }
}
