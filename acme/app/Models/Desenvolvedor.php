<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $table = 'desenvolvedores';
    use HasFactory;
    public function equipe(){
        return $this->BelongsTo(Equipe::class, 'equipes_id', 'id');
    }
}
