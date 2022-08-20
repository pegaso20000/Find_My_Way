
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Reclamo </title>
        <meta charset="UTF-8">
        <link rel="icon" href="../imagenes/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

    

            <div class="container mt-5">
                    <div class="row"> 
                    <h1>Reclamos</h1>

                    <form class="form-inline" method="POST" action="">
			<label>Desde la Fecha:</label>
			<input type="date" placeholder="Start"  name="date1"/>
			<label>Hasta la Fecha:</label>
			<input type="date" placeholder="End"  name="date2"/> 

            <br>
            <br>

			<input type="submit" class="btn btn-info" name="search" value="Buscar"> 

            
            <a href="quejas.php" class="btn btn-success"> Recargar Lista </a>

            
            
            
		

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Fecha</th>
                                        <th>mensaje</th>
                                        <th></th>
                                        
                                        <th><a href="../inicio_admin.php" class="btn btn-info">Volver</a></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                <?php include'range.php'?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>