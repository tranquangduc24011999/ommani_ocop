<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofInformation extends Model
{
    use HasFactory;

    public function prooffiles()
    {
        return $this->belongsToMany(ProofFile::class);
    }
}
