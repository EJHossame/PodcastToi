<?php
include('connexion.php');
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste</title>
	</head>
	<body>
		<h2> <center>Liste Utilisateur </center></h2>
		<table class="table table-bordered" border="1">
		<thead>
		<tr><th>ID</th> <th>pseudo</th><th>Nom</th><th>Prenom</th><th>Admin</th><th>Suprimer</th></tr>  
		<tbody>
			<?php 
				$sql = $bdd->prepare("SELECT * FROM Utilisateur");
				$sql->execute();
				$sql->setFetchMode(PDO::FETCH_OBJ);

				while($res = $sql->fetch() )
				{
					echo '<tr> <td>'.$res->id.'</td>
								<td>'.$res->pseudo.'</td>
								<td>'.$res->u_nom.'</td>
								<td>'.$res->u_prenom.'</td>
								<td><a href="admin.php?id='.$res->id.'">"test"</a></td>
								<td><a href="delete.php?id='.$res->id.'">Suprimer</a></td>
						 </tr>';	
				}
?>
	</tbody>
	</table>
	</body>
</html>