<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Register;
class Login extends Model
{
    use HasFactory;
    
    /**
     * Get the user that owns the address
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function connectToLogin(): BelongsTo
    {
        return $this->belongsTo(Register::class);
    }
}
