<?php

require_once './core/Controller.php';

class CashierPlaceOrderController extends Controller
{
    function __construct()
  {
    require './models/store/CashierPlaceOrderModel.php';
    $this->CashierPlaceOrderModel = new CashierPlaceOrderModel();
  }
  public function renderItemDisplayTable(){
      
  }
  public function placeOrder($customerPhone,$orderItems){
    
    //delete last character
    $orderItems=substr($orderItems,0,-1);

      $itemList = explode(",",$orderItems);
      $itemArray = array();
      foreach($itemList as $item){
        $itemTemp  = explode("=>",$item);
        $itemTemp[0]= str_replace("\x98","",$itemTemp[0]);

        $qtyTemp[1] = $itemTemp[1];
        $itemArray[$itemTemp[0]] = $qtyTemp[1];
      }
      print_r($itemArray);
  }

  public function logout(){
    session_destroy();
    unset($_SESSION['staffId']);
    header("Location: /staff/login",TRUE,302);
  }
}

?>