<?php

/** Stef-Emoticon
 * Create By Stefanus Prasetyo Nugroho
 */
$expression =  
array(
    "happy" => array(":)","*happy*"),
    "eyeblink" => array(";)","*eyeblink*"),
    "bigsmile" => array(":D","*bigsmile*"),
    "laugh1" => array('=-D','*laugh1*'),
    "laugh2" => array('=-)','*laugh2'),
    "bighug" => array('({})','*bighug*'),
    "dance" =>  array("\=D/","*dance*"),
    "party" => array("<=-P","*party*"),
    "roftl" =>  array("=))","*roftl*"),
);

$replacement = 
array(
  "01" =>'<img src="images/BBM-Emoticon-001.png" style="width:50px;">',
  "02" =>'<img src="images/BBM-Emoticon-002.png" style="width:50px;">', 
  "03" =>'<img src="images/BBM-Emoticon-003.png" style="width:50px;">',
  "04" =>'<img src="images/BBM-Emoticon-004.png" style="width:50px;">',
  "05" =>'<img src="images/BBM-Emoticon-005.png" style="width:50px">',
  "06" =>'<img src="images/BBM-Emoticon-006.png" style="width:50px">',
  "07" =>'<img src="images/BBM-Emoticon-008.png" style="width:50px">',
  "08" =>'<img src="images/BBM-Emoticon-009.png" style="width:50px">',
  "09" =>'<img src="images/BBM-Emoticon-016.png" style="width:50px">',
);

class Stef_Emot
{

// Main function, the text will be entered here
  public function emot($text){
    $text = $this->scanning($text);
    return $text;
  }

/*Scanning function detects,
* Whether there is a code in the text emoticons.
*/
  private function scanning($text)
  {
    $text = $this->happy($text);
    $text = $this->eyeblink($text);
    $text = $this->bigsmile($text);
    $text = $this->laugh1($text);
    $text = $this->laugh2($text);
    $text = $this->bighug($text);
    $text = $this->dance($text);
    $text = $this->party($text);
    $text = $this->roftl($text);
    return $text;
  }

//This is just special for happy emoticon code = :)
  private function happy($text)
  {
    
       $expression = array(":)","*happy*");
       $replacement = '<img src="/miniframework/public/assets/BBM-Emoticon-001.png" style="width:50px;">';
      $text = str_replace($expression, $replacement, $text);
 
  return $text;
  
  }

//This is just special for eye blink emoticon code = ;)
  private function eyeblink($text)
  {
       $expression = array(";)","*eyeblink*");
        $replacement = '<img src="/miniframework/public/assets/BBM-Emoticon-002.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);
 
        return $text;
      
  }

  //This is just special for big smile emoticon code = :D
  private function bigsmile($text)
  {
       $expression = array(":D","*bigsmile*");
       $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-003.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);
        return $text;
    
  }
  //This is just special for laugh1 emoticon code  =)
  private function laugh1($text)
  {
       $expression = array('=-D','*laugh1*');
       $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-004.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);

        return $text;
  
  }

  // This is just special for laugh2 emoticon code =-)
  private function laugh2($text)
  {
       $expression = array('=-)','*laugh2');
       $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-005.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);
    return $text;
  }

  //This is just special for big hug emoticon code ({})

  private function bighug($text)
  {
     $expression = array('({})','*bighug*');
      $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-006.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);

    return $text;
  }

  // This is just special for dance emoticon code \=D/
  private function dance($text)
  {
     $expression =array("\=D/","*dance*");
      $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-007.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);

    return $text;
  }
  // This is just special for party emoticon code <=-P and *party*
  private function party($text)
  {
      $expression = array("<=-P","*party*");
      $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-008.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);

    return $text;
  }

  //This is just special for roftl emoticon code  =)
  private function roftl($text)
  {
       $expression = array("=))","*roftl*");
      $replacement ='<img src="/miniframework/public/assets/BBM-Emoticon-016.png" style="width:50px;">';
       $text = str_replace($expression, $replacement, $text);

    return $text;
  
  }
}

//$emot = new Stef_Emot();
//echo $emot->emot("*happy* *eyeblink* *bigsmile* *laugh1* *laugh2* *bighug* *dance* *party* *roftl*");
?>
