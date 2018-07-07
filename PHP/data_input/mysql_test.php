<?php
header("Content-type: text/html; charset=utf-8");

$dsn = 'mysql:host=127.0.0.1;dbname=profile;charset=utf8';
$user = 'root';
$password = 'kuwagata18';

try{
        $dbh = new PDO($dsn, $user, $password);

        $sql = "SELECT * FROM profile where (skill1 like '%".$_POST['skill1']."%'";
        $sql .= "or skill2 like '%" .$_POST['skill1']."%'";
        $sql .= "or skill3 like '%" .$_POST['skill1']."%'";
        $sql .= ") and age < ".$_POST['age'];

        $statement = $dbh -> query($sql);

        $row_count = $statement->rowCount();

        while($row = $statement->fetch()){
                $rows[] = $row;
        }
        /*
 *         foreach ($statement as $row) {
 *                         $rows[] = $row;
 *                                 }
 *                                         */

        //データベース接続切断
	//        $dbh = null;
	//
	//        }catch (PDOException $e){
	//                print('Error:'.$e->getMessage());
	//                        die();
	//                        }
	//
	//                        ?>
	//
