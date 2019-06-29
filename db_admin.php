<?php include "includes/db.php"; ?>
<?php 
                            if(isset($_POST["admin_login"])){
                            $username = $_POST["username"];
                            $password = $_POST["password"];

                            $username = mysqli_real_escape_string($connection, $username);
                            $password = mysqli_real_escape_string($connection, $password);

                            $query = "SELECT * FROM admin where username='{$username}'";
                            $select_admin= mysqli_query($connection, $query);
                            if(!$select_admin){
                                die("ERROR".mysqli_error($connection));
                            }
                            while($row = mysqli_fetch_array($select_admin)){
                                $db_username = $row["username"];
                                $db_password = $row["password"];
                            }
                            if($db_username!==$username || $db_password !== $password){

                                header("Location: users/admin_login.php?admin=error");

                            }else if($db_username == $username && $db_password == $password){
                                $_SESSION['username']=$username;
                                $_SESSION['password']=$password;
                                header("Location: admin/index.php");
                            }else{
                                header("Location: users/admin_login.php?admin=error");
                            }

                            }


                            ?>