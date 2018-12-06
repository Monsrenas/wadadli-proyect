  <!doctype html>
  <html lang="es">
  <?php  include('addformgrup.php');?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

  <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Loan Aplication</title>

  </head>
  <body>  
        <div class="container-fluid">
          <div class="row ">
            <div class="col-md-1 col-xs-1">
            </div>

            <div class="col-md-10 col-xs-10 parrafo">
              <h2>Applicant I</h2>
              <br>
              <form  style="color:black; width: 100%;"  action="guardatestimonio.php" method="post" autocomplete="off">

              <div style="float: left; width: 50%;">

                <p><label>Identification</label> 
                <input name="ID" type="text" id="ID" placeholder="id" required="" autofocus="" ></p>
                
                <p><label>First name</label> 
                <input name="nombre" type="text" id="usuario" placeholder="name" required=""> </p>

                <p><label>Surname</label> 
                <input name="apellido" type="text" id="apellido" placeholder="surname" required=""> </p>

                <p><label>Birthdate</label> 
                <input name="DOB" type="date" id="DOB" required=""> </p>
                <br>
               
                <p><label>Email</label> 
                <input name="email" type="email" id="mail" placeholder="email" required=""> </p>

                <p><label>Employment</label>
                <!-- Trigger the modal with a button -->
                <button type="button" class="" data-toggle="modal" data-target="#myModal">employment information</button>



              </div>
   
              <div style="float: left; width: 50%;">  
                <p><label>Social security</label> 
                <input name="ss" type="text" id="ss" placeholder="social security id" required=""></p>

                <p><label>Alias</label> 
                <input name="alias" type="text" id="alias" placeholder="alias"></p>

                <p><label>Middle name</label> 
                <input name="mdname" type="text" id="mdname" placeholder="middle name"> </p>

                <p><label>Marital status</label> 

                <select size="1" name="decision2">
                  <option selected> Single
                    <option> Married
                    <option> Divorced
                    <option> Widowed 
                </select> </p>
                <br>
                <p><label>Phone</label> 
                <input style="width: 25%;" name="comPhone" type="tel" id="telephone" placeholder="phone" required=""> <input name="cell" type="number" id="cell number" placeholder="Cell" required=""> </p>

              </div>
              

              <!-- Modal -->
              <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content" style="width: 130%;">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Employment information</h4>
                    </div>

                    <a href="javascript:addjob()" class="btn btn-success"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> add employment</a>

                    

                    <div id="jobform" class="modal-body parrafo">
                      

                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
                <br>
                <p id="bot" ><input type="submit" id="submit" name="submit" value="Done" class="boton" style="font-size: 1.5vw; float: none;"></p>
              </form>
          
          </div>
        </div>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content parrafo" >
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>

      </div>
                  
  </body>
</html>