<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    // Defining the relationship between department and category
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }
}
