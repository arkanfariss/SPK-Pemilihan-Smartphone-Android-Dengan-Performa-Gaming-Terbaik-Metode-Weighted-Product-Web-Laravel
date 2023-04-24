<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasilwp extends Model
{
    use HasFactory;

    public $table = "hasilwp";

    protected $fillable = [
        'data_id',
        'nilaiV',
    ];

    public function data()
    {
        return $this->belongsTo(Data::class);
    }
}
