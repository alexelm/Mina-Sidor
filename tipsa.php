<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bothniabladet</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="modalStyles.css"> -->
  <link rel="stylesheet" href="./css/styles.css">
  
   <script>
      function skickaTips() {
          var namn = document.getElementById("namnID").value;
          var beskrivning = document.getElementById("beskrivningID").value;
          if(beskrivning!=="" && beskrivning!=="  " ){
             
           alert("Tips skickat");
            }
            else{
                alert("Fyll i en kort beskrivning")
            }
        }
        
    
     
    </script>

</head>

<body>
  <!-- Inkluderar projektfiler -->
  <?php include 'modal.php'; ?>
  <script type="text/javascript" src="image.js"></script>



  <!-- START of webbpage -->

  <div class="jumbotron jumbotron-fluid">
  <h1 style="background-color:#7ABDFF; color:#FFFFFF; font-family:Courier New, Courier, monospace;"> <p class="text-center"> Bothniabladet Bildbyrå <p> </h1>

    <div class="navContainer container d-flex justify-content-center">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="./index.php">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./tipsa.php">Tipsa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./kontaktaOss.php">Kontakta Oss</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./loggaIn.php">Logga In</a>
        </li>

      </ul>
    </div>

  </div>

  <div class="container">
       <div class="jumbotron">
           <h3 class="searchHeader"> Tipsa oss </h3> <br>
           
           <h5 style="margin-left: 10px;">Har du fångat något som kan vara utav intresse för oss? Tipsa!</h5> <br>  <br>
          <div class="tipsaInput " >
          
              <form action="" method="">
            
                <label> Namn: </label> 
                <!-- definierar label för att kunna hantera de på ett lätt sätt i css.-->
                 
                <input id="namnID" type="text" class="txt8"> <br> <br> 
               
        
                <label> Beskrivning:* </label>
                <textarea id="beskrivningID" value="">  </textarea> <br><br>
                
                <button style="width: 210px; height: 50px; margin-left: 10.3em;"  id="btn5" class="btn btn-secondary btn-sm ">
                                Bifoga bild
                  </button> <br> <br>
                  <label> Bifogad fil:* </label>
                  <input style="width: 500px;" id="bifogadID" type="text" class="txt8" value="storage/sdcard0/DCIM/Screenshots/2852192-123.jpeg"> <br> <br>

                        </form>
           </div>
                         

            </div>

        <button style="width: 100px; height: 50px;" id="btn1" class="btn btn-secondary btn-sm " onclick="skickaTips()">
                                Skicka Tips
                  </button>

    </div>   



  <!-- END of webbpage -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>