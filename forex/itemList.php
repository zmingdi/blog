<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$itemList = ["USDEUR", "AUDUSD", "NZDUSD","USDJPY", "USDCAD", "GBPUSD", "USDCHF" ];


function itemSelection() {
  global $itemList;
  
  foreach (   $itemList as $item ) {
    echo "<tr name='$item'>";
      echo "<td class='item_name'>$item</td>";
      echo "<td><select class='direction'><option value=0>Sell</option><option value=1>Buy</option></select></td>";
      echo "<td><input type=text name='entry' place_holder='Entry price' class='entry'></text></td>";
      echo "<td><input type=text name='sl' place_holder='stop loss' class='sl'></text></td>";
      echo "<td><input type=text name='tp1' place_holder='target profit 1' class='tp1'></text></td>";
      echo "<td><input type=text name='tp2' place_holder='target profit 2' class='tp2'></text></td>";
      echo "<td><select class='term'><option value=0>Short term</option><option value=1>Long term</option></select></td>";
    echo "</tr>";
  }
 
}
function tradeDirection(){
  
}


?>