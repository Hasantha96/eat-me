<?php

//import the views

//Common
$homepage = 'index.html';
$errorPage = '404.html';

//Admin
$adminLogin = 'routes/admin/adminlogin.php';
$adminDashboard = 'routes/admin/dashboard.php';

//Customer
$dineinLogin = 'routes/customer/dineinlogin.php';
$dineinSignup = 'routes/customer/dineinsignup.php';
$dinein = 'routes/customer/dinein.php';
$onlineOrderLogin = 'routes/customer/onlineorderlogin.php';
$onlineOrderSignup = 'routes/customer/onlineordersignup.php';
$onlineOrder = 'routes/customer/onlineorder.php';

//Store
$cashierLogin = 'routes/store/cashierlogin.php';
$cashier = 'routes/store/cashier.php';
$deliveryPersonLogin = 'routes/store/deliverypersonlogin.php';
$deliveryPerson = 'routes/store/deliveryperson.php';
$inventory = 'routes/store/inventory.php';
$kitchendisplay = 'routes/store/kitchendisplay.php';
$kitchenManagerLogin = 'routes/store/kitchenmanagerlogin.php';
$kitchenManager = 'routes/store/kitchenmanager.php';
$stewardLogin = 'routes/store/stewardlogin.php';
$steward = 'routes/store/steward.php';


//Get the incoming request
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require($homepage);
        break;
    case '' :
        require($homepage);
        break;
    case '/admin/login' :
        require($adminLogin);
        break;
    case '/admin' :
        require($adminDashboard);
        break;
    case '/dinein/login' :
        require($dineinLogin);
        break;
    case '/dinein/signup' :
        require($dineinSignup);
        break;
    case '/dinein' :
        require($dinein);
        break;
    case '/online/login' :
        require($onlineOrderLogin);
        break;
    case '/online/signup' :
        require($onlineOrderSignup);
        break;
    case '/online' :
        require($onlineOrder);
        break;
    case '/cashier/login' :
        require($onlineOrderSignup);
        break;
    case '/cashier' :
        require($onlineOrder);
        break;
    case '/deliveryperson/login' :
        require($deliveryPersonLogin);
        break;
    case '/deliveryperson' :
        require($deliveryPerson);
        break;
    case '/inventory' :
        require($inventory);
        break;
    case '/kitchendisplay' :
        require($kitchendisplay);
        break;
    case '/kitchenmanager/login' :
        require($kitchenManagerLogin);
        break;
    case '/kitchenmanager' :
        require($kitchenManager);
        break;
    case '/steward/login' :
        require($stewardLogin);
        break;
    case '/steward' :
        require($steward);
        break;
    default:
        http_response_code(404);
        require($errorPage);
        break;
}



?>