<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    use HasFactory;
    protected $primaryKey = 'item_code';
    public $incrementing = true;
    protected $fillable = ['item', 'unit_price', 'company_id'];

    public function company() {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    public function sales() {
        return $this->hasMany(Sale::class, 'item_code', 'item_code');
    }
}
