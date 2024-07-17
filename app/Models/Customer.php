<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

        /**
     * Get the user that owns the customer.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @see \App\Models\User
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
