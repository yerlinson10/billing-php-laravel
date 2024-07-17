<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'role_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


        /**
     * Get the role associated with the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     *
     * @return \App\Models\Role The role associated with the user.
     */
    public function role():BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

        /**
     * Get the customers associated with the user.
     *
     * This function retrieves all customers that are associated with the current user.
     * It uses Laravel's Eloquent ORM to establish a one-to-many relationship between the User and Customer models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @return \App\Models\Customer[]|\Illuminate\Database\Eloquent\Collection The customers associated with the user.
     */
    public function customers():HasMany
    {
        return $this->hasMany(Customer::class);
    }

        /**
     * Get the categories associated with the user.
     *
     * This function retrieves all categories that are associated with the current user.
     * It uses Laravel's Eloquent ORM to establish a one-to-many relationship between the User and Category models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @return \App\Models\Category[]|\Illuminate\Database\Eloquent\Collection The categories associated with the user.
     */
    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

        /**
     * Get the products associated with the user.
     *
     * This function retrieves all products that are associated with the current user.
     * It uses Laravel's Eloquent ORM to establish a one-to-many relationship between the User and Product models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @return \App\Models\Product[]|\Illuminate\Database\Eloquent\Collection The products associated with the user.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

        /**
     * Get the invoices associated with the user.
     *
     * This function retrieves all invoices that are associated with the current user.
     * It uses Laravel's Eloquent ORM to establish a one-to-many relationship between the User and Invoice models.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @return \App\Models\Invoice[]|\Illuminate\Database\Eloquent\Collection The invoices associated with the user.
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

}
