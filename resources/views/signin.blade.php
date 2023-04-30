<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/signin.css') }}">
    <title>Ingreso</title>
</head>
<body>
    <header>
      <h1>ProTec - Inicio de sesion</h1>
      <nav class="navbar">
        <ul class="navbar_buttons">
                  <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
		</nav>
      </header>
      <main>
        <section>
          <h2>Ingresa tus datos</h2>
          <form>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <input type="submit" value="Iniciar sesión">
          </form>
        </section>
      </main>
      <footer>
        &copy; 2023 ProTec
      </footer>
</body>
</html>