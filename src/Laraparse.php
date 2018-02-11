<?php
 namespace Lkeio\Laraparse;

 use Parsedown;

 class Laraparse
 {
   public function text($text)
   {
     $Parsedown = new Parsedown();
     return $Parsedown->text($text);
   }

 }
