<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>CONSULTAR COMBIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <script src="js/combis.js"></script>
    <link rel="stylesheet" type="text/css" href="ConsultarCombi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
  </head>
  <body class="body">
    <div class="login-page">
      <div class="form">
        <center><h1 class="Tprincipal">Selección de Asientos</h1></center>
        <br>
        <div class="seleccionDeAsientos">
          <div class="escogerAsiento">
          </div>
          <div class="infoCombiSelec">
          </div>
        </div>

        <div class="tablaAsientos" >
          <TABLE
style="BORDER-LEFT-COLOR: #19a077; BORDER-BOTTOM-COLOR: #19a077; BORDER-TOP-COLOR: #19a077; BORDER-RIGHT-COLOR: #19a077"
cellSpacing=1 cellPadding=2 width="75%" border=4>
            <tr>
              <td><button id="btnA1" onclick="Ccolor(1) ">A1</button></td>
              <td><button id="btnA2" onclick="Ccolor(2)">A2</button></td>
              <td><button id="btnA3" onclick="Ccolor(3)">A3</button></td>
              <td><button id="btnA4" onclick="Ccolor(4)">A4</button></td>
            </tr>
            <tr>
              <td><button id="btnA5" onclick="Ccolor(5)">A5</button></td>
              <td>&nbsp;</button></td>
              <td>&nbsp;</button></td>
              <td><button id="btnA8" onclick="Ccolor(8)">A8</button></td>
            </tr>
            <tr>
              <td><button id="btnA6" onclick="Ccolor(6)">A6</button></td>
              <td>&nbsp;</button></td>
              <td>&nbsp;</button></td>
              <td><button id="btnA9" onclick="Ccolor(9)">A9</button></td>
            </tr>
            <tr>
              <td><button id="btnA7" onclick="Ccolor(7)">A7</button></td>
              <td>&nbsp;</button></td>
              <td>&nbsp;</button></td>
              <td><button id="btnA10" onclick="Ccolor(10)">A10</button></td>
            </tr>
            <tr>
              <td>&nbsp;</button></td>
              <td>&nbsp;</button></td>
              <td>&nbsp;</button></td>
              <td><button id="btnA11" onclick="Ccolor(11)">A11</button></td>
            </tr>
            <tr>
              <td><button id="btnA12" onclick="Ccolor(12)">A12</button></td>
              <td><button id="btnA13" onclick="Ccolor(13)">A13</button></td>
              <td><button id="btnA14" onclick="Ccolor(14)">A14</button></td>
              <td><button id="btnA15" onclick="Ccolor(15)">A15</button></td>
            </tr>
            <tr>
              <td><button id="btnA16" onclick="Ccolor(16)">A16</button></td>
              <td><button id="btnA17" onclick="Ccolor(17)">A17</button></td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
          <br>
        
          <button class="ConLugar">Confirmar</button>
        </div>
          <div id="copyright">
            <div class="container">
              <div class="abajo">
                <div class="col-md-12">  
                  <p>© Desarrollado por <a href="https://sii.upp.edu.mx/vista/comunes/vMenu.php" rel="nofollow">LID</a></p>                   
                </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
  </body>
</html>

<script>

  function CambioColor(){
    const boton = document.getElementById("btnA"+id);
    if (boton.style.backgroundColor === '') {
        boton.style.backgroundColor = 'lime';
      } else {
          boton.style.backgroundColor = '';
      }
    }
  function Ccolor(id){

    var NS;
    const boton = document.getElementById("btnA"+id);
    switch(id){
      case 1:    
    if (boton.style.backgroundColor === '') {
        boton.style.backgroundColor = 'lime';
      } else {
          boton.style.backgroundColor = '';
      }
        break;
      case 2:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
         break;
      case 3:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 4:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 5:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 6:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 7:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 8:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 9:      document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break;
      case 10:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 11:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 12:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 13:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 14:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 15:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 16:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
      case 17:     document.getElementById("btnA"+id).style.backgroundColor= "lime";
        break; 
    }
  }
</script>