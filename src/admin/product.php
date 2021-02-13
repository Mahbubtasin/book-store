<?php


namespace General\admin;

use General\db;
class product
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = db::connect();
    }

    public function ProductInsert ($data)
    {
        /*echo $_POST['file-location'];
        $_picture = $_FILES['book-photo']['name'];
        echo $_picture;*/
        $bookName = $_POST['book-name'];
        $bookAuthor = $_POST['book-author'];
        $bookTitle = $_POST['book-title'];
        $bookDescription = $_POST['book-description'];
        $bookCategoryName = $_POST['book-category-name'];
        $fileLocation = $_FILES['file-location']['name'];
        $bookPhoto = $_FILES['book-photo']['name'];
        $bookPrice = $_POST['book-price'];
        $bookQuantity = $_POST['book-quantity'];
        $bookDetails = $_POST['book-details'];
        $bookPublishDate = $_POST['book-publish-date'];
        echo $fileLocation;
        echo $bookPhoto;

        //$approot=$_SERVER['DOCUMENT_ROOT'] . '/project/Book-store/';
        $appRootFile ='resource/book-pdf-file/'.$_FILES['file-location']['name'];
        $appRootPhoto ='resource/book-cover-photo/'.$_FILES['book-photo']['name'];

        $query = "SELECT * FROM `book-category` WHERE `book-category-name`= '$bookCategoryName'";

        // prepare statement
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $categories = $stmt->fetchAll();
        foreach ($categories as $category){
            $bookCategoryID = $category['book-category-id'];
        }
        echo "<br>";
        echo $bookCategoryID;
        echo "<br>";
        echo $_FILES['file-location']['type'];
        echo "<br>";
        echo $_FILES['book-photo']['type'];
        echo "<br>";


        if($_FILES['book-photo']['type'] == ('image/jpeg' or 'png/jpg') and $_FILES['file-location']['type']=='application/pdf'){
            echo "Thank you for uploading right file";
            /*file*/
            $target_file = $_FILES["file-location"]["tmp_name"];
            $destination_file = '../../'. $appRootFile ;
            //. photo
            $target_photo = $_FILES["book-photo"]["tmp_name"];
            $destination_photo = '../../'.$appRootPhoto;
            $isFileMoved  = move_uploaded_file($target_file, $destination_file);
            $isPhotoMoved = move_uploaded_file($target_photo , $destination_photo);
            echo $isFileMoved;
            echo  $isPhotoMoved;
            if($isFileMoved and $isPhotoMoved){
                echo "<p>File Moved Successully.</p>";
                $query = "INSERT INTO `all-book` (`book-name`, `book-author`, `book-title`, `book-description`, `book-category-name`, `book-category-id`, `file-location`, `book-cover-photo`, `book-price`, `book-quantity`, `book-details`, `book-publish-date`) VALUES ('$bookName', '$bookAuthor', '$bookTitle', '$bookDescription', '$bookCategoryName','$bookCategoryID', '$appRootFile', '$appRootPhoto', '$bookPrice', '$bookQuantity', '$bookDetails', '$bookPublishDate')";
                // prepare statement
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':book-name' , $bookName);
                $stmt->bindParam(':book-author' ,$bookAuthor);
                $stmt->bindParam(':book-title' ,$bookTitle);
                $stmt->bindParam(':book-description' ,$bookDescription);
                $stmt->bindParam(':book-category-name' ,$bookCategoryName);
                $stmt->bindParam(':book-category-id' ,$bookCategoryID);
                $stmt->bindParam(':file-location' ,$fileLocation);
                $stmt->bindParam(':book-cover-photo' ,$bookPhoto);
                $stmt->bindParam(':book-price' ,$bookPrice);
                $stmt->bindParam(':book-quantity' ,$bookQuantity);
                $stmt->bindParam(':book-details' ,$bookDetails);
                $stmt->bindParam(':book-publish-date' ,$bookPublishDate);
                $result = $stmt->execute();
                return $result;
            }
            else{
                echo "<p>File Moved failed.</p>";
            }
        }
        else{
            echo "You have uploaded wrong file";
        }

    }


    public function ProductCategoryDisplay(){
        // insert command
        $query = "SELECT * FROM `book-category`";
        // prepare statement
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $categories = $stmt->fetchAll();
        return $categories;
    }

    public function DisplayProduct(){
        $query = "SELECT * FROM `all-book`";
        // prepare statement
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }

    public function CatchProduct($productId){
        $query= "SELECT * FROM `all-book` WHERE `book-id`= '$productId'";
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $products = $stmt->fetch();
        return $products;
    }

    public function ThroughProduct($data){


        /*echo $_POST['file-location'];
        $_picture = $_FILES['book-photo']['name'];
        echo $_picture;*/
        $bookId =$_POST['book-id'];
        $bookName = $_POST['book-name'];
        $bookAuthor = $_POST['book-author'];
        $bookTitle = $_POST['book-title'];
        $bookDescription = $_POST['book-description'];
        $bookCategoryName = $_POST['book-category-name'];

        $fileLocation = $_FILES['file-location']['name'];
        $bookPhoto = $_FILES['book-photo']['name'];
        $bookPrice = $_POST['book-price'];
        $bookQuantity = $_POST['book-quantity'];
        $bookDetails = $_POST['book-details'];
        $bookPublishDate = $_POST['book-publish-date'];
        //$approot=$_SERVER['DOCUMENT_ROOT'] . '/project/Book-store/';
        $appRootFile ='resource/book-pdf-file/'.$_FILES['file-location']['name'];
        $appRootPhoto ='resource/book-cover-photo/'.$_FILES['book-photo']['name'];

        $fileLocationHidden=$_POST['file-location-hidden'];
        $bookPhotoHidden =$_POST['book-photo-hidden'];

        $query = "SELECT * FROM `book-category` WHERE `book-category-name`= '$bookCategoryName'";

        // prepare statement
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        $categories = $stmt->fetchAll();
        foreach ($categories as $category){
            $bookCategoryID = $category['book-category-id'];
        }



        if((($_FILES['book-photo']['name'])!=null) && (($_FILES['file-location']['name'])!=null)){
            if($_FILES['book-photo']['type'] == ('image/jpeg' or 'png/jpg') and $_FILES['file-location']['type']=='application/pdf'){
                echo "Thank you for uploading right file";
                /*file*/
                $target_file = $_FILES["file-location"]["tmp_name"];
                $destination_file = '../../'. $appRootFile ;
                //. photo
                $target_photo = $_FILES["book-photo"]["tmp_name"];
                $destination_photo = '../../'.$appRootPhoto;
                $isFileMoved  = move_uploaded_file($target_file, $destination_file);
                $isPhotoMoved = move_uploaded_file($target_photo , $destination_photo);
                $commonFile = $appRootFile;
                $commonPhoto = $appRootPhoto;
                echo 'dhukhse file and photo';

                $query ="UPDATE `all-book` SET `book-name` = '$bookName', `book-author` = '$bookAuthor', `book-title` = '$bookTitle', 
`book-description` = '$bookDescription', `book-category-name` = '$bookCategoryName', `book-category-id` = '$bookCategoryID', 
`file-location` = '$commonFile', `book-cover-photo` = '$commonPhoto', `book-price` = '$bookPrice', `book-quantity` = '$bookQuantity', 
`book-details` = '$bookDetails', `book-publish-date` = '$bookPublishDate' WHERE `all-book`.`book-id` = '$bookId';";
            }
        }






        elseif((($_FILES['book-photo']['name']) != null) && (($_FILES['file-location']['name'])==null)){

            if($_FILES['book-photo']['type'] == ('image/jpeg' or 'png/jpg')) {
                echo "Thank you for uploading right file";
                //. photo
                $target_photo = $_FILES["book-photo"]["tmp_name"];
                $destination_photo = '../../' . $appRootPhoto;
                echo 'dhukhse photo';
                $commonPhoto= $appRootPhoto;
                $commonFile = $fileLocationHidden;


                $isPhotoMoved = move_uploaded_file($target_photo, $destination_photo);
                $query ="UPDATE `all-book` SET `book-name` = '$bookName', `book-author` = '$bookAuthor', `book-title` = '$bookTitle',
 `book-description` = '$bookDescription', `book-category-name` = '$bookCategoryName', `book-category-id` = '$bookCategoryID', 
 `file-location` = '$commonFile', `book-cover-photo` = '$commonPhoto', `book-price` = '$bookPrice', `book-quantity` = '$bookQuantity', 
 `book-details` = '$bookDetails', `book-publish-date` = '$bookPublishDate' WHERE `all-book`.`book-id` = '$bookId';";
                if($query){
                    echo 'kam hoise';
                }
            }
        }

        elseif((($_FILES['file-location']['name'])!=null) && (($_FILES['book-photo']['name'])==null)) {

            if ($_FILES['file-location']['type'] == 'application/pdf') {
                echo "Thank you for uploading right file";
                /*file*/
                $target_file = $_FILES["file-location"]["tmp_name"];
                $destination_file = '../../' . $appRootFile;
                $isFileMoved = move_uploaded_file($target_file, $destination_file);
                echo 'dhukhse file';
                $commonFile= $appRootFile;
                $commonPhoto=$bookPhotoHidden;
                $query ="UPDATE `all-book` SET `book-name` = '$bookName', `book-author` = '$bookAuthor', `book-title` = '$bookTitle',
 `book-description` = '$bookDescription', `book-category-name` = '$bookCategoryName', `book-category-id` = '$bookCategoryID', 
 `file-location` = '$commonFile', `book-cover-photo` = '$commonPhoto', `book-price` = '$bookPrice', `book-quantity` = '$bookQuantity',
  `book-details` = '$bookDetails', `book-publish-date` = '$bookPublishDate' WHERE `all-book`.`book-id` = '$bookId';";
            }
        }
        else{
            $commonPhoto=$bookPhotoHidden;
            $commonFile=$fileLocationHidden;
            $query ="UPDATE `all-book` SET `book-name` = '$bookName', `book-author` = '$bookAuthor', `book-title` = '$bookTitle', 
`book-description` = '$bookDescription', `book-category-name` = '$bookCategoryName', `book-category-id` = '$bookCategoryID', 
`file-location` = '$commonFile', `book-cover-photo` = '$commonPhoto', `book-price` = '$bookPrice', `book-quantity` = '$bookQuantity',
 `book-details` = '$bookDetails', `book-publish-date` = '$bookPublishDate' WHERE `all-book`.`book-id` = '$bookId';";
        }


        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':book-name' , $bookName);
        $stmt->bindParam(':book-author' ,$bookAuthor);
        $stmt->bindParam(':book-title' ,$bookTitle);
        $stmt->bindParam(':book-description' ,$bookDescription);
        $stmt->bindParam(':book-category-name' ,$bookCategoryName);
        $stmt->bindParam(':book-category-id' ,$bookCategoryID);
        $stmt->bindParam(':file-location' ,$commonFile);
        $stmt->bindParam(':book-cover-photo' ,$commonPhoto);
        $stmt->bindParam(':book-price' ,$bookPrice);
        $stmt->bindParam(':book-quantity' ,$bookQuantity);
        $stmt->bindParam(':book-details' ,$bookDetails);
        $stmt->bindParam(':book-publish-date' ,$bookPublishDate);
        $result = $stmt->execute();
        return $result;
    }

    public function ProductDelete($data){
        $query = "DELETE FROM `all-book` WHERE `all-book`.`book-id` = '$data'";
        $stmt = $this->conn->prepare($query);
        //$stmt->bindParam(':title' , $_title);
        $result = $stmt->execute();
        return $result;

    }


}