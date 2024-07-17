<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class InvoiceDetail extends Model
{
    use HasFactory;
        /**
     * Get the invoice that the detail belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @see \App\Models\Invoice
     *
     * @throws \Exception
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }
        /**
     * Get the products associated with the invoice detail.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     *
     * @see \App\Models\Product
     *
     * @throws \Exception
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
