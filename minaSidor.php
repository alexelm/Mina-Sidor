<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bothniabladet</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="modalStyles.css"> -->
    <link rel="stylesheet" href="./css/styles.css">
    
    <script>
        function sparaProfil(){ //Bara för feedback när man sparar profil, gör inget
            alert("Profil Sparad");
        }
  
        function resetPw(){ //Lösenord som kräver allt som ett vanligt lösenord gör, förutom då att ingenting egentligen sparas.
            var password1 = document.getElementById("password1").value;
            var password2 = document.getElementById("password2").value;
            var password3 = document.getElementById("password3").value;
            if(password2==password3 && !password1==""){
                
            
            document.getElementById("password1").value="";
            document.getElementById("password2").value="";
            document.getElementById("password3").value="";
            alert("Nytt Lösenord Sparat");
            }
            else if(password1==""){
                alert("Ange ett lösenord");
            }else {
                alert("Lösenorden matchade inte, försök igen");
            }
        }
        
    

    </script>

  </head>

  <body>
    <!-- projektfiler -->
    <?php include 'modal.php'; ?>
    <?php include 'showImages.php'; ?>


    <!-- START of webpage -->

    <div class="jumbotron jumbotron-fluid">
      <h1 style="background-color:#7ABDFF; color:#FFFFFF; font-family:Courier New, Courier, monospace;"> &nbsp Bothniabladet </h1>

        <div class="navContainer container d-flex justify-content-center">
          <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">Hem</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./laddaUppBild.php">Ladda Upp Bild</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./orderhantering.php">Orderhantering</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="./minaSidor.php">Mina Sidor</a>
              </li>
               <li class="nav-item">
                  <a class="nav-link" href="./kontaktaOss.php">Kontakta oss</a>
              </li>

            </ul>
        </div>
    </div>            


    <div class="container">
       <div class="jumbotron">
           <h4 class="searchHeader"> Min Profil </h4> <br>
           
          <div class="minInfo " >
          
              <form action="" method="">
            <!-- inputs för all information som vi vill ha -->
                <label> Förnamn: </label> 
                
                 
                <input id="forNamnID" type="text" class="txt5" value="Joel" readonly=""> <br> <br> 
                <label> Efternamn: </label>
                <input id="efterNamnID" type="text" class="txt5" value="Tingman" readonly> <br> <br>

                <label> Email:* </label>
                
                <input id="eMailID" type="text" class="txt4" value="joel.tingman@hotmail.com" > <br><br>
                
               
                <label> Telefonnummer:* </label>
                <input id="telefonNummerID" type="text" class="txt4" value="070-1122334" > <br><br>
                
                <button class="btn btn-secondary btn-sm " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Byt Lösenord
                  </button>

                    <div class="collapse" id="collapseExample">
                      <div class="card card-body">

                        <div class="form-check form-check-inline">
                            <input class="txt9" type="password" id="password1" placeholder="Nuvarande Lösenord"> 
                            <input class="txt9" type="password" id="password2" placeholder="Nytt Lösenord"> 
                            <input class="txt9" type="password" id="password3" placeholder="Bekräfta Lösenord">
                            
                            <button id="btn2" class="btn btn-secondary btn-sm" onclick="resetPw()">
                                Spara
                  </button>
                
                
                        </form>
           </div>
                         

            </div>
</div> 
        <button id="btn1" class="btn btn-secondary btn-sm " onclick="sparaProfil()">
                                Spara Profil
                  </button>

      
  
    <!-- END of webbpage -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </body>

</html>
