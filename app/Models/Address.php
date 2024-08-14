<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $fillable = ['no_telpon','alamat','detail_lain'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
