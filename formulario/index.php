<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./Imagen/IMAGEN.jpg">
    <link rel="stylesheet" href="./Css/index.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <center>
    <h1>Ingresar datos</h1>

    <form id="myForm" action="insertar.php" method="POST">
        <div>
            <label><strong>Nombre De Usuario</strong></label>
            <input type="text" name="nombre" required/>
        </div> <br>

        <div>
            <label><strong>Documento</strong></label>
            <input type="text" name="documento" required/>
        </div><br>

        <div>
            <label><strong>Correo</strong></label>
            <input type="gmail" name="correo" required/>
        </div><br>

        <div>
            <label><strong>Contraseña</strong></label>
            <input type="password" name="contrasena" required/>
        </div><br>

        <div>
            <button type="submit" onclick="enviarFormulario(event)"><strong>Enviar</strong></button>
        </div><br>
    </form>
    <script>
  function enviarFormulario(event) {
  event.preventDefault(); // Detenemos el envío del formulario
  let form = document.getElementById("myForm"); // Obtenemos el formulario
  let url = form.action; // Obtenemos la URL del archivo PHP que procesará los datos
  let data = new FormData(form); // Creamos un objeto FormData con los datos del formulario
  let requiredFields = form.querySelectorAll('[required]');
  let allFieldsFilled = true;
  requiredFields.forEach(field => {
    if (!field.value) {
      allFieldsFilled = false;
    }
  });
  if (allFieldsFilled) {
    // Enviamos el formulario
    fetch(url, {
      method: "POST",
      body: data
    })
    .then(response => {
        // Manejamos la respuesta del servidor aquí
        console.log(response);
        // Redirigimos al usuario a la página de éxito
        window.location.href= "formulario.php";
    })
    .catch(error => {
        // Manejamos cualquier error aquí
        console.log(error);
    });
  } else {
    alert('Por favor diligencie todos los campos obligatorios antes de enviar el formulario.');
  }
}
    </script>
    
    </center>
</body>
</html>