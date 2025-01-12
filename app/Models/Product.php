<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    // relationship
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    // relationship
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
