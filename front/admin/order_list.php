<?php
include_once ('../../config.php');
use General\admin\index;
$index= new index();
$products = $index->OrderList();
?>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Order List</div>
    <div class="card-body">
        <div class="table-responsive" >

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
        <th>Bill-ID</th>
        <th>first name</th>
        <th>Last Name</th>
        <th>username</th>
        <th>email</th>
        <th>address</th>
        <th>2nd address</th>
        <th>Country </th>
        <th>State</th>
        <th>Zip </th>
        <th>Card name</th>
        <th> Total bill</th>
        <th> Action</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>Bill-ID</th>
        <th>first name</th>
        <th>Last Name</th>
        <th>username</th>
        <th>email</th>
        <th>address</th>
        <th>2nd address</th>
        <th>Country </th>
        <th>State</th>
        <th>Zip </th>
        <th>Card name</th>
        <th> Total bill</th>
        <th> Action</th>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($products as $productForOrder){ ?>
        <tr>
            <td><?php echo $productForOrder['bill-id']?></td>
            <td><?php echo $productForOrder['first_name']?></td>
            <td><?php echo $productForOrder['last_name']?></td>
            <td><?php echo $productForOrder['username']?></td>
            <td><?php echo $productForOrder['email']?></td>
            <td><?php echo $productForOrder['address']?></td>
            <td><?php echo $productForOrder['address-2']?></td>
            <td><?php echo $productForOrder['country']?></td>
            <td><?php echo $productForOrder['state']?></td>
            <td><?php echo $productForOrder['zip']?></td>
            <td><?php echo $productForOrder['name_of_card']?></td>
            <td><?php echo $productForOrder['total_bill']?></td>
            <td><a href="update-product.php?id=<?= $product['book-id']?>">Update</a> | <a href="../../process/admin-process/productDelete.php?id=<?=$product['book-id'] ?>">delete</a> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>


