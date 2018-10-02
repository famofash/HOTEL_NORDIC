<?php

namespace custom;

class extra 

{

public static function strip($strg, $del)

{ 

  $i = 0;$out ='';

   $data = explode($del, $strg);

     if($data ==''){$out =  "Nill";}

   else{

   foreach ($data as $value)

   { 

      

    $i++;

    $out .=  "\t($i) ".ucwords($value)." <br/>";

      

   }

   }

   return $out;

}

public static function msg($status,$txt)

 {

return '{"status":'.$status.',"txt":"'.$txt.'"}';

}



public static  function getData($string)

{ 

     if($string == '0')

    {

        $string = 'False';

    }

    if(empty($string))

    {

        $string = "Nill";

    }

   

    elseif ($string == '1') {

    $string = 'True';

}

    return $string;

}

public static function getUser($user_id)

{

  if($user_id !=="")

  { $user = \Illuminate\Support\Facades\DB::table('users')->where('user_id','=',$user_id)->first();

    return $user->surname . " " . $user->first_name;

  }

  else

  {

      return "";

  }

}



 public static function showLibraryAlphabeths()

 {

     $str = "";

 $alphabeths = array('A','B', 'C','D' ,'E', 'F', 'G', 'H','I', 'J', 'K' ,'L',

     'M', 'N', 'O', 'P' ,'Q', 'R' ,'S' ,'T' ,'U' ,'V', 'W','X','Y','Z');

 $i = 0; 

 for($i=0; $i < count($alphabeths); $i++)

 {

    $check = \Open_library_libraries::where('name_of_library','LIKE', $alphabeths[$i].'%');

    if($check->count() == 0)

    {

        $str .= '<a id ='.$alphabeths[$i].' class="libraryalphabeth ln-disabled" href='.url('/library/').'>'.$alphabeths[$i].'</a>';

    }

    else

    {

        $str.= '<a  id='.$alphabeths[$i].' class="libraryalphabeth" href='.url('/library/').'>'.$alphabeths[$i].'</a>';

    }

  

  

 }

 

 return $str;

 }

 public static function showauthorAlphabeths()

 {

     $str = "";

 $alphabeths = array('A','B', 'C','D' ,'E', 'F', 'G', 'H','I', 'J', 'K' ,'L',

     'M', 'N', 'O', 'P' ,'Q', 'R' ,'S' ,'T' ,'U' ,'V', 'W','X','Y','Z');

 $i = 0; 

 for($i=0; $i < count($alphabeths); $i++)

 {

    $check = \open_library_author::where('author_name','LIKE', $alphabeths[$i].'%');

    if($check->count() == 0)

    {

        $str .= '<a id ='.$alphabeths[$i].' class="authoralphabeth ln-disabled" href='.url('/author/').'>'.$alphabeths[$i].'</a>';

    }

    else

    {

        $str.= '<a  id='.$alphabeths[$i].' class="authoralphabeth" href='.url('/author/').'>'.$alphabeths[$i].'</a>';

    }

  

  

 }

 

 return $str;

 }



 public   function getnoofrooms($id)

 {

    $no = 0;

    $no =   \rooms::where('id',$id)->first(); 

    return $no->no;

    

 }

 public static function  getroominfobyID($id, $column)

 {

      $no = 0;

    $no =   \rooms::where('id',$id)->first(); 

    return $no->$column;

 }



 public static function  getavailablerooms($room)

 {

     $no =  \rooms::where('id',$room)->first()->no; 

     $booked = \booking::whereRaw('checked_in = ? and checked_out = ? and roomtype = ?',

             array('1','0',$room))->count();

     if($no - $booked > 0) {

         return "available";

     }else { return "not-available";}

 }

 public static function  getguestinfo($guest_id, $column)

 {

     $guest = \guest::where('id',$guest_id)->first();

     if(!empty($guest->$column)) {

         return $guest->$column ;

     }

     else {

         return "N/A";

     }

 }
public static function  getroombyname($name) {
}
 public static function  sendsms($phone,$msg)
 {
     $owneremail="famofash@gmail.com"; $subacct="NordicSuite";  $subacctpwd="quickplay";  $sendto=$phone;  
     /* destination number */  $sender="NordicSuite"; 
     /* sender id */  $message=$msg;  /* message to be sent */   
/* create the required URL */   
$url = "http://www.smslive247.com/http/index.aspx?"  . "cmd=sendquickmsg"  . "&owneremail=" . UrlEncode($owneremail)  . "&subacct=" . UrlEncode($subacct)  . "&subacctpwd=" . UrlEncode($subacctpwd)  . "&message=" . UrlEncode($msg). "&sendto=" . UrlEncode($phone);   
/* call the URL */   
if ($f = @fopen($url, "r"))  
        { $answer = fgets($f, 255); if (substr($answer, 0, 1) == "+") 
        {  }  
        else  {    }  } 
        else  {  }   
 }

}

