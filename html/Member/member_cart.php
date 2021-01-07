<?php
session_start();
include_once '../../includes/dbh.inc.php';
$_SESSION["currentorderID"];

if (isset($_POST["add_to_cart"])) //receive add to cart from form

{
    if (isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");

        if (!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);

            $_SESSION["num_items"] = $count;
            $pid = $_GET["id"];
            $pq = $_POST["quantity"];

            $sql = "SELECT OrderID FROM Orders";
            $result = mysqli_query($conn, $sql);
            $maxID;

            if (mysqli_num_rows($result) > 0)
            {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result))
                {
                    if ($row['OrderID'] > $maxID)
                    {
                        $maxID = $row['OrderID'];
                    }
                }

            }
            $maxID++;
	$_SESSION["currentorderID"] = $maxID;
//	echo $_SESSION["currentorderID"];
            $sql1 = 'INSERT INTO Orders (OrderID, CustomerID, OrderDate) VALUES(?,?,?)';
            $stmt1 = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt1, $sql1))
            {
                header("Location: ../html/signup.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt1, "sss", $maxID, $_SESSION['CID'], date("Y-m-d"));
                mysqli_stmt_execute($stmt1);
            }

            $sql = 'INSERT INTO OrderLine (OrderID, ProductID, OrderQuantity) VALUES(?,?,?)';
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: ../html/signup.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "sss", $maxID, $pid, $pq);
                mysqli_stmt_execute($stmt);
            }

            $item_array = array(
                'item_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;

        }
        else
        {
            echo '<script>alert("Item Already Added")</script>';
        }
    }
    else
    {
        $item_array = array(
            'item_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if (isset($_GET["action"]))
{
    if ($_GET["action"] == "delete")
    {
        foreach ($_SESSION["shopping_cart"] as $keys => $values)
        {
            if ($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);

                echo '<script>alert("Item Removed")</script>';
                $sql = "DELETE FROM OrderLine WHERE ProductID = ?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../html/signup.php?error=sqlerror");
                    exit();
                }
                else
                {
                    mysqli_stmt_bind_param($stmt, "s", $values["item_id"]);
                    mysqli_stmt_execute($stmt);
                }

                echo '<script>window.location="member_cart.php"</script>';
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bazaar Ceramic: Shopping cart</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			<h3 align="center">Shopping cart: <?php if(isset($_SESSION['userUid'])){echo "Welcome back ".$_SESSION['userUid'];}else{ echo "Please log in to place order";} ?></h3><br />
			<br />
      <h4 align="center"><a href="member.php">Members page</a></h4>

      <br />

			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
if (!empty($_SESSION["shopping_cart"]))
{
    $total = 0;
    foreach ($_SESSION["shopping_cart"] as $keys => $values)
    {

?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
						<td><a href="member_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span id="remove"class="text-danger">Remove</span></a></td>
					</tr>
					<?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
}
?>
				</table>
			</div>

      <?php if(count($_SESSION["shopping_cart"])>=1){
        echo   	'<h3>Your Order Summary</h3>

      			<div class="table-responsive">
      				<table class="table table-bordered">
      					<tr>
      						<th width="40%">Order number</th>
      						<th width="10%">Date</th>
      						<th width="20%">Customer Name</th>
      						<th width="15%">Items ordered</th>
      							<th width="15%">Total price</th>
      						<th width="5%">Action</th>
      					</tr>
      			<tr>';

      }?>
				<td><?php if(count($_SESSION["shopping_cart"])>=1){echo $_SESSION["currentorderID"];} ?></td>
				<td><?php if(count($_SESSION["shopping_cart"])>=1){echo date("Y-m-d");} ?></td>
				<td><?php if(count($_SESSION["shopping_cart"])>=1){echo $_SESSION["userUid"];} ?></td>
				<td> <?php if(count($_SESSION["shopping_cart"])>=1){ echo count($_SESSION["shopping_cart"]); }?></td>
					<td><?php if(count($_SESSION["shopping_cart"])>=1){echo '$'.number_format($total, 2);} ?></td>

				<td> <?php if(count($_SESSION["shopping_cart"])>=1 &&$_SESSION["userUid"] ){ echo '<a href=""><span class="text-danger">Pay</span></a>';}?></td>
			</tr>
		</table>

		</div>

	<br />
	</body>
</html>
