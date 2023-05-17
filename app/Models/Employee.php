<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\Contract;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
