<?php
require_once 'vendor/autoload.php';
use App\classes\Customer;
$queryResult=Customer::getAllCustomerInfo();


?>

<hr/>
<a href="save.php">Add Customer</a>
<a href="view-customer.php">View Customer</a>
<hr/>

<table border="1px" width="700px">
    <tr>
        <th>Customer Id</th>
        <th>Customer Name</th>
        <th>Customer Email</th>
        <th>Customer Mobile</th>
        <th>Customer Date of Birth</th>
    </tr>

    <?php while ($customer=mysqli_fetch_assoc($queryResult)){  ?>
    <tr>
        <td><?php echo $customer['id']?></td>
        <td><?php echo $customer['customer_name']?></td>
        <td><?php echo $customer['email']?></td>
        <td><?php echo $customer['mobile']?></td>
        <td><?php echo $customer['date_of_birth']?></td>

    </tr>
<?php } ?>

</table>

