<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Forms extends Model {
    use HasFactory;

    public function formsresponses(): HasMany
    {
        return $this->hasMany(FormResponses::class);
    }

    /**
    * Get all of the user for the forms
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

}
