<?php

namespace App\Models;

use App\Enums\SupportStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    // campos que podem ser usados no array para gravar na tabela
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];

/*     protected $casts = [
        'status'=> SupportStatus::class,
    ]; */

    public function status(): Attribute
    {
        return Attribute::make(
            set: fn (SupportStatus $status) => $status->name,
        );
    }

}
