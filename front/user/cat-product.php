<?php include_once('../../config.php');?>
<?php
/*$cost = new commonClass();
$costTotal = $cost->totalCost('imtiaz');
echo $costTotal;
$_SESSION['totalCost'] = $costTotal;
$v = $_SESSION['totalCost'];
echo $v;
echo "<pre>";

echo '</pre>';*/
$appRoot = '../../';
$x = 0;
use General\user\commonClass;
use General\db;

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bookdb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


$slNo=0;
$id = $_POST['id'];
if(isset($_POST['id'])){
    $id = $_POST['id'];
//    echo $id;
    $getQuery="SELECT * FROM `all-book` WHERE `book-category-id`= '$id'";
    $catProductStmt = $conn->prepare($getQuery);
    $catQueryResult =$catProductStmt->execute();

    $view='';
    while ($catQueryResult = $catProductStmt->fetch(PDO::FETCH_ASSOC) ){
        $allBook[] = $catQueryResult;
    }


}
?>

<?php
if(empty($allBook)){
    echo 'no book found';
}
else {
    foreach ($allBook as $book) {
        ?>
        <div class="col-md-3 block" style="">
            <div class="cart-all"
                 style="height: 280px; border-radius: 3px;    box-shadow: 5px 4px 10px 0px rgb(86, 82, 82); margin-top: 14px;">
                <img src="<?= $appRoot . $book['book-cover-photo'] ?>" class="card-img-top" alt="..."
                     style="height: 170px; position: center; margin-left: 10px; margin-right: 10px;margin-top: 10px; width: 170px; ">
                <div class="cart-in">
                    <span><h5 class="card-title" style="text-align: center;margin-top: 10px"><?= $book['book-title'];
                            $x = $x + 1; ?></h5></span>
                    <span><p class="card-text" style="text-align: center;"><small class="text-muted"
                                                                                  style="margin-top: 10px"><?= $book['book-author'] ?></small></p></span>
                    <div class="book_relative_icon" style="margin-top: 10px;">
                                    <span class="cart_div" style="margin-left: 30px; border: 1px solid;border-radius: 100%;padding:5px;>
                                        <a href=" #" onclick="add_data(<?= $book['book-id'] ?>)" title="add to
                        cart"><img src="<?= $appRoot ?>resource/shopping-cart.svg"> </a>
                        </span>
                        <span class="read-div"
                              style="margin-left: 20px;    border: 1px solid;border-radius: 100%;padding:5px;">
                                        <a href="read-book.php?id=<?= $book['book-id'] ?>" title="read book"><img
                                                src="<?= $appRoot ?>resource/book.svg"></a>
                                    </span>
                        <span class="info-div"
                              style="margin-left: 20px;    border: 1px solid;border-radius: 100%;padding:5px;">
                                        <a href="new-product.php?id=<?= $book['book-id'] ?>" title="book info"><img
                                                src="<?= $appRoot ?>resource/info-alt.svg"></a>
                                    </span>
                    </div>
                </div>
            </div>
        </div>
    <?php }
}?>
