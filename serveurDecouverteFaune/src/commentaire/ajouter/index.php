 <?php
 
 include "../../accesseur/CommentaireDAO.php";
 $commentaireDAO = new CommentaireDAO();
 $commentaire = new stdClass();

 /* $commentaire->notecommentaire= $_POST['notecommentaire'];
 $commentaire->urlimagecomm= $_POST['urlimagecomm']; */
 $commentaire->textcom= $_POST['textcom'];
 $commentaire->idetrevivant= $_POST['idetrevivant'];
 $commentaire->latitude = $_POST['latitude'];
$commentaire->longitude = $_POST['longitude'];
 
 $commentaireDAO->ajouterCommentaire($commentaire);
 
 
 
 ?>
