<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>NIGHT</title>
</head>
<body style="background-color:#FAF3D5;">
  <nav>
  	<ul>
  		<li><a href="index.html"> Inicio</a></li>
  		<li><a href="nuevaC.html"> Nueva colección</a></li>
        <li><a href="#"> Hombre</a>
  			<ul>
  				<li><a href="#"> Camiseta</a></li>
  				<li><a href="#"> Camisa</a></li>
  				<li><a href="#"> Patalones</a></li>
  				<li><a href="#"> Bermudas</a></li>
  			</ul>

  		</li>
  		<li><a href="#"> Mujer</a>
  			<ul>
  				<li><a href="#"> Camiseta</a></li>
  				<li><a href="#"> Camisa</a></li>
  				<li><a href="#"> Patalones</a></li>
  				<li><a href="#"> Faldas</a></li>
  			</ul>

        </li>
        <li><a href="https://co.pinterest.com/smonsalvegomez/boards/"> Mis ideas</a>   
  </ul>
</nav>
  		  
<style type="text/css">
	nav{
		background-color: black;
		padding: 0px;
		margin: 0px;
		width: 100%;
		height: 5rem;

	}
	nav ul{
		float: left;
		display: flex;

	}
	nav li ul{
		float: left;
		list-style: none;
		position: relative;


	}
	nav ul li a{
		display: block;
		padding: 0 2rem;
		line-height: 5rem;
		color: white;
		text-decoration: none;
		
	}
	nav ul li ul{
		display: none;
		position: absolute;
		background-color: black;
		boder: 1px ;
		text-align: center;

	}

	nav ul li:hover ul {
		display: block;
	}
	nav ul li ul li{
		width: 100%;
	}
	nav ul li ul li a:hover {
		background-color: gray;


	}

	div#banner{
		width: 100%;height: 300px;
		
	}
	img#img_banner{
		display: block;
		margin: auto;
		width: 100%;
		max-width: 1200px;
		min-width: 500px;
		height: 300px;
	}

</style>

<center>    
 <div id="banner"> 
 	<img src="imge/fas.png" id="img_banner">
</div> <br>

<br>
<br>


<br>
<table width="90%" border="1">
    <tr>
    <th width="35%"><p><h2>Presentación:</h2><br>
    En NIGHT® estamos dispuestos a llevar tu imaginación a la realidad,
    realizando cualquier tipo de estampación en <br>la prenda que quieras.
    </p></th>
    <th width="35%"><p><h2>Expectativas:</h2><br>
    Algunos de nuestros desarrolladores poseen conocimientos en administración,
    por ello queremos crear una empresa totalmente virtual, y en lo más posible
    hacer este proyecto realidad.
    </p></th>
    <th width="25%"><p><h2>¿A quién va dirigida?</h2><br>
    A TODO EL PUBLICO EN GENERAL.
    </p></th>
</tr>

</table>
</center>
<center><h1>~ R   E   G   I   S   T   R   A   T   E ~</h1>

<width width="30%" style="background-color:#E6E4DA;">

<tr>
    <th>    
        <label>Nombre:</label><br>
        <input type="text" name="nombre"><br>

    </th>    
    <th>
        <br>
        <label>Apellido:</label><br>
        <input type="text" name="apellido"><br>
    </th>
</tr>
<tr>
    <th>
        <br>
        <label>Edad:</label><br>
        <input type="number" name="edad"><br>
    </th>
    <th>
        <br>
        <label>Telefono:</label><br>
        <input type="tel" name="telefono" pattern="[0-9]{3}[0-9]{7}"><br>
    </th>
