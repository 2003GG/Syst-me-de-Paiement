<?php 
include_once __DIR__ . "/../database/dataconect.php";
class paypal extends Paiement{
    private $email;
    private $password;
    public function __construct( $email, $password ){
        parent::__construct();
        $this->email = $email;
        $this->password = $password;
    }
    public function setpaypal(){
        $db=new database();
        $conn=$db->getconection();
        $sql= "INSERT INTO paypal(email,pass_word) VALUES(:email,:pass_word)";
        $result=$conn->prepare($sql);
        $result->bindparam(":email",$this->email);
        $result->bindparam(":pass_word",$this->password);
        $result->execute();
    }
}
$email=readline("Email :");
$password=readline("password : ");
$py=new paypal($email,$password);
$py->setpaypal();


?>