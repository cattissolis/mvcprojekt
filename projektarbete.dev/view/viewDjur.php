<?php
$djur = $this->getAllDjur();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Mitt MVC-projekt</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h1>Här är alla mina djur</h1>


<table>
<thead>
    <tr>
        <th>Namn</th>
        <th>År</th>
        <th>Antal Ben</th>
        <th>Typ</th>

    </tr>
</thead>
<tbody>
<?php foreach ($djur as $djur) { ?>
    <tr>
        <td><?= $djur->getName()?></td>
        <td><?= $djur->getYear()?></td>
        <td><?= $djur->getLegs()?></td>
        <td><?= $djur->getType()?></td>
       <td><a href="\crud\delete.php?delete&id=<?= $djur->getId() ?>">Ta bort</a></td>

    </tr>
</tbody>
</table>
 <?php
} ?>


<!--<form action="djur.php" method="get">
<input type="text" name="id" value="" placeholder="djurnamn"  />
<input type="text" name="name" placeholder="antal ben"/>
<input type="text" name="legs" placeholder="typ av djur"/>
<button type="submit">Lägg till eller uppdatera djur</button>
</form>-->
 
</body>
</html>