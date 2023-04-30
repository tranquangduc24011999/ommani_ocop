<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofLink extends Model
{
    use HasFactory;

    public function prooffile()
    {
        return $this->belongsTo(ProofFile::class);
    }
}
