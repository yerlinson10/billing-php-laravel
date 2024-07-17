<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
        /**
     * Get the user that owns the invoice.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @return \App\Models\User The user that owns the invoice.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

        /**
     * Get the details of the invoice.
     *
     * This function retrieves the details associated with the current invoice.
     * It uses Laravel's Eloquent relationship to fetch the related InvoiceDetail records.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * @return \App\Models\InvoiceDetail[]|\Illuminate\Database\Eloquent\Collection The details of the invoice.
     */
    public function invoiceDetails():HasMany
    {
        return $this->hasMany(InvoiceDetail::class);
    }
}
