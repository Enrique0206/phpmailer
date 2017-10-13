<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>NabsGames</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--bootstrap css-->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <!--bootstrap css-->
        
        <!--estilos-->
        <link href="css/estilos.css" rel="stylesheet" type="text/css">        
         <!--estilos-->
         
        <!--bootstrap js mas jquery-->
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--bootstrap js mas jquery-->
                
    </head>
    
<body>
	 <div class="container-fluid">
            
            <div class="page-header">
                <h1>Contáctenos</h1>
            </div>

            <div class="well">Si tienes alguna sugerencia déjanos un mensaje.</div>

            <form class="form-horizontal" action="test.php" method="post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail</label>
                    <div class="col-sm-4">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required autofocus>
                    </div>
                </div>

                <div class="form-group">
                    <label for="nombres" class="col-sm-2 control-label">Nombres</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="mensaje" class="col-sm-2 control-label">Mensaje</label>
                    <div class="col-sm-6">
                            <textarea id="mensaje" name="mensaje" class="form-control" placeholder="Tu mensaje" rows="5" required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="adjunto" class="col-sm-2 control-label">Ajunto</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control" id="name" name="adjunto">
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                    </div>
                </div>
                
            </form>
            
        </div>
</body>
</html>
