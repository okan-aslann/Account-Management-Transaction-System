<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'account_no', 'title'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function transactions():HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function automaticPayments():HasMany
    {
        return $this->hasMany(AutomaticPayment::class);
    }
}
