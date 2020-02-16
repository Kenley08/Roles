<!DOCTYPE HTML>
<?php
  require_once'../dao/Roles.dao.php';
  ?>
<html>
    <head>
      <meta charset="utf-8">
      <title>Travay Couche avek exoRole</title>
      <head>
        <body>
          <h1>Roles</h1>
          <h2>lister</h2>


          <table>
              <tr>
              <th>Roles</th>
              <th colspan="2">option</th>
              </tr>
              <?php foreach(RolesDao::listerdonnees() as $row): ?>
                <tr>
                  <td><?php echo $row[1] ?></td>
                <td>
                  <td>
                  <a href="InsererRoles.php">inserer nouveau</a>
                  <a href="Editer.php?id=<?=$row[0]?>">Editer</a>
                  <a href="../controleur/CRoles.php?a=elim&id=<?=$row[0]?>" onclick="return confirm('voulez-vous vraiment annuler ce donnee?')" >Supprimer</a>
                </td>

                </tr>
                  <?php endforeach;?>

          </table>
        </body>

</html>
