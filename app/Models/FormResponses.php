<?php

namespace App\Models;

use App\Models\User;
use App\Models\Forms;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormResponses extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function form(): BelongsTo {
        return $this->belongsTo(Forms::class);
    }
}
