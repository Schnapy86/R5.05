<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvitationCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user_owner',
        'code',
        'id_user_receiver',
    ];

    /**
     * 
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id_user_owner');
    }
}
