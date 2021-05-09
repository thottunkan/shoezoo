<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;
    /**
     * Get the user associated with the Register
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function indexLogin(): HasOne
    {
        return $this->hasOne(Login::class);
    }
    /**
     * Get the user associated with the Register
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function indexAddress(): HasOne
    {
        return $this->hasOne(Address::class);
    }
}
