<?php
    if(isset($_POST['type'])){
    require_once("connect.php");
    	$DonorId = $_POST['DonorId'];
    	$query="DELETE FROM donor WHERE DonorId = $DonorId";
        $result = $con->query($query);

        if($result){
            echo "<center><h3>Donor Deleted Successfully!</h3><br></center>";
        }
        else{
            echo "<center><h3>No Result Found</h3></center>";
        }
   }
    else
    echo "error";
	?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
        <center>
            <p><a style="text-decoration: none; color: rgb(0, 83, 156);" href="index.html"><h2>Go to Home</h2></a></p>
        </center>
    </body>
    </html>