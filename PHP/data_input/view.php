<?php
session_start();
?>

<html>
<head>
<title>PHPTEST</title>
</head>

<body>
<?php
session_start();
?>

<?php
//print 'id:';
//print $_SESSION["id"].'<br>';
print 'firstname:';
print $_SESSION["firstname"].'<br>';
print 'lastname:';
print $_SESSION["lastname"].'<br>';
print 'email:';
print $_SESSION["email"].'<br>';

interface Show{
public function showData();
}

class User {
  private $id;
  private $firstname;
  private $lastname;
  private $email;

  public function getId(){
    return $this->id;
  }
  public function setId(int$id){
    $this->id = $id;
  }
  public function getFirstname(){
    return $this->firstname;
  }
  public function setFirstname($firstname){
    $this->firstname = $firstname;
  }
  public function getLastname(){
    return $this->lastname;
  }
  public function setLastname($lastname){
    $this->lastname = $lastname;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;
  }
}


?>
<pre>
<hr>
<?php
$db_user = "root";
$db_pass = "kuwagata18";
$db_host = "localhost";
$db_name = "practice";
$db_type = "mysql";

$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

try{
 $pdo = new PDO($dsn, $db_user,$db_pass);
	  print "接続しました。...<br>";
	 }catch(PDOException $Exception){
 die('エラー:'. $Exception->getMessage());
}


print_r($ar);
print_r($_SESSION);
$newuser = new User();
//$newuser->setId(1);
//print $newuser->getId().'<br>';
$newuser->setFirstname($_SESSION["firstname"]);
print $newuser->getFirstname().'<br>';
$newuser->setLastname($_SESSION["lastname"]);
print $newuser->getLastname().'<br>';
$newuser->setEmail($_SESSION["email"]);
print $newuser->getEmail().'<br>';


try{
  $pdo->beginTransaction();
  $sql = "insert into member2 (firstname, lastname,
         email) values (:last_name, :first_name, :email)";

  $stmh = $pdo->prepare($sql);

  $stmh->bindValue(':first_name', $newuser->getFirstname());
  $stmh->bindValue(':last_name', $newuser->getLastname());
  $stmh->bindValue(':email', $newuser->getEmail());
  $stmh->execute();
  $pdo->commit();
  print 'データを'. $stmh->rowCount(). "件、挿入しました。<br>";
}catch(PDOException $Exception){
  $pdo->rollBack();
  print "エラー:". $Exception->getMessage();
}

var_dump($_SESSION);
?>

</body>

</html>
