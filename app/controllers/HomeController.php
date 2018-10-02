<?php

class HomeController extends BaseController {
    
	public function home()
	{
        
         return View::make('index')->with('rooms',rooms::all());
                
	}
        public function terms() {
            return View::make('terms');
        }
        public function contact()
	{
		return View::make('contact');
	}
        public function rooms()
        { 
            return View::make('rooms');
        }
        
        public function nordicbalcony()
        { $extra = new \custom\extra;
        
            return View::make('rooms.nordic_balcony')->with('roomid',$extra->getroombyname("Nordic Suite Balcony"));
        }
        public function nordicsuites(){
            $extra = new \custom\extra;
            return View::make('rooms.nordic_suite')->with('roomid',$extra->getroombyname("Nordic Suite"));
       
        }
         public function deluxebalcony(){
              $extra = new \custom\extra;
            return View::make('rooms.deluxe_balony')->with('roomid',$extra->getroombyname("Nordic Deluxe Balcony"));
       }
         public function deluxe(){
             $extra = new \custom\extra;
            return View::make('rooms.deluxe')->with('roomid',$extra->getroombyname("Nordic Deluxe "));
           
        }
         public function standard(){
              $extra = new \custom\extra;
            return View::make('rooms.standard')->with('roomid',$extra->getroombyname("Nordic Standard"));
        }
        public function offer() {
            return View::make('offer');
        }
        public function about() {
            return View::make('about');
        }
          public function gallery() {
            return View::make('gallery');
        }
        public function addbooking(){

     $days = 1;
 $diff = abs(strtotime(Input::get('check-out')) - strtotime(Input::get('check-in')));
 $years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$extra = new \custom\extra;
//return $extra->msg('0', date("Y-m-d", strtotime(Input::get('check-in'))));

      if(empty(Input::get('check-in')) || empty(Input::get('check-out'))
              || empty(Input::get('room')) 
        || empty(Input::get('name')) || empty(Input::get('email')))
     {
       
       
         $msg =  'All fields mark with asterisk are important.';
        return ('{"status":0,"txt":"'.$msg.'"}');  
     }
     if( strtotime(Input::get('check-in')) > strtotime(Input::get('check-out')))
     {
         return $extra->msg('0', "Invalid Dates");
     }
     $guest = guest::whereRaw('email = ?',array(Input::get('email')));
      
     if($guest->count() == 0) 
     {
     $guest = guest::create(array('name'=>Input::get('name'),
         'phone_no'=>Input::get('phone'),
         'email'=>Input::get('email')
        
         ));
   
         $guest_id = $guest->id;
     }
     else
     {
         $guest_id = $guest->first()->id;
     }
         if($extra->getavailablerooms(Input::get('room'))== 'not-available'){
             return $extra->msg('0', "The Room you selected is not available");
                 }
           
                
        $booking =     booking::create(
                 array(
                      'name'=>Input::get('name'),
                      'phone_no'=>Input::get('phone'),
                      'email'=>Input::get('email'),
                      'checkin'=>date("Y-m-d", strtotime(Input::get('check-in'))),
                      'checkout'=>date("Y-m-d", strtotime(Input::get('check-out'))),
                      'invoice_id'=>'',
                      'guest_id'=>$guest_id,
                      'roomtype'=>Input::get('room'),
                      'checked_out'=>'0',
                     'checked_in'=> '1',
                     'note'=>Input::get('note'),
                     'created_by'=> Session::get('user_id')
                 ));
            $ref =  "NV".date('Y').$booking->id;
        $invoice = booking::find($booking->id);
        $invoice->refno = $ref;
        $invoice->save();
         $total = $days * $extra->getroominfobyID(Input::get('room'),'price');
         $vat = 0.05 * $total;
          Mail::send('email.invoice', 
 array('name'=>Input::get('name'),
     'invoice_no'=>$ref,
     'address'=>"N/A",
     'email'=>Input::get('email'),
    'phone'=> Input::get('phone'),
    'payment_method'=>'Nill',
    'description'=>$extra->getroominfobyID(Input::get('room'),'name'),
     'ref_no'=>$ref,'days'=>$days,'subtotal'=>$extra->getroominfobyID(Input::get('room'),'price'),
     'total'=>$days * $extra->getroominfobyID(Input::get('room'),'price')), function($message) 
{
    $message->to(Input::get('email'))
    ->subject('Nordic Hospitality Suites Invoice');

});
$msg = "Hello," . Input::get('name') .  date('Y-m-d')."
Thank you for your Booking with Nordic Hospitality Suites. If you have 
any questions about your booking please call us at +2347080266555"  ;  
\custom\extra::sendsms(Input::get('phone'), $msg);
$msg2 = $extra->getroominfobyID(Input::get('room'), 'name')  . " Has been "
        . "booked! from " . date("Y-m-d", strtotime(Input::get('check-in'))) . "- " . date("Y-m-d", strtotime(Input::get('check-out'))) . " by " . Input::get('name');
         \custom\extra::sendsms("07080266555", $msg2); 
          return ('{"status":1,"txt":"Booking information saved successfully! Invoice  has been sent to the email address provided."}');  
     
   
 
        }
}