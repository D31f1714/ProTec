<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>ProTec-Labs</title>
</head>
<body>
    	<header>
		<h1>ProTec</h1>
		<nav class="navbar">
			<ul class="navbar_buttons">
                <li><a href="{{ route('signin') }}">Ingresar</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>¿Por qué elegir ProTec?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ac dui auctor, commodo nibh vel, pulvinar arcu. Nulla quis metus sapien. Donec at suscipit nisl. Aliquam erat volutpat. Maecenas sem magna, convallis euismod aliquam vel, varius at ex. Duis ac ligula eget sapien tristique bibendum. Aliquam id purus et dolor luctus suscipit. Fusce aliquam lacus eu tincidunt fermentum.</p>
		</section>
		<section>
			<h2>Contacto</h2>
			<form action="#" method="post">
				<label for="nombres">Nombres:</label>
				<input type="text" name="nombres" id="nombre">
				<br>

                <label for="apellidos">Apellidos:</label>
				<input type="text" name="apellidos" id="apellidos">
				<br>

				<label for="email">Email:</label>
				<input type="email" name="email" id="email">
				<br>

				<label for="telefono">Telefono:</label>
				<input input type="tel" name="telefono" id="telefono"></input>
				<br>

                <label for="programa">progama en el que se encuentra interesado(a):</label>
				<select>
                    <option value="Bachillerato">Bachillerato</option>
                    <option value="Ingles">Ingles</option>
                    <option value="Preicfes">Preicfes</option>
                </select>
				<br>

				<input type="submit" value="Enviar">
			</form>
		</section>
	</main>
	<footer>
		<p>ProTec - Todos los derechos reservados</p>
	</footer>
</body>
</html>