<?php
include_once ('../../config.php');
use General\admin\index;
$index= new index();
$products = $index->productForOrder();
?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table For Ordered Product</div>
    <div class="card-body">
        <div class="table-responsive" >

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Order-ID</th>
                    <th>Bill-ID</th>
                    <th>Username</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>product ID</th>
                    <th>product name </th>
                    <th>Category ID </th>
                    <th>Category name</th>
                    <th>Book Quantity </th>
                    <th>Total price</th>
                    <th> action </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Order-ID</th>
                    <th>Bill-ID</th>
                    <th>Username</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>product ID</th>
                    <th>product name </th>
                    <th>Category id </th>
                    <th>Category name</th>
                    <th>Book Quantity </th>
                    <th>Total price</th>
                    <th> action </th>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($products as $productForOrder){ ?>
                    <tr>
                        <td><?php echo $productForOrder['order_id']?></td>
                        <td><?php echo $productForOrder['bill_id']?></td>
                        <td><?php echo $productForOrder['username']?></td>
                        <td><?php echo $productForOrder['contact_no']?></td>
                        <td><?php echo $productForOrder['address2']?></td>
                        <td><?php echo $productForOrder['email']?></td>
                        <td><?php echo $productForOrder['product_id']?></td>
                        <td><?php echo $productForOrder['product_name']?></td>
                        <td><?php echo $productForOrder['category_id']?></td>
                        <td><?php echo $productForOrder['category_name']?></td>
                        <td><?php echo $productForOrder['quantity']?></td>
                        <td><?php echo $productForOrder['total-price']?></td>
                        <td><a href="update-product.php?id=">Update</a> | <a href="../../process/admin-process/productDelete.php?id=">delete</a> </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


