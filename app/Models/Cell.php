<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;
    protected $fillable = ['model', 'qty'];
    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
