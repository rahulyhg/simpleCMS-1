<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Article
 *
 * @mixin \Eloquent
 * @property mixed title
 * @property mixed subtitle
 * @property mixed description
 * @property mixed date
 * @property mixed image
 * @property mixed link
 * @property mixed category_id
 */

class Project extends Model
{
    protected $table = 'projects';

    protected $fillable = ['title', 'subtitle', 'description', 'date', 'link'];
}
