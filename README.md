
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iconic Attire</title>
  </head>
  <body>
    <center>
      <form action="Gracias.html">
<br><br><br>
<h1>FORMULARIO</h1>
<style>
  /* Estilos generales */
body {
    background: linear-gradient(to bottom right, #e15f6a, #cca4f9, #77c5d5);
    font-family: 'Times New Roman', Times, serif, sans-serif;
    font-size: 20px;
    color: #444444;
    height: -500px;
    margin: 0;
  }
  
  h1 {
    font-size: 36px;
    margin-top: 0;
  }
  
  img {
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    border-radius: 10px;
  }
  
  .form-check {
    margin-bottom: 20px;
  }
  
  .check-label {
    font-weight: bold;
  }
  
  /* Estilos para el botón "Enviar" */
  input[type="submit"] {
    display: inline-block;
    background-color: #ec6ec9;
    color: white;
    padding: 12px 20px;
    margin: 20px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  
  input[type="submit"]:hover {
    background-color: #b94ade;
  }
  
  input[type="submit"]:active {
    background-color: #ec6ec9;
  }
  
  input[type="submit"]:focus {
    outline: none;
  }
  
  /* Animaciones para el botón "Enviar" */
  input[type="submit"] {
    animation-name: pulse;
    animation-duration: 1s;
    animation-iteration-count: infinite;
  }
  
  @keyframes pulse {
    0% {
      transform: scale(1);
    }
     50% {
      transform: scale(1.2);
    }
    100% {
      transform: scale(1);
    }
  }
</style>

       <div class="check">
         <label class="check-label" for="flexRadioDefault1" name="pregunta1" value="50">1. ¿Cómo conociste la marca de Iconic Attire?</label>
         <div> <input  class="check-input" type="radio" name="pregunta1" id="lexRadioDefault1" value="1"/>Por un conocido</div>
         <div> <input class="check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="2"/>Por Instagram</div>
         <div> <input class="check-input" type="radio" name="pregunta1" id="flexRadioDefault1" value="3"/>Ninguna de las anteriores</div>
       </div><br>

        <div class="check">
          <label class="check-label" for="flexRadioDefault2" name="pregunta2" value="60">2. ¿Has encontrado ropa de tu estilo en la página de Instagram?</label>
          <div> <input class="check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="4"/>Si</div>
          <div> <input class="check-input" type="radio" name="pregunta2" id="flexRadioDefault2" value="5"/>No</div>
        </div> <br>
        
        <div class="check">
         <label class="check-label" for="flexRadioDefault3" name="pregunta3" value="70">3. ¿Qué es lo que más te gusta de nuestra marca?</label>
         <div> <input class="check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="6"/>Ropa de dama</div>
         <div> <input class="check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="7"/>Ropa de caballero</div>
         <div> <input class="check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="8"/>Ropa Unisex</div>
         <div> <input class="check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="9"/>Zapatos de damas</div>
         <div> <input class="check-input" type="radio" name="pregunta3" id="flexRadioDefault3" value="10"/>Zapatos de caballero</div>
        </div><br>
 
        <div class="check">
          <label class="check-label" for="flexRadioDefault4" name="pregunta4" value="80">4. ¿Vas a comprar al por mayor o detal?</label>
          <div><input class="check-input" type="radio" name="pregunta4" id="flexRadioDefault4" value="11"/>Al por mayor</div>
          <div><input class="check-input" type="radio" name="pregunta4" id="flexRadioDefault4" value="12"/>Al Detal</div>
       </div><br>

        <div class="check">
         <label class="check-label" for="flexRadioDefault5" name="pregunta5" value="90">5. ¿Recomendarías nuestra marca?</label>
          <div><input class="check-input" type="radio" name="pregunta5" id="flexRadioDefault5" value="13"/>Sí</div>
          <div><input class="check-input" type="radio" name="pregunta5" id="flexRadioDefault5" value="14"/>No</div>
        </div><br>

        <input type="submit" value="Enviar"><br><br><br>
      </form>
    </center>
  </body>
</html>
