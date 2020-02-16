<?php
  require_once'../dao/Roles.dao.php';
  require_once'../modele/MRole.class.php';

       switch ($_GET['a']){
         case 'ins':
          $r=new Role();
          $r->nombre=$_POST['nombre'];
            RolesDao::insererdonnees($r);
           break;

           case'edit':
            $r=new Role();
           $r->id=$_POST['id'];
            $r->nombre=$_POST['nombre'];
            RolesDao::editerdonnees($r);
            break;

            case'elim':
                RolesDao::supprimerbyid($_GET['id']);
                break;
       }

       header("location: ../vue/");



?>
