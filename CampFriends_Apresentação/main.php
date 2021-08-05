<!DOCTYPE html>

<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style/style.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Perfil</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
      </li>
    </ul>
  </nav>
  <br>

  <div class="container">
    <div class="card" style="width:400px">
      <div class="card-body">
        <h4 class="card-title">Talita</h4>
        <p class="card-text">Gosto de Rap e de jogar volei :D</p>
        
          <div class="container">
      
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal0">
            Conversar
          </button>

          <!-- The Modal -->
          <div class="modal" id="myModal0">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h2 class="modal-title">Vamos nessa conversar melhor e combinar tudo?</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <h4>Que legal ter encontrado você! </h4>

                    <form class="form-horizontal" action="outer.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="Mensagem">Mensagem:</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="mensagem" placeholder="Coloque aqui sua mensagem :D"
                            name="mensagem">
                            <input name="para0" type="hidden" value="talita.santos@carambola.com.vc">
                            <input name="nome0" type="hidden" value="Talita">
                        </div>

                      </div>
                      
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="summonthy" value="0">Enviar</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    
    <br>
    <div class="container">
    <div class="card" style="width:400px">
      <div class="card-body">
        <h4 class="card-title">Phelipe</h4>
        <p class="card-text">Gosto de Rock e de fazer trilhas :D</p>
        
          <div class="container">
      
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
            Conversar
          </button>

          <!-- The Modal -->
          <div class="modal" id="myModal1">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h2 class="modal-title">Vamos nessa conversar melhor e combinar tudo?</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <h4>Que legal ter encontrado você! </h4>

                    <form class="form-horizontal" action="outer.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="Mensagem">Mensagem:</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="mensagem" placeholder="Coloque aqui sua mensagem :D"
                            name="mensagem">
                            <input name="para1" type="hidden" value="phelipe.silva@carambola.com.vc">
                            <input name="nome1" type="hidden" value="Phelipe">
                        </div>

                      </div>
                      
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="summonthy" value="1">Enviar</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    <br>
    <div class="container">
    <div class="card" style="width:400px">
      <div class="card-body">
        <h4 class="card-title">Maria Eduarda</h4>
        <p class="card-text">Gosto de MPB e de tocar violão :D</p>
        
          <div class="container">
      
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
            Conversar
          </button>

          <!-- The Modal -->
          <div class="modal" id="myModal2">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h2 class="modal-title">Vamos nessa conversar melhor e combinar tudo?</h2>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <h4>Que legal ter encontrado você! </h4>

                    <form class="form-horizontal" action="outer.php" method="post">

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="Mensagem">Mensagem:</label>

                        <div class="col-sm-12">
                          <input type="text" class="form-control" id="mensagem" placeholder="Coloque aqui sua mensagem :D"
                            name="mensagem">
                            <input name="para2" type="hidden" value="maria.silva@carambola.com.vc">
                            <input name="nome2" type="hidden" value="Maria Eduarda">
                        </div>

                      </div>
                      
                  </div>
                  
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="summonthy" value="2">Enviar</button>
                  </div>
                </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    </div>
    <br>
  </div> 

  
</body>

</html>