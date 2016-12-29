<?php

/** Dap_emoticon
 * Create By Dion Arya Pamungkas, @DionArya_P
 * v -0.1 Beta
 * 25 Emoticons
 */
class Dap_emot
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
    $text = $this->dislike($text);
    $text = $this->grumpy($text);
    $text = $this->devil($text);
    $text = $this->angel($text);
    $text = $this->upset($text);
    $text = $this->happy($text);
    $text = $this->sad($text);
    $text = $this->tongue($text);
    $text = $this->grin($text);
    $text = $this->wink($text);
    $text = $this->kedip($text);
    $text = $this->glasses($text);
    $text = $this->subglasses($text);
    $text = $this->unsure($text);
    $text = $this->cry($text);
    $text = $this->kiss($text);
    $text = $this->heart($text);
    $text = $this->kiki($text);
    $text = $this->squint($text);
    $text = $this->confused($text);
    $text = $this->yimyam($text); // <----- yimyam spesial emoticon --->
    $text = $this->lips($text);
    $text = $this->robot($text);
    $text = $this->like($text);
    $text = $this->poop($text);

    return $text;
  }

//This is just special for happy emoticon code = :)
  private function happy($text)
  {
    if(preg_match('/:\)/', $text, $match)){
      $expression  = '/:\)/';
      $replacement = '🙂';
      $text = preg_replace($expression, $replacement, $text);
    return $text;
    }else{
  return $text;
  }

  }

// This is only specific to code emoticon sad = :(
  private function sad($text)
  {
    if(preg_match('/:\(/', $text, $match)){
      $expression  = '/:\(/';
      $replacement = '😟';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else{
    return $text;
  }

  }

//The only special for emoticon tongue =: P
  private function tongue($text)
  {
    if(preg_match('/:P/', $text, $match)){
      $expression  = '/:P/';
      $replacement = '😛';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else{
    return $text;
  }

  }

  //The only special for the big smile emoticon =: D
    private function grin($text)
    {
      if(preg_match('/:D/', $text, $match)){
        $expression  = '/:D/';
        $replacement = '😃';
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else{
      return $text;
    }

    }

//This is only for the wink emoticon = :O
    private function wink($text)
    {
      if (preg_match('/:O|:o/', $text, $match)){
        $expression = '/:O|:o/';
        $replacement = "😮";
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else{
        return $text;
      }
    }

//code emotion eye blink;)
    private function kedip($text)
    {
      if (preg_match('/;\)/', $text, $match)){
        $expression = '/;\)/';
        $replacement = "😜";
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else{
        return $text;
      }
    }

//code emotion glasses B)
    private function glasses($text)
    {
      if ( preg_match('/B\)/', $text, $match) ){
        $expression = '/B\)/';
        $replacement = "👓";
        $text  = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }

    //code emoticon subglasses = B|
    private function subglasses($text)
    {
      if (preg_match('/B\|/', $text, $match)){
        $expression = '/B\|/';
        $replacement = "😎";
        $text       = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }


    //code grumpy >:(
    private function grumpy($text)
    {
      if (preg_match('/>:\(/', $text, $match)){
        $expression = "/>:\(/";
        $replacement = '😡';
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }

    //code unsure :\
    private function unsure($text)
    {
      if (preg_match('/:\//', $text, $match)){
        $expression = '/:\//';
        $replacement = '😐';
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }

    //cry :'(
    private function cry($text)
    {
      if (preg_match("/:'\(/", $text, $match)){
        $expression = "/:'\(/";
        $replacement = '😢';
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }

//devil #:)
  private function devil($text)
  {
    if (preg_match("/#:\)/", $text, $match)){
      $expression = "/#:\)/";
      $replacement = '😈';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

//angel O:)
  private function angel($text)
  {
    if (preg_match("/O:\)|o:\)/", $text, $match)){
      $expression = "/O:\)|o:\)/";
      $replacement = '😇';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

//kiss :*
  private function kiss($text)
  {
    if (preg_match("/:\*/", $text, $match)){
      $expression = "/:\*/";
      $replacement = '😘';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

//heart <3
  private function heart($text)
  {
    if (preg_match("/<3/", $text, $match)){
      $expression = "/<3/";
      $replacement = '💓';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

//kiki ^_^
  private function kiki($text)
  {
    if (preg_match('/\^_\^/', $text, $match)){
      $expression = '/\^_\^/';
      $replacement = '😊';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

  //squint -_-
    private function squint($text)
    {
      if (preg_match('/-_-/', $text, $match)){
        $expression = '/-_-/';
        $replacement = '😑';
        $text = preg_replace($expression, $replacement, $text);
        return $text;
      }else {
        return $text;
      }
    }

    //confused o.O
      private function confused($text)
      {
        if (preg_match('/o.O/', $text, $match)){
          $expression = '/o.O/';
          $replacement = '😕';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
        }else {
          return $text;
        }
      }

//upset >:O
      private function upset($text)
      {
        if (preg_match('/\>:O/', $text, $match)){
          $expression = '/\>:O/';
          $replacement = '😣';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
        }else {
          return $text;
        }
      }

      //yimyam :V|:v
      private function yimyam($text)
      {
        if (preg_match('/:V|:v/', $text, $match)){
          $expression = '/:V|:v/';
          $replacement = '<img class="img" aria-hidden="1" height="16" src="https://static.xx.fbcdn.net/images/emoji.php/v6/ee4/1/16/PACMAN_2.png" width="16" alt="yimyam" />';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
      }else {
          return $text;
        }
      }

      //lips :3
      private function lips($text)
      {
        if (preg_match('/:3/', $text, $match)){
          $expression = '/:3/';
          $replacement = '👄';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
        }else {
          return $text;
        }
      }

      //robot :|]
      private function robot($text)
      {
        if (preg_match('/:\|]/', $text, $match)){
          $expression = '/:\|]/';
          $replacement = '👾';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
        }else {
          return $text;
        }
      }

//like (y)
      private function like($text)
      {
        if (preg_match('/\(y\)/', $text, $match)){
          $expression = '/\(y\)/';
          $replacement = '👍';
          $text = preg_replace($expression, $replacement, $text);
          return $text;
        }else {
          return $text;
        }
      }

// dislike (;)
  private function dislike($text)
  {
    if (preg_match('/\(;\)/', $text, $match)){
      $expression = '/\(;\)/';
      $replacement = '👎';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else {
      return $text;
    }
  }

  //tai pop :tai
  private function poop($text)
  {
    if (preg_match('/:tai/', $text, $match)){
      $expression = '/:tai/';
      $replacement = '💩';
      $text = preg_replace($expression, $replacement, $text);
      return $text;
    }else{
      return $text;
    }
  }

}
 ?>
