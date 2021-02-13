<?php
session_start();
try {
    $conn = new PDO("mysql:host=localhost;dbname=bookdb", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
//
// pick message logs
//
$query ="SELECT * FROM `message_logs`";
$Stmt = $conn->prepare($query);
//$stmt->bindParam(':title' , $_title);
$result = $Stmt->execute();
$message =$Stmt->fetchAll();
?>
    <div class="card mb-3">
    <div class="card-header">
        Message logs</div>
    <div class="card-body">
        <div class="table-responsive" >
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                    <?php foreach ($message as $m){?>
                        <tr>
                            <td><?php echo $m['username']?></td>
                            <td><a  class="btn btn-danger" onclick="message_read(<?= $m['user_key']?>)">Read</a></td>
                        </tr>
                        <tr>
                            <td >
                                <div id="message" style="display: none">
                                    <form name="form1">
                                        <div class="contact_form_text" id="chatlogs" style="width:500px;height: 200px;overflow-x: hidden;border: 3px solid darkgoldenrod">
                                        </div>
                                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                                            <textarea id="msg" class="text_field contact_form_message" name="msg" rows="4" placeholder="Message"  style="height: 100px; width: 300px;"></textarea>
                                            <p id="empty_field"></p>
                                        </div>
                                        <div class="contact_form_button">
                                            <input type="hidden" name="uname" value="<?=$m['username']?>" >
                                            <input type="hidden" name="userkey" value="<?=$m['user_key'] ?>">

                                            <a  class="btn-primary contact_submit_button" onclick="submitChat()">Send</a>
                                        </div>
                                    </form>
                                </diV>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
