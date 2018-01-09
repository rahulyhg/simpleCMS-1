<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @mixin \Eloquent
 * @property mixed title
 * @property mixed subtitle
 * @property mixed preview
 * @property mixed body
 * @property mixed image
 * @property mixed author
 * @property mixed category_id
 */

class Article extends Model
{
    protected $table = "articles";
    protected $fillable = ['title', 'subtitle', 'preview', 'body', 'image', 'author', 'category_id'];
}
