<?php

namespace App\Http\Controllers\Api\v2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\CustomerModel;
use App\Http\Resources\v2\CustomerResource;
use App\Http\Resources\v2\CustomerCollection;
class CustomerController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerModel $customer)
    {
        return new CustomerResource($customer);
    }

}
