<?php include('header.php') ?>

<form action="enviar_consulta.php" method="post">
     <div id="containers">
              <input type="text" name="nombre" placeholder="Nombre" class="contacto_input" required>
              <br>
              <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" required>
              <br>
              <input type="email" name="email" placeholder="Email" class="contacto_input" required>
              <br>
              <textarea name="mensaje" placeholder="mensaje" id="" cols="30" rows="10" required></textarea>
              <br>
              <input  type="submit" value="Enviar" class="contacto_btn" >  
     </div> 
      
          </form>
          <?php
          if(isset ($_GET['OK'])){
               echo "<h3> Su mensaje ha sido enviado con exito </h3>";
          }
          ?>
</body>
</html>