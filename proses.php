<?php  

 $host = "localhost";  
 $server = "localhost";
$username = "root";
$password = "";
$database = "k4859471_";
 try  
 {  
      $connect = new PDO("mysql:host=$host;dbname=$database",$username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["jawaban"]))  
      {  
           $query = "INSERT INTO quesptsp(jawaban) VALUES (:jawaban)";  
           $statement = $connect->prepare($query);  
           $statement->execute(  
                array(  
                     'jawaban'     =>     $_POST["jawaban"]  
                )  
           );  
           $count = $statement->rowCount();  
           if($count > 0)  
           {  
                echo "<h1>Berhasil Memasukan Data Survey!</h1>";  
           }  
           else  
           {  
                echo 'tidak ada yang di masukan';  
           }  
      } 

 }  
 catch(PDOException $error)  
 {  
      echo $error->getMessage();  
 }  
 ?>