</tr>
<tr>
    <th>
        <br>
        <label>Correo:</label><br>
        <input type="email" name="correo"><br>
    </th>
    <th>
        <br>
        <label>Cuidad:</label><br>
        <select  name="ciudad">
            <option value="seleccioná">Seleccioná</option>
            <option value="BOGOTÁ">BOGOTÁ</option>
            <option value="MEDELLÍN">MEDELLÍN</option>
            <option value="CALÍ">CALÍ</option> 
            <option value="BARRANQUILLA">BARRANQUILLA</option>
            <option value="CARTAGENA">CARTAGENA</option>
            <option value="CÚCUTA">CÚCUTA</option> 
            <option value="SOLEDAD">SOLEDAD</option>
            <option value="IBAGUÉ">IBAGUÉ</option>
            <option value="BUCARAMANGA">BUCARAMANGA</option> 
            <option value="SANTAMARTA">SANTA MARTA</option>
            <option value="VILLAVICENCIO">VILLAVICENCIO</option>
            <option value="SOACHA">SOACHA</option> 
            <option value="PEREIRA">PEREIRA</option>
            <option value="BELLO">BELLO</option>
            <option value="VALLEDUPAR">VALLEDUPAR</option> 
            <option value="MONTERÍA">MONTERÍA</option>
            <option value="PASTO">PASTO</option>
            <option value="MANIZALES">MANIZALES</option> 
            <option value="BUENAVENTURA">BUENAVENTURA</option>
            <option value="NEIVA">NEIVA</option>
            <option value="BARRANCABERMEJA">BARRANCABERMEJA</option> 
            <option value="PALMIRA">PALMIRA</option>
            <option value="ARMERIA">ARMENIA</option>
            <option value="POPAYÁN">POPAYÁN</option> 
            <option value="SINCELEJO">SINCELEJO</option>
            <option value="ITAGUI">ITAGUI</option>
            <option value="FLORIDABLANCA">FLORIDABLANCA</option> 
            <option value="RIOHACHA">RIOHACHA</option>
            <option value="ENVIGADO">ENVIGADO</option>
            <option value="TULUÁ">TULUÁ</option> 
            <option value="DOSQUEBRADAS">DOSQUEBRADAS</option>
            <option value="SANANDRÉSDETUMACO">SAN ANDRÉS DE TUMACO</option>
            <option value="TUNJA">TUNJA</option> 
            <option value="GIRÓN">GIRÓN</option>
            <option value="APARTADÓ">APARTADÓ</option>
            <option value="FLORENCIA">FLORENCIA</option> 
            <option value="URIBIA">URIBIA</option>
            <option value="IPIALES">IPIALES</option>
            <option value="TURBO">TURBO</option> 
            <option value="MAICAO">MAICAO</option>
            <option value="PIEDECUESTA">PIEDECUESTA</option>
            <option value="YOPAL">YOPAL</option> 
            <option value="OCAÑA">OCAÑA</option> 
            <option value="FUSAGASUGÁ">FUSAGASUGÁ</option>
            <option value="CARTAGO">CARTAGO</option>
            <option value="FACATATIVÁ">FACATATIVÁ</option> 
            <option value="CHÍA">CHÍA</option>
            <option value="MAGANGUÉ">MAGANGUÉ</option>
            <option value="PITALITO">PITALITO</option>
            <option value="CAUCASIA">CAUCASIA</option> 
            <option value="ZIPAQUIRÁ">ZIPAQUIRÁ</option> 
            <option value="MALAMBO">MALAMBO</option>
            <option value="RIONEGRO">RIONEGRO</option>
            <option value="LORICA">LORICA</option> 
            <option value="JAMUNDI">JAMUNDI</option>  
            <option value="QUIBDÓ">QUIBDÓ</option>
            <option value="GUADALAJARA">GUADALAJARA DE BUGA</option>
            <option value="YUMBO">YUMBO</option> 
            <option value="SOGAMOSO">SOGAMOSO</option> 
            <option value="DUITAMA">DUITAMA</option>
            <option value="GIRARDOT">GIRARDOT</option>
            <option value="CIÉNAGA">CIÉNAGA</option> 
            <option value="otro">Otros</option>
        </select><br>
    </th>
</tr>
<tr>
    <th>
        <br>
        <label>Contraseña:</label><br>
        <input type="password" name="contraseña" ><br>
    </th>
    <th>
        <br>
        <label>Genero:</label><br>
        <select  name="genero">
            <option value="femenino">Femenino</option>
            <option value="masculino">Masculino</option>
            <option value="otro">Otro</option>  
        </select><br>
    </th>
</tr>
<tr>
    <th>
        <br>
        <input type="submit" value="Enviar"><br>
    </th>
    <th>
        <br>
        <input type="reset"><br>
    </th>
</tr>
<tr>
    <th>
        <br>
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F432807190808968%2Fposts%2F603459547077064%2F%3Fsfnsn%3Dscwshmo%26extid%3DUNNxaOAsZOPjvCeF&tabs=timeline&width=500&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
    </th>
</tr>
</width></center>





<footer><center><h3>NIGHT® COPYRIGHT 2020</center></h3></footer>

</body>
</html>