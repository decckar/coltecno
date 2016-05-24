<!DOCTYPE HTML>
<html>
<head>
<title>Cátálogo de Productos Login</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<style type="text/css">
	
th {
     border: 1px solid black;
     color: red;
     font-size: 90%; 
     font-weight: bold;
     
}

td {

	border: 1px solid black;
	color: black;
	font-size: 90%; 


}

table {

	border: 1px solid black;
	color: black; 
	font-size: 90%; 

}

</style>
<body>
<div class="product-header">	
  <div class="wrap"> 
	  <div class="header-top">
		  <div class="header-left">
			 <div class="cssmenu">
				<ul>
                     <li><a href="index.html"><span>Home</span></a></li>
					 <li><a href="acercade.html"><span>Acerca de Coltecno SAS </span></a></li>
					 <li><a href="empresarios.html"><span>Empresarios Independientes</span></a></li>
                     <li><a href="clientes.html"><span>Clientes Corporativos</span></a></li>
                     <li class="active"><a href="catalogo.html"><span>Catálogo de productos</span></a></li>
					 <li class="last"><a href="destacados.html"><span>Productos Destacados</span></a></li>
				</ul>
		    </div>
	    </div>
	 	<div class="clear"></div> 
	</div>
  </div>	
</div>

<br>
<br>
<br>

<h1 class="txt-center"><span class="org">INGRESO AL CATÁLOGO DE PRODUCTOS</span></h1>

<?php 
//Conexion a la base de datos 

$conexion=mysql_connect("localhost","root",""); 
mysql_select_db("coltecno",$conexion); 
?> 
<?php 
//Obteniendo registros de la base de datos a traves de una consulta SQL 

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
echo "<td>".$rows["precio"]."</td>";
echo "<td>".$rows["caracteriztica"]."</td>";
echo "<td>".$rows["img"]."</td></tr>";
} 
echo "</table>";
?> 

</form>			
<br>
<br>

<div class="footer">
	<div class="wrap">
		<div class="footer-border">
        	<br>
            <br>
				<div>
                  <p class="txt-center">  
                  	<a href="https://www.facebook.com/ColtecnoSAS/" target="_blank"><img src="images/fb.png" alt=""></a>
					<a href="https://twitter.com/ColTecno" target="_blank"><img src="images/tw.png" alt=""></a>
                  </p>
                </div>
 		</div>
	</div>
			<div class="clear">
			</div>
            
            <br>
            <br>
	      	
            <div class="copy">
		      <p class="copy">© 2016 Designed by Team - Programando...</p>
			</div>
</div>
</body>
</html>