<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
   use HasFactory;

   protected $fillable = [
      'user_id',
      'title',
      'summary',
      'genre_id',
      'category_id',
      'image'
   ];


   /**
    * ______________________________________________________________________________________________________
    * |
    * |Relationships
    * |______________________________________________________________________________________________________
    */

   public function user(): BelongsTo
   {
      return $this->belongsTo(User::class);
   }

   public function bookChapters(): HasMany
   {
      return $this->hasMany(BookChapter::class);
   }

   public function bookComments(): HasMany
   {
      return $this->hasMany(BookComment::class);
   }

   public function bookCategories(): BelongsToMany
   {
      return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
   }

   public function bookLikes(): BelongsToMany
   {
      return $this->belongsToMany(User::class, 'book_likes', 'book_id', 'user_id');
   }

   public function category(): BelongsTo
   {
      return $this->belongsTo(Category::class);
   }

   public function genre(): BelongsTo
   {
      return $this->belongsTo(Genre::class);
   }
   /**
    * ______________________________________________________________________________________________________
    * |
    * |Attributes
    * |______________________________________________________________________________________________________
    */
    public function categoryTitle():Attribute
    {
      return Attribute::get(fn()=>$this->renderCategory());
    }

    public function genreTitle():Attribute
    {
      return Attribute::get(fn()=>$this->renderGenre());
    }

   /**
    * ______________________________________________________________________________________________________
    * |
    * |Methods
    * |______________________________________________________________________________________________________
    */

   public function renderCategory(): string
   {
      return $this->category?->title ?? '--';
   }

   public function renderGenre(): string
   {
      return $this->genre?->title ?? '--';
   }
}
