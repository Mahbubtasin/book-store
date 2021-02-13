<?php
//Database connection.
$conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Check connection
if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}




//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
$Name = $_POST['search'];
//Search query.
$Query = "SELECT `book-id`,`book-name`,`book-author`,`book-cover-photo` FROM `all-book` WHERE `book-name` LIKE '%$Name%' LIMIT 5";
//Query execution
$cartStmt = $conn->prepare($Query);
$result=$cartStmt->execute();
$allBook=$cartStmt->fetchAll();
?>
<ul>
    <?php foreach ($allBook as $book)
        /*while ($Result = $allBook) */
    {
        ?>
        <!-- Creating unordered list items.
             Calling javascript function named as "fill" found in "script.js" file.
             By passing fetched result as parameter. -->
        <li onclick='fill("<?php echo $book['book-name']; ?>")' style="height: 30px;">
            <a href="new-product.php?id=<?= $book['book-id'] ?>"><img src="../../resource/all-product-12.jpg"
                                                                      style="height: 40px; width: 50px; margin-left: 10px;margin-top: 3px;">
                <!-- Assigning searched result in "Search box" in "search.php" file. -->
                <span style="margin-left: 9px;
                      font-size: 19px;
                      color: black;"><?php echo $book['book-name']; ?></span><span style="margin-left: 5px;color: red; font-size: 15px;">: <?=$book['book-author'] ?></span></a>

        </li>
        <hr>
        <!-- Below php code is just for closing parenthesis. Don't be confused. -->
        <?php
    }}
    ?>
</ul>
