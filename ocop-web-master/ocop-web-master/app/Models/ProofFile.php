<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofFile extends Model
{
    use HasFactory;

    public function proofinformation()
    {
        return $this->belongsTo(ProofInformation::class);
    }

    public function prooflinks()
    {
        return $this->belongsToMany(ProofLink::class);
    }
}
