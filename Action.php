<?php



$servername = "localhost";
$username = "root";
$password = "";
try{
  $connexion = new PDO("mysql:host=$servername; dbname=mysql",$username,$password );
  $Base = "CREATE DATABASE IF NOT EXISTS DIGITAL_SPACE";
  $connexion->exec($Base);
  $Base = "use DIGITAL_SPACE";
  $connexion->exec($Base);
  echo "<br>";
  echo "<br>";
  $Base = "CREATE TABLE IF NOT EXISTS MESSAGES(NOM varchar(50), mail varchar(50), messages varchar(500))";
  $connexion->exec($Base);
  echo " <br>";
  if(isset($_POST['Valider'])){
    $nomComplet = $_POST['prenom'];
    $email =$_POST['email'];
    $mdp =$_POST['password'];

    $Base = "INSERT INTO MESSAGES (NOM ,mail,messages) values (:nom ,:mail ,:messages) ";
    $hom = $connexion->prepare($Base);
    $hom->execute([
      'nom'=>$nomComplet,
      'mail'=>$email,
      'messages'=>$mdp
    ]);
    echo "<h1 background-color:'blue'>Mr/Mme.$nomComplet</h1>"."Votre requete à été envoyée avec succès vous serrez repondu dès que l'entreprise <strong><em>Digital Space</em></strong> recoit la notification <br> Merci!!!";
  }

}catch(PDOException $m){
  echo "connection echouée;".$m->getMessage()."<br>";
}
   /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nomComplet = $_POST['prenom'];
      $email =$_POST['email'];
      $mdp =$_POST['password'];

      $infos  = "Bonjour Directeur vous avez recu un nouveu message de la par de l'internaute  <br>";
      $infos .= !empty($nomComplet) ? " Je reponds au nom de  : " . $nomComplet : "";
      $infos .= !empty($email)? "<br> Avec pour   e-mail est :".$email : " ";
      $infos .= !empty($mdp)? "<br> voici mon message de service :".$mdp : " ";
      
      echo $infos;
    } */
    
  ?>