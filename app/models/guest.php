<?php

class guest extends Eloquent
{
protected $table = "guest";
protected  $fillable  = array('name','phone_no','address','name','phone_no',
'address','state','occupation', 'company_name','company_address','company_phone_no',
'email','nationality','passport_no','visa_permit_no');
     
}