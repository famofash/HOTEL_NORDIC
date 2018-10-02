<?php
class invoice extends Eloquent
{
    protected $table = "invoice";
    protected $fillable = array('refno','description','amount','payment_method','status','total','payment_date');
}
