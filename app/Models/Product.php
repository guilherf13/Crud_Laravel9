<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'descricao', 'peso'];

    public function unidade()
    {
        return $this->hasOne(Unidade::class, 'unidade_id', 'id');
    }
}
