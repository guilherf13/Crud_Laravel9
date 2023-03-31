<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $fillable = ['unidade', 'descricao'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'unidade_id', 'id');
    }
}
