<?php
class booking extends Eloquent{
    protected $table = 'booking';
    protected $fillable = array('name','email','phone_no','roomtype','checkin', 'checked_out','checked_in', 'checkout','invoice_id','guest_id');
}

