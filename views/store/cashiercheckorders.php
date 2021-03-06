<?php
require_once './controllers/store/CashierCheckOrderController.php';
$CashierCheckOrderController = new CashierCheckOrderController();

/*Check session*/
if (!isset($_SESSION['staffId'])) {
	header('Location: /staff/login');
}
if( isset( $_POST['logout'] ) ){
	$CashierCheckOrderController->logout();
}

$display = null;
$row = null;
if (isset($_POST['search-btn'])) {
	$searchedId = $_POST['search'];
	$display = $CashierCheckOrderController->getOrderDetails($searchedId);
	$row = mysqli_fetch_assoc($display);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Add global styles -->
	<link rel="stylesheet" href="../../css/style.css">
	<!-- local styles -->
	<link rel="stylesheet" href="../../css/cashierCheckOrderStyles.css">
	<title>Check Orders</title>
</head>

<body>
	<div class="navbar" id="popup-background-1">
		<div class="coloumns group">
			<div class="column is-2">
				<img src="../../img/logo.png" height="56" width="224" />
			</div>
			<div class="column is-10 has-text-right nav-logout">
				<i class="fas fa-bicycle" aria-hidden="true"></i>
				<span class="mr-1">User Name</span>
				<form class="d-inline" action="/cashier" method="POST">
					<button class="button is-primary" name="logout">Logout</button>
				</form>
			</div>
		</div>
	</div>
	<button class="button is-primary is-2 mr-1" onclick="returnHome()">Home</button>
	<div class="search-box">
		<form action="/cashier/checkorders" method="POST">
			<div class="holder">
				<div class="columns group searchbox-holder">
					<div class="column is-1 mb-0"></div>
					<div class="column is-10 mb-0">
						<input type="text" class="search-feild" placeholder="" name="search" />
						<button class="search-button" name="search-btn"><i class="fa fa-search zoom"></i></button>
					</div>
					<div class="column is-1 mb-0"></div>
				</div>
				<div class="columns group">
					<div class="column is-12" id="display">
						<table>
							<thead>
								<th>Order ID</th>
								<th>Amount</th>
								<th>Payment Type</th>
								<th>Order Status</th>
								<th>Order Type</th>
								<th>Customer ID</th>
							</thead>
							<tbody>
								<tr>
									<td> <?php echo $row['orderId']  ?></td>
									<td> <?php echo $row['amount']  ?></td>
									<td> <?php echo $row['paymentType']  ?></td>
									<td> <?php echo $row['orderStatus']  ?></td>
									<td> <?php echo $row['orderType']  ?></td>
									<td> <?php echo $row['customerId']  ?></td>
								</tr>

							</tbody>
						</table>

					</div>
				</div>
			</div>
		</form>

	</div>
	<script>
		function returnHome() {
			window.location.href = '/cashier';
		}
	</script>
</body>

</html>