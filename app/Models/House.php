<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = 'houses';

    protected $fillable = [
		'landlord_id',  'city','address','house_no','description','status', 'rent', 'category' ,'month'
	];
    public function landlord()
    {
        return $this->belongsTo('App\Models\Landlord', 'landlord_id', 'id');
    }
}
