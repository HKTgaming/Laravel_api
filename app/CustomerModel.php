<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    public $timestamps = false;
    protected $fillabel = [
        'name_customer', 'phone_customer', 'address_customer', 'email_customer', 'city_customer'
    ];
    protected $primaryKey = 'in_customer';
    protected $table = 'customer';
}
