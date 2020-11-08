<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" href="image/logo.jpg">
        <?php 
            include ("db/conexion_db.php");
            $id=$_GET['id'];
        ?>
    </head>
    <body>
        <main>
           <div class="content-menu">
           <input type="checkbox" id="check">
           <img src="image/icono.png" width="20px" class="img-icono">
           <label for="check" class="icon-menu">Menú</label>
           <h2>Hopital Bio-IS</h2>
           <img src="image/logo.jpg" class="img-logo">
           <br>
           <nav class="menu">
               <ul>
                   <li><a href="ingreso.html">Ingreso HCE</a></li>
                   <li><a href="consulta.html">Consulta HDE</a></li>
                   <li>Agenda Médica</li>
                   <li>Laboratorio</li>
                   <li>Imágenes</li>
                   <li>Factración</li>
                   <li>Admisión</li>
                   <li>Gestión de Calidad</li>
                   <li>Conozcanos</li>
               </ul>
           </nav>
       </div>
       <br><br>
    <div class="form-hce">
   
        <h2 class="form__titulo">Historia Clínica Electrónica</h2>
        <br>

        <?php
            $i=0;
                $sql = $connection->query("SELECT * FROM pacientes WHERE id = $id") or die (mysql_error());
                    while($resultados = $sql->fetch_array(MYSQLI_NUM)) {
                        $id= $resultados[0];
                        $nombre= $resultados[1];
                        $apellido= $resultados[2];
                        $genero= $resultados[3];
                        $edad= $resultados[4];
                        $fr= $resultados[5];
                        $ps= $resultados[6];
                        $pd= $resultados[7];
                        $talla= $resultados[8];
                        $peso= $resultados[9];
                        $so2= $resultados[10];

                        $chol=$resultados[11];
                        $dia=$resultados[12];
                        $trig=$resultados[13];
                        $cancer=$resultados[14];
                        $renal=$resultados[15];
                        $grupo=$resultados[16];
                        $rh=$resultados[17];
                        $i=$i+1;    
                        
                    };
                
            ?>

        <div class="contenedor-inputs">
            <h3 class="form__subtitulo">Datos básicos del paciente</h3>
            <p class="p-registro"><b>Documento de identidad:</b> <?php echo $id?></p>
            <p class="p-registro"><b>Nombres:</b>  <?php echo $nombre?></p>
            <p class="p-registro"><b>Apellidos:</b>  <?php echo $apellido?></p>
            <p class="p-registro"><b>Género:</b>  <?php if ($genero==1) { echo "Masculino"; } else { echo "Femenino";} ?></p>
            <p class="p-registro"><b>Edad:</b>  <?php echo $edad?> años de edad</p>
            <p class="p-registro"><b>Frecuencia Cardiaca:</b>  <?php echo $fr?> LPM</p>
            <p class="p-registro"><b>Presión Sistólica:</b>  <?php echo $ps?> mmHg</p>
            <p class="p-registro"><b>Presión Diastólica:</b>  <?php echo $pd?> mmHg</p>
            <p class="p-registro"><b>Estatura:</b>  <?php echo $talla?> m</p>
            <p class="p-registro"><b>Peso:</b>  <?php echo $peso?> kg</p>
            <p class="p-registro"><b>Saturación de O2:</b>  <?php echo $so2?>%</p>
            
           
        </div>
        <br>
        <div class="contenedor-inputs">
            <h3 class="form__subtitulo">Antecedentes</h3>
            <p class="p-registro"><b>Colesterol Alto:</b> <?php if ($chol=='chol') { echo "SI"; } else { echo "NO";}?></p>
            <p class="p-registro"><b>Diabetes:</b> <?php if ($dia=='dia') { echo "SI"; } else { echo "NO";}?></p>
            <p class="p-registro"><b>Triglicéridos:</b> <?php if ($trig=='trig') { echo "SI"; } else { echo "NO";}?></p>
            <p class="p-registro"><b>Cáncer:</b> <?php if ($cancer=='cancer') { echo "SI"; } else { echo "NO";}?></p>
            <p class="p-registro"><b>Insuficiencia Renal:</b> <?php if ($renal=='renal') { echo "SI"; } else { echo "NO";}?></p>
            
        </div>
        <br>
        <div class="contenedor-inputs">
            <h3 class="form__subtitulo">Tipo de Sangre</h3>
            <p class="p-registro"><b>Grupo sanguíneo:</b>  <?php echo $grupo?></p>
            <p class="p-registro"><b>RH:</b>  <?php echo $rh?></p>

        </div>
        
        <div class="contenedor-btn">
            <a href="consulta.html">Consultar Otro paciente</a>
            
        </div>

    <footer>
        <a href="#">www.hopital-bio-is.com.co</a> Teléfono: 123456789 correo: hopital-bio-is@udea.edu.co
    </footer>
</div>
        </main>
    </body>
</html>