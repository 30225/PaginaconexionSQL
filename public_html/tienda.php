<?php include('header.php') ?>

<section id="containers">
    <h1> Tienda </h1>


    <div class="tienda_botenera">
        <ul>
            <li> <a href="tienda.php?personaje=db"> Lovecraft </a> </li>
            <li> <a href="tienda.php?personaje=hd"> Cthulhu </a> </li>
            <li> <a href="tienda.php?personaje=mg"> Azathoth </a> </li>
        </ul>

    </div>
        <!--  Estructuras de control -->
        <?php
    if(isset($_GET['personaje'])){
    switch($_GET['personaje']){
        case 'db':
            $personaje = 'Howard Phillips Lovecraft';
            $descripcion = 'Howard Phillips Lovecraft (Providence, Rhode Island; 20 de agosto de 1890-ibid.; 15 de marzo de 1937), más conocido como H. P. Lovecraft, fue un escritor estadounidense, autor de relatos y novelas de terror y ciencia ficción. Se le considera un gran innovador del cuento de terror, al que aportó una mitología propia —los Mitos de Cthulhu—, desarrollada en colaboración con otros autores, actualmente en vigencia. Su obra constituye un clásico del horror cósmico, una línea narrativa que se aparta de las tradicionales historias de terror sobrenatural, incluyendo elementos de ciencia ficción como, por ejemplo, razas alienígenas, viajes en el tiempo o existencia de otras dimensiones.';
            $img = './imagenes/lovecraft.jpg';
            break;
        case 'hd':
            $personaje = 'Cthulhu';
            $descripcion = 'Cthulhu es un dios Primigenio que debutó en el relato La Llamada de Cthulhu, de Howard Phillips Lovecraft, publicado en 1928 en la revista Weird Tales. Según las historias de Lin Carter, la información existente sobre este ser estaría contenida principalmente en el llamado "Texto de Rlyeh". Se conocen como mitos de Cthulhu al universo literario de horror cósmico (principalmente comprendido entre 1921 y 1935) y desarrollados en torno a Cthulhu por el propio Lovecraft y otros escritores del Círculo de Lovecraft. Las profecías dicen que cuando el ciclo cósmico termine el gran Cthulhu despertará de su letargo y gobernará la tierra y destruirá a todo el que no mencione las palabras: "Cthulhu R lyeh Ph nglui mglw nafh wgah nagl fhtagn" ante el gran Cthulhu.';
            $img = './imagenes/cthulhu.jpg';
            break;
        case 'mg':
            $personaje = 'Azathoth';
            $descripcion = 'Azathoth es la deidad más poderosa de la mitología lovecraftiana. Encarna la omnipotencia, por lo cual supera infinitamente en fuerza a dioses tan emblemáticos como Cthulhu, Nodens o Yog-Sothoth, y su mera presencia augura muerte y destrucción, Azathoth es un Dios Exterior ideado por Howard Phillips Lovecraft que aparece en su ciclo de relatos denominado Mitos de Cthulhu.
            Según los relatos de literatura de terror y ciencia ficción, Azathoth es "el primer motor del caos, la antítesis de la creación, el necio sultán de los demonios; el que roe, gime y babea en el centro del vacío final" o mejor dicho como "el centro del universo".';
            $img = './imagenes/azathoth.jpg';
            break;

    }
} else{
    $personaje = "Bienvenido a los misterios del horror cosmico.";
    $descripcion = "Selecione alguno de los anteriores apartados.";
    
     $img  = "./imagenes/estrellas.jpg";
     


}

    ?>
<div class="personaje_descripcion">
    <h2> <?php echo$personaje; ?></h2>
    <p> <?php echo$descripcion; ?></p>
    <div id="contenedor_img">
         <img src="<?php echo$img ?>" width="700"
         alt="Personajes">

    </div>


</div>

</section>

</body>