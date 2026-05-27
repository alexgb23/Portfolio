<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TerminalCommand extends Model
{
    protected $table = 'terminal_commands';
    // Desactivamos los timestamps automáticos si tu tabla solo tiene created_at
    const UPDATED_AT = null;
    protected $fillable = ['command', 'response_status', 'ip_address'];
}
