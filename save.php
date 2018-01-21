<?php
require_once 'vendor/autoload.php';
use App\classes\Customer;
$result='';
if (isset($_POST['btn']))
$result=Customer::saveCustomerInfo($_POST);
?>
<hr/>
<a href="save.php">Add Customer</a>
<a href="view-customer.php">View Customer</a>
<hr/>
<h1 style="color: green"><?php echo $result; ?></h1>
<form action="" method="post">
    <html>
    <table>
        <tr>
            <th>Customer Name</th>
            <td><input type="text" name="customer_name"></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <th>Date Of Birth</th>
            <td><input type="date" name="date_of_birth"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
    </html>
</form>


