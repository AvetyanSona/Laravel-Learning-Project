<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

//    protected $fillable = ['name', 'email', 'active','company_id'];

    protected $guarded = [];

    protected $attributes =[
        'active' => 1
    ];

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    public function scopeActiveCustomers($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactiveCustomers($query)
    {
        return $query->where('active', 0);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function activeOptions()
    {
        return [
            '1' => 'Active',
            '0' => 'Inactive',
            '2' => 'In-Progress',
        ];
    }
}
