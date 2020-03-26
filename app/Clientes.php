<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id', 'nome', 'cpf', 'endereco', 'email'];
    protected $table = 'Clientes';

    public function vendas() {
        return $this->hasMany(Vendas::class, 'cliente_id');
    }
}