<?php

namespace App\Http\Resources\v2;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);// hiển thị tất cả
        
        // return[
        //     'name_customer' =>$this->name_customer,
        //     'email_customer' =>$this->email_customer
        // ]; // Hiển thị các trường đã khai báo
        
        return[
            'name_customer' =>$this->name_customer.''.$this->phone_customer,
            'phone_customer' => $this->name_customer
        ];
    }
}
