<?php
  require_once'../modele/MConnexion.class.php';
  require_once'../modele/MRole.class.php';
  class RolesDao{
      public static function listerdonnees(){
        $con=new connexion();
        $cont=$con->executerequete("select * from role");
        $con->closeconnexion();
        return $cont;
      }

      public static function insererdonnees($rol){
        $con=new connexion();
        $con->executeactualisation("insert into role (Role) values('" . $rol->nombre . "')");
        $con->closeconnexion();
      }
      public static function searchbyid($id){
          $con=new connexion();
          $cont=$con->executerequete("select * from role where id=$id");
          $con->closeconnexion();
          return $cont[0];
      }

      public static function editerdonnees($rol){
          $con=new connexion();
          $con->executeactualisation("update role set Role='".$rol->nombre . "' where id=" . $rol->id);
          $con->closeconnexion();

      }
      public static function supprimerbyid($id){
          $con=new connexion();
          $con->executeactualisation("delete from role where id=$id");
          $con->closeconnexion();

      }
  }
?>
