<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn= mysqli_connect('localhost','root','','stock','3306');


    if (isset($_POST['enregistrer'])){


        $a="localhost";
        $b="root";
        $c="";
        $d="stock";
        $e="3306";
        $conn= mysqli_connect($a,$b,$c,$d,$e);
    
        $pass=$genre=$frstName=$name = $email='';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $frstName = $_POST['firstname'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
    
        $sql="INSERT INTO `user`(`name`, `frstName`, `email`, `genre`, `pass`) VALUES ('$name','$frstName','$email','$gender','$pass')";
        $result=mysqli_query($conn , $sql );

        echo " <script> alert('Votre enregistrement est réussite')
        window.open('../index.php','options_fenetre');
        </script>";
        
        // if(($result)){
            
        // echo "<script> alert('Success! l'enregistrement est une réussite. '); </script>";
        // exit();
        // }
        // else{
        //     echo mysqli_errno($conn) . ": " . mysqli_error($conn). "\n";
        // }


    } if (isset($_POST['inscrire'])){

        $a="localhost";
        $b="root";
        $c="";
        $d="stock";
        $e="3306";
        $conn= mysqli_connect($a,$b,$c,$d,$e);

        $email='';
        $email = $_POST['email'];
        $sql="INSERT INTO `new`(`email`) VALUES ('$email')";
        $result=mysqli_query($conn , $sql );
        
       echo " <script> alert('Votre enregistrement est réussite')
       window.history.back();
       </script>";
       
    //     if(($result)){
            
    //      echo "<script> alert('Success! l'enregistrement est une réussite. '); </script>";
    //      exit();
    //  }
    //     else{
    //         echo mysqli_errno($conn) . ": " . mysqli_error($conn). "\n";
    //     }


    }
}

?>