<?php
 namespace Lkeio\Laraparse;

 use Parsedown;

 class Laraparse
 {

   function text($text)
   {
     $Parsedown = new Parsedown();
     return  $Parsedown->text($text);
   }

 }
