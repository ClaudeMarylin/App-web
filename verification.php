
// $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
// $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
// if($username !== "" && $password !== ""){
    
//     $requete="SELECT count(*) FROM utilisateur where User='".$username."'AND Pass='".$password."'";
//     $exec_requete = mysqli_query($db, $requete);
//     $reponse = mysqli_fetch_array($exec_requete);
//     $count = $reponse['count(*)'];
//     if($count != 0) // nom d'utilisateur et mot de passe correcte
//     {
//         $_SESSION['username']= $username ;
//         header('Location :dashboard.php');
//     }
//     else{
//         header('Location :login.php?erreur=1');
//     }
   
        
// }
// else{
//     header('Location :login.php?erreur=2');
// }
// 
// else{
//     header('Location :login.php');
// }
mysqli_close($db); //fermer la connexion
?>