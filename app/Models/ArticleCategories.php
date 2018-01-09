<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategories extends Model
{
    protected $table = "article_categories";

    protected $fillable = ['name'];
}
