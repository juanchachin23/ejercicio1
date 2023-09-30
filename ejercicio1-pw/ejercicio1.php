<?php
$nombre = [100];
$edad = [100];
$estadoCivil = [100];
$sexo = [100];
$sueldo = [100];
$i = 0;
$parar=false;
$sumaEdadh= 0;
$promedioHombres=0;
if($_POST){
    $nombre [0] = $_POST['name1'];
    $nombre [1] = $_POST['name2'];
    $nombre [2] = $_POST['name3'];
    $nombre [3] = $_POST['name4'];
    $nombre [4] = $_POST['name5'];

    $edad [0] = $_POST['edad1'];
    $edad [1] = $_POST['edad2'];
    $edad [2] = $_POST['edad3'];
    $edad [3] = $_POST['edad4'];
    $edad [4] = $_POST['edad5'];

    $estadoCivil [0] = $_POST['estado1'];
    $estadoCivil [1] = $_POST['estado2'];
    $estadoCivil [2] = $_POST['estado3'];
    $estadoCivil [3] = $_POST['estado4'];
    $estadoCivil [4] = $_POST['estado5'];

    //empleado #1 sexo
    if($_POST['sexo1']){
        $sexo[0] = $_POST['sexo1'];
    }
    //empleado #2 sexo

    if($_POST['sexo2']){
        $sexo[1] = $_POST['sexo2'];
    } 
    //empleado #3 sexo

    if($_POST['sexo3']){
        $sexo[2] = $_POST['sexo3'];
    }
    //empleado #4 sexo

    if($_POST['sexo4']){
        $sexo[3] = $_POST['sexo4'];
    } 
    //empleado #5 sexo

    if($_POST['sexo5']){
        $sexo[4] = $_POST['sexo5'];
    } 
    //empleado#1 estado civil

    if($_POST['estado1']){
        $sexo[4] = $_POST['estado1'];
    }
    //empleado#2 estado civil
    if($_POST['estado2']){
        $estadoCivil [0] = $_POST['estado2'];
    } 
    //empleado#3 estado civil

    if($_POST['estado3']){
        $sexo[4] = $_POST['estado3'];
    }
    //empleado#4 estado civil
    if($_POST['estado4']){
        $estadoCivil [0] = $_POST['estado4'];
    } 
    //empleado#5 estado civil
    if($_POST['estado5']){
        $estadoCivil [0] = $_POST['estado5'];
    } 
    

    $sueldo [0] = $_POST['sueldo1'];
    $sueldo [1] = $_POST['sueldo2']; 
    $sueldo [2] = $_POST['sueldo3']; 
    $sueldo [3] = $_POST['sueldo4'];
    $sueldo [4] = $_POST['sueldo5']; 

    /*
    echo "Nombres <br>".$nombre[0]."<br>".$nombre[1]."<br>".$nombre[2]."<br>".$nombre[3]."<br>".$nombre[4];

    echo "edades <br>".$edad[0]."<br>".$edad[1]."<br>".$edad[2]."<br>".$edad[3]."<br>".$edad[4];
    echo "sexo <br>".$sexo[0]."<br>".$sexo[1]."<br>".$sexo[2]."<br>".$sexo[3]."<br>".$sexo[4];
    echo "estado civil <br>".$estadoCivil[0]."<br>".$estadoCivil[1]."<br>".$estadoCivil[2]."<br>".$estadoCivil[3]."<br>".$estadoCivil[4];

    echo "sueldo <br>".$sueldo[0]."<br>".$sueldo[1]."<br>".$sueldo[2]."<br>".$sueldo[3]."<br>".$sueldo[4];
    */
    

    $femeninoTotal = 0;
    $masculinoTotal =0;
    $casadosMayores = 0;
    $viudas = 0;
    
    $i=0;
    for($i=0; $i<5; $i++){
        if($sexo[$i] == "femenino"){
            $femeninoTotal++;
       } else{
            $masculinoTotal++;
            $sumaEdadh = $sumaEdadh + $edad[$i] ;
       }

       if($sexo[$i] == "masculino" && $estadoCivil[$i] = "casado" && $sueldo[$i] > 2500){
            $casadosMayores++;
       }

       if($estadoCivil[$i] ="viudo" && $sueldo[$i]> 1000 && $sexo[$i]=="femenino"){
        $viudas++;
       }

       
    }

    $promedioHombres = $sumaEdadh / $masculinoTotal;
    

    
    

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
    <title>Empleados</title>

</head>

<body>

    <div class="container md-2 bg-blue">
        
        <div class="col-md-12 col-lg-4" id="prueba">
        <form action="ejercicio1.php" method="post"  class="form-group" formnovalidate>
    <div>
        <label for="name1" class='negrita' >Empleado #1 </label> <br> <label> Nombre y apellido</label>
        <input type="text" name="name1" id="" class="form-control">
        <label for="edad">edad</label>
        <input type="number" name="edad1" id="" class="form-control">
        <label class='negrita'> Estado civil</label>

    <fieldset>
        <div>
            <input type="radio" id="" name="estado1"  value="soltero" />
            <label for="soltero1">soltero</label>
        </div>

        <div>
            <input type="radio" id="" name="estado1" value="casado" " />
            <label for="casado">casado</label>
        </div>

        <div>
            <input type="radio" id="" name="estado1" value="viudo"/>
            <label for="viudo">viudo</label>
        </div>
    </fieldset>

    <fieldset>
        <label class="negrita">Sexo</label>
        <div>
            <input type="radio" id="" name="sexo1" value="masculino"  />
            <label for="masculino">masculino</label>
        </div>

        <div>
            <input type="radio" id="" name="sexo1" value="femenino"  />
            <label for="femenino">femenino</label>
        </div>

    </fieldset>

    <label for="sueldo1" class="negrita">sueldo</label>
    <input type="number" name="sueldo1" class="form-control">
    
    </div>


    <div>
    <label for="name2" class='negrita'>Empleado #2 </label> <br> <label> Nombre y apellido</label>
        <input type="text" name="name2" id="" class="form-control">
        <label for="edad2">edad</label>
        <input type="number" name="edad2" id="" class="form-control">
        
<label class='negrita'> Estado civil</label>
    <fieldset>
        <div>
            <input type="radio" id="" name="estado2" value="soltero" />
            <label for="soltero2">soltero</label>
        </div>

        <div>
            <input type="radio" id="" name="estado2" value="casado" />
            <label for="casado2">casado</label>
        </div>

        <div>
            <input type="radio" id="" name="estado2" value="viudo" />
            <label for="viudo2">viudo</label>
        </div>
    </fieldset>

    <fieldset>
        <label class="negrita">Sexo</label>
        <div>
            <input type="radio" id="" name="sexo2" value="masculino" />
            <label for="masculino2">masculino</label>
        </div>

        <div>
            <input type="radio" id="" name="sexo2" value="femenino" />
            <label for="femenino2">femenino</label>
        </div>

    </fieldset>

    <label for="sueldo2" class="negrita">sueldo</label>
    <input type="number" name="sueldo2" class="form-control">
    

    </div>

    <div>
    <label for="name3" class='negrita'>Empleado #3  </label><br>
    <label> Nombre y apellido</label>
        <input type="text" name="name3" id="" class="form-control">
        <label for="edad3">edad</label>
        <input type="number" name="edad3" id="" class="form-control">
        <label class='negrita'> Estado civil</label>

    <fieldset>
        <div>
            <input type="radio" id="" name="estado3" value="soltero"  />
            <label for="soltero3">soltero</label>
        </div>

        <div>
            <input type="radio" id="" name="estado3" value="casado"  />
            <label for="casado3">casado</label>
        </div>

        <div>
            <input type="radio" id="" name="estado3" value="viudo" " />
            <label for="viudo3">viudo</label>
        </div>
    </fieldset>

    <fieldset>
        <label class="negrita">Sexo</label>
        <div>
            <input type="radio" id="" name="sexo3" value="masculino"  />
            <label for="masculino3">masculino</label>
        </div>

        <div>
            <input type="radio" id="" name="sexo3" value="femenino"  />
            <label for="femenino3">femenino</label>
        </div>

    </fieldset>

    <label for="sueldo3" class="negrita">sueldo</label>
    <input type="number" name="sueldo3" class="form-control">


    </div>
    
    <div>
    <label for="name4" class='negrita'>Empleado #4 </label> <br>  
        <label> Nombre y apellido</label>
        <input type="text" name="name4" id="" class="form-control">
        <label for="edad4">edad</label>
        <input type="number" name="edad4" id="" class="form-control">
        <label class='negrita'> Estado civil</label>

    <fieldset>
        <div>
            <input type="radio" id="" name="estado4" value="soltero"  />
            <label for="soltero4">soltero</label>
        </div>

        <div>
            <input type="radio" id="" name="estado4" value="casado"  />
            <label for="casado4">casado</label>
        </div>

        <div>
            <input type="radio" id="" name="estado4" value="viudo" />
            <label for="viudo4">viudo</label>
        </div>
    </fieldset>

    <fieldset>
        <label class="negrita">Sexo</label>
        <div>
            <input type="radio" id="" name="sexo4" value="masculino"  />
            <label for="masculino4">masculino</label>
        </div>

        <div>
            <input type="radio" id="" name="sexo4" value="femenino"  />
            <label for="femenino4">femenino</label>
        </div>

    </fieldset>

    <label for="sueldo4" class="negrita">sueldo</label>
    <input type="number" name="sueldo4" class="form-control">
    

    </div>

    <div>
    <label for="name5" class='negrita'>Empleado #5 </label> <br> <label> Nombre y apellido</label>
        <input type="text" name="name5" id="" class="form-control">
        <label for="edad5">edad</label>
        <input type="number" name="edad5" id="" class="form-control">
        <label class='negrita'> Estado civil</label>

    <fieldset>
        <div>
            <input type="radio" id="" name="estado5" value="soltero"  />
            <label for="soltero5">soltero</label>
        </div>

        <div>
            <input type="radio" id="" name="estado5" value="casado"  />
            <label for="casado5">casado</label>
        </div>

        <div>
            <input type="radio" id="" name="estado5" value="viudo"  />
            <label for="viudo5">viudo</label>
        </div>
    </fieldset>

    <fieldset>
        <label class="negrita">Sexo</label>
        <div>
            <input type="radio" id="" name="sexo5" value="masculino"  />
            <label for="masculino5">masculino</label>
        </div>

        <div>
            <input type="radio" id="" name="sexo5"  value="femenino"  />
            <label for="femenino5">femenino</label>
        </div>

    </fieldset>

    <label for="sueldo5" class="negrita">sueldo</label>
    <input type="number" name="sueldo5" class="form-control">
    
    <input type="submit" name="btn" value="btn" class="btn btn-success" id="pp">

    </div>

    </form>
        </div>

        
    </div>

    <p>
        <?php 
        if($_POST){
            echo "<br>"."Total de empleados con sexo femenino: ".$femeninoTotal;
            echo "<br>"." Total de hombres casados que ganan más de 2500: ".$casadosMayores;
            echo "<br>"." Total de mujeres viudas que ganan más de 1000: ".$viudas;
            echo "<br>"." Edad promedio hombres: ".$promedioHombres;
            
        }
        ?>
    </p>

    
</body>
</html>