<?php

class Elements
{
  protected function headerTable($info){
    return "<th class='border border-white text-center'>$info</th>";
  }
  protected function colTable($info){
    return "<td class='text-center border'>".$info[0] * $info[1]."</td>";
  }
}