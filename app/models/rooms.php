<?php
class rooms extends Eloquent 
{
    protected  $table = 'rooms';
    protected $filable = array('name','price','description','no');
}
