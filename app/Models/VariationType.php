<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VariationType extends Model
{
    // This is how we can disable the timestamp
    public $timestamps = false;     
    
    // Defines a one-to-many relationship with the VariationTypeOption model
    // This links the current model to multiple options based on the 'variation_type_id' foreign key
    public function options(): HasMany
    {
        return $this->hasMany(VariationTypeOption::class, 'variation_type_id');
    }
}
