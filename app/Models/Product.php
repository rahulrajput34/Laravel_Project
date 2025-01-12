<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

// HasMedia is for the images implementation
class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    // Now we have the four resolution for images
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(100);

        $this->addMediaConversion('small')
            ->width(480);

        $this->addMediaConversion('large')
            ->width(1200);
    }
    // Defines a one-to-many inverse relationship with the Department model
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    // Defines a one-to-many inverse relationship with the Category model
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Defines a one-to-many relationship with the VariationType model
    public function variationTypes(): HasMany
    {
        return $this->hasMany(VariationType::class);
    }
}
