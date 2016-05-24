<?php 
//Conexion a la base de datos 
$conexion=mysql_connect("localhost","root",""); 
mysql_select_db("coltecno",$conexion); 
?> 
<?php 
////Obteniendo registros de la base de datos a traves de una consulta SQL 
$consulta="SELECT Id, Familia, tipo, marca, referencia,nparte,precio,caracteriztica,img FROM colportafolio"; 
$resultado=mysql_query($consulta,$conexion); 


echo "<table>";
echo "<tr>
			<th>ID</th>
			<th>FAMILIA</th>
			<th>TIPO</th>
			<th>MARCA</th>
			<th>REFERENCIAS</th>
			<th>NUMERO DE PARTE</th>
			<th>PRECIO</th>
			<th>CARACTERIZTICA</th>
			<th>IMAGEN</th>";

while($rows=mysql_fetch_array($resultado))
{ 


echo "<tr><td>".$rows["Id"]."</td>"; 

echo "<td>".$rows["Familia"]."</td>"; 

echo "<td>".$rows["tipo"]."</td>";

echo "<td>".$rows["marca"]."</td>";

echo "<td>".$rows["referencia"]."</td>";

echo "<td>".$rows["nparte"]."</td>";

echo "<td>".$rows["Familia"]."</td>";

echo "<td>".$rows["precio"]."</td>";

echo "<td>".$rows["caracteriztica"]."</td>";

echo "<td>".$rows["img"]."</td></tr>";
} 

echo "</table>";
?> 