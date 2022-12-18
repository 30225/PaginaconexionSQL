
<?php include('header.php') ?>

    <?php

    $titulo = "<h2>Bienvenido a WikiCultura</h2>";
    $itemss1 = "Donde encontraras semanalmente nuevo contenido de literatura.";
    $itemss2 = "Hoy veremos la literatura de Howard Phillips Lovecraft";

    $tema = "<h2>Este autor se le conoce por sus cuentos de terror y horror cosmico</h2>";
    ?>

    <section id="containers">
        <div>
            <h2> <?php echo $titulo?></h2>
            <ul>
                <li> <?php echo $itemss1?></li>
                <li> <?php echo $itemss2?></li>
            </ul>
        </div>

        <div>
        <h2> <?php echo $tema ?></h2>
        </div>

        <?php
        define('CONSTANTE', 'Suerte en tu aventura hacia sin limite a la literatura.');
        echo CONSTANTE;        
        ?> 
        <footer>
            <?php
         define('CONSTANE', 'Puede contactarnos con la funcion contacto de la barra superior, al correo angellodiazlopez@gmail.com');
         echo CONSTANE;
            ?>
        </footer>
        
    </section>


</body>
</html>
