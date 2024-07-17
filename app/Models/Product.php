<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

        /**
     * Get the user that owns the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * @return \App\Models\User The user that owns the product.
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
        /**
     * Get the invoice details associated with the product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @return \App\Models\InvoiceDetail[]|\Illuminate\Database\Eloquent\Collection The invoice details associated with the product.
     */
    public function invoiceDetails():BelongsToMany
    {
        return $this->belongsToMany(InvoiceDetail::class);
    }
}
