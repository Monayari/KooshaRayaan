<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

protected $table="provinces";
    public function citie()
    {
        return $this->hasMany(Citie::class);
    }

    public function getprovince($id)
    {
$Province=Province::find($id);
return $Province->name;

    }
}
