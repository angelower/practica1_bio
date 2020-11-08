<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="icon" href="image/logo.jpg">
        <?php 
            include ("db/conexion_db.php");
            $chol='';
            $dia='';
            $trig='';
            $cancer='';
            $renal='';
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $genero=$_POST['genero'];
            $edad=$_POST['edad'];
            $fr=$_POST['fr'];
            $ps=$_POST['ps'];
            $pd=$_POST['pd'];
            $talla=$_POST['talla'];
            $peso=$_POST['peso'];
            $so2=$_POST['SO2'];
            $chol=isset($_POST['chol']);
            $dia=isset($_POST['dia']);
            $trig=isset($_POST['trig']);
            $cancer=isset($_POST['cancer']);
            $renal=isset($_POST['renal']);
            $grupo=$_POST['ts'];
            $rh=$_POST['rh'];
        
        ?>
    </head>
    <body>
        <?php
            
           $sql = $connection->query("INSERT INTO pacientes VALUE ('".$id."','".$nombre."','".$apellido."','".$genero."','".$edad."','".$fr."','".$ps."','".$pd."','".$talla."','".$peso."','".$so2."','".$chol."','".$dia."','".$trig."','".$cancer."','".$renal."','".$grupo."','".$rh."')");
        ?>
        
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
            <a href="hce.html">Ingresar Otro paciente</a>
            
        </div>
</div>
    </body>
    <footer>
        <a href="#">www.hopital-bio-is.com.co</a> Teléfono: 123456789 correo: hopital-bio-is@udea.edu.co
    </footer>
