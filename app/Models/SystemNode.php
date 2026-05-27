<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemNode extends Model
{
    // Laravel asume por defecto el plural (system_nodes), mapeo correcto:
    protected $table = 'system_nodes';
    protected $fillable = ['node_name', 'type', 'current_value', 'status'];
}
