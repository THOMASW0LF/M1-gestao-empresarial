<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteProduto extends Model
{
    use HasFactory;
    protected $fillable=['nome', 'descricao', 'preco', 'imagem'];
}
