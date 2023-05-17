<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function employeecont()
    {
        return $this->hasMany(Employee::class);
    }
}
