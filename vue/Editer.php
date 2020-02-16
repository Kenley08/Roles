<!DOCTYPE HTML>
<?php
  require_once'../dao/Roles.dao.php';
  $rol=RolesDao::searchbyid($_GET['id']);
?>

<html>
    <head>
      <meta charset="utf-8">
      <title>Editer Roles</title>
      <head>
        <body>
          <h1>Roles</h1>
          <h2>Editer</h2>

        <form action="../controleur/CRoles.php?a=edit" method="post">
          <input type="hidden" name="id" value="<?=$rol[0]?>"/>
            <input type="text" name="nombre" placeholder="Nombre" value="<?=$rol[1]?>" required/>
            <input type="submit" value="Editer"/>
          </form>
        </body>

</html>
