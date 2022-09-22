<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerModel;
use App\Http\Resources\CustomerResoure;
use App\Http\Resources\CustomerCollection;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Hiển thị tất cả 
        // return CustomerModel::all();
        // return CustomerResoure::collection(CustomerModel::paginate());
        return new CustomerCollection(CustomerModel::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate(
            [
                'name_customer' => 'required',
                'phone_customer' => 'required',
                'address_customer' => 'required',
                'email_customer' => 'required',
                'city_customer' => 'required'
            ]
        );
        $customer = CustomerModel::create($request->all());

        return new CustomerResoure($customer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerModel $customer)
    {
        return new CustomerResoure($customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,CustomerModel $customer)
    {
        $customer -> update($request->all());

        return new CustomerResoure($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerModel $customer)
    {
        //xóa người dùng
        $customer->delete();
    }
}
