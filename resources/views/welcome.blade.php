<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="IMG/Full.svg" type="image/x-icon" />
  <title>Full Apuestas | El mejor sitio de Apuestas</title>
  <script src="https://kit.fontawesome.com/ef98e0dde8.js" crossorigin="anonymous"></script>
  <!-- Material Icon CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <!-- Materialize CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
  <!--Normalize CSS CDN-->
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <!-- Your custom styles -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  
  <link rel="stylesheet" href="css/style.css" />
  <!-- Used as an example only to position the footer at the end of the page.
    You can delete these styles or move it to your custom css file -->
  <style>
    @font-face {
      font-family: baloo-medium;
      src: url(Font/BalooPaaji2-Medium.ttf);
      font-weight: normal;
    }

    @font-face {
      font-family: baloo-bold;
      src: url(Font/BalooPaaji2-Bold.ttf);
      font-weight: bold;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      /* flex: 1 0 auto; */
    }

    .fijo {
      display: flex;
      /* min-height: 90vh; */
      flex-direction: column;
    }

    .Full {
      background-color: #2c3e50;
      /* color: #2c3e50; */
    }

    /* a .brand-logo {
      display: flex;
      flex-direction: row;
      align-items: center;

    } */

    .container {
      width: 100%;
      margin-bottom: 15px;
    }
    .nav-wrapper{
      padding: 0 20px;
    }
    .box__container{
        margin-bottom: 20px;
    }
    .box__container__botton,
    .box__subcontainer__botton {
      width: 90%;
      margin: 0 auto;
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: flex-start;
      overflow-x: scroll;
    }

    .box__subcontainer__botton {
      width: 75%;
      /* background: linear-gradient(to right , black 0, white 10%, white 90%, black 100%); */
    }

    .box__botton {
      width: 30%;
      text-align: center;
      margin: 0 5px;
      padding: 10px 15px;
      /* background-color: #2c3e50; */
      background: linear-gradient(to right, #515c67 0%, #515c67 20%, #415162 80%, #415162 100%);
      border-radius: 0 0 10px 10px;
    }
    .active2{
      background: linear-gradient(#ce7167 0%, #d65547 20%, #e45e4f 80%, #e74c3c 100%);
    }
    .sub__box__botton {
      margin: 0 5px;
      padding: 0px 15px;

    }

    .select {
      border-bottom: 2px solid #e74c3c;
    }

    li .sub__botton_imagen {
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid #e74c3c;
    }

    /* ul,
    li {
      display: inline-block;
    } */

    .box__flex {
      width: 100%;
      max-height: 65vh;
      overflow: scroll;
    }

    .box__container__league {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .box__macth {
      width: 90%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 10px;
      border-bottom: 1px solid orangered;
    }

    .box__date__complete {
      display: block;
      margin: 0 auto;
      font-size: 0.7em;
    }

    .macth {
      width: 100%;
      margin: 0 auto;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .date__macth {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      /* border-right: 1px solid orange; */
      padding-right: 25px;
      font-size: .8em;
    }

    .team__home,
    .team__visit {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5px;
      font-size: .8em;
    }

    .fight {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .teams {
      width: 90%;
      margin: 0 auto;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }

    .team__home__escudo,
    .team__visit__escudo {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin: 0 10px;
    }

    .more__apuesta {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-left: 25px;
    }

    .rondas {
      width: 90%;
      margin: 10px auto;
      display: flex;
      justify-content: space-around;
    }

    .confirmar__apuestas {
      width: 90%;
      height: 50px;
      margin-top: 10px;
      border: 1px solid rgba(255, 255, 255, 0.397);
      text-align: center;
      border-radius: 15px;
      background-color: #2c3e50;
      color: white;
      font-size: 1em;
      font-weight: Medium;
      letter-spacing: 3px;
      color: white;
    }

    .bet__match {
      width: 90%;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }

    .btn__bets {
      padding: 5px;
      color: tomato;
      background: none;
      border: 1px solid tomato;
      border-radius: 5px;
      width: 90px;
      height: 40px;
      letter-spacing: 0;
      cursor: pointer;
    }

    .space {
      margin-top: 10px;
    }

    .collapsible {
      margin: 0 auto;
      border: none;
      box-shadow: none;
      border-bottom: 1px solid #e74c3c;
    }

    .collapsible-header {
      border: none;

    }

    .collapsible-body {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      border: none;
    }

    /* input[type="checkbox"]:not(:checked),
    [type="checkbox"]:checked {
      position: relative;
      opacity: 1;
      pointer-events: all;
    }
    input[type=radio] {
  position: absolute;
  visibility: hidden;
  display: none;
} */
[type="radio"]:not(:checked)+label, [type="radio"]:checked+label{
  position:static; 
  padding: 0 15px;
}
label {
  color: #2c3e50;
  display: inline-block;
  cursor: pointer;
  font-weight: bold;
  padding: 1px;
}

input[type=radio]:checked + label{
  
  color: #2c3e50;
  background:#e74c3c;
}

label + input[type=radio] + label {
  border-left: 2px solid #e74c3c;
}
.radio-group {
  border: solid #e74c3c;
  display: inline-block;
  /* margin: 20px; */
  border-radius: 10px;
  overflow: hidden;
}
.btn{
  margin: 10px;
  background: none;
  padding: 0 10px;
  box-shadow: none;
  border: 1px solid #e74c3c;
}
.btn:hover{
  color: white ;
  background-color: #e74c3c;
}
.apostar{
  color: #e74c3c;
  background-color: none;
}
.apuesta{
  background-color: white;
  color: #e74c3c ;
  padding: 10px 15px;
  border: 1px solid #e74c3c ;
  border-radius: 5px;
}
.apuesta:focus{
  outline: none;
  background-color: #e74c3c ;
  color:white ;
}
label{
  position: relative;
}
label input{
  appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
}
label{
  border-radius: 25%;
  padding: 10px 15px;
  font-size: 15px;
  background: #e74c3c;
  color: white;
  box-shadow: -1px -1px 3px rgba(255, 255, 255, 0.1),
              2px 2px 6px rgba(0, 0, 0, 0.8);
              
}
label:hover{
  border-radius: 25%;
  padding: 10px 15px;
  font-size: 15px;
  background: #e74c3c;
  color: #6f6f6f;
  box-shadow: -1px -1px 3px rgba(255, 255, 255, 0.1),
              2px 2px 6px rgba(0, 0, 0, 0.8),
              inset -1px -1px 3px rgba(255, 255, 255, 0.1),
              inset 2px 2px 6px rgba(0, 0, 0, 0.8);
}
input[type='radio']:checked{
  color: #e74c3c ;
  box-shadow: inset -1px -1px 3px rgba(255, 255, 255, 0.1),
              inset 2px 2px 6px rgba(0, 0, 0, 1);
}

@media screen and (min-width: 769px) {
  .container{
    width: 90%;
  }
  .box__container__botton,
    .box__subcontainer__botton {
      width: 70%;
      margin: 0 auto;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    .tabs {
    position: relative;
    overflow-x: auto;
    overflow-y: hidden;
    height: 48px;
    width: 100vw;
    background-color: #fff;
    margin: 0 auto;
    white-space: nowrap;
}
}
  </style>
</head>

<body>
    <header>
    <nav class="Full">
      <div class="nav-wrapper fixed">
        <a href="#" class="brand-logo space"><img src="IMG/Full.png" width="50PX" alt="" srcset=""></a>

          <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="fas fa-bars"></i></i></a>

          <ul class="right hide-on-med-and-down center center">
            <form>
              <li><a href="#">Cuenta</a></li>
              <li><a href="#">Apuestas</a></li>
              <li><a href="#">Favoritos</a></li>
              <li><a href="#">politicas</a></li>
          </ul>
          <!-- <ul class="hide-on-large-only">
            <li><a href="" class="notification"><i class="right fas fa-bell bell"></i></a></li>
            <li><a href="#2" class="notification"><i class=" fas fa-search"></i></a></li>
          </ul> -->
          <ul class="side-nav Full" id="mobile-menu">
            <li>
              <div class="userView">
                <div class="background">
                  <!-- <img src="http://lorempixel.com/output/abstract-q-c-640-480-10.jpg" alt="Background Sidenav"> -->
                </div>
                <!-- <a href="#!user"><img class="circle" src="http://lorempixel.com/output/people-q-c-640-480-9.jpg" alt="User Image Sidenav"></a> -->
                <a href="#!name"><span class="white-text name">John Doe</span></a>
                <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
              </div>
            </li>
            <li><a href="#">Cuenta</a></li>
            <li><a href="#">Apuestas</a></li>
            <li><a href="#">Favoritos</a></li>
            <li><a href="#">politicas</a></li>
            <li><a href="#">Cerrar Sesion</a></li>
          </ul>

      </div>
    </nav>
  </header>
    <main>
    <div class="fijo navbar-fixed ">
      <div class="container">
        <div class="box__container">
          <div class="box__container__botton">
          <li class="box__botton active2" style="list-style-type: none;"><a href="{{route('live')}}">
              <i class="fas fa-satellite-dish" style="font-size: 35px; color: white; padding: 5px;"></i>
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="{{route('ligas')}}">
                <i class="far fa-futbol" style="font-size: 35px; color: white; padding: 5px;"></i>
              </a></li>
            {{-- <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/beisbol.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li>
            <li class="box__botton" style="list-style-type: none;"><a href="#">
                <img class="botton__imagen" src="IMG/tools-solid.svg" alt="" width="40px" rcset="">
              </a></li> --}}
          </div>
        </div>
      </div>
      
    </main>
    <br><br>
@yield('content')





    

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- Materialize JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script>
    $("document").ready(function () {
      $(".button-collapse").sideNav();
    });
</script>

    <script>
      //Cuando la página esté cargada completamente
      $(document).ready(function(){
        //Cada 10 segundos (10000 milisegundos) se ejecutará la función refrescar
        setTimeout(refrescar, 1800000);
      });
      function refrescar(){
        //Actualiza la página
        location.reload();
      }
    </script>
    <script>
      //Cuando la página esté cargada completamente
      $(document).ready(function(){
        //Cada 10 segundos (10000 milisegundos) se ejecutará la función refrescar
        setTimeout(refrescar, 60000);
      });
      function refrescar(){
        //Actualiza la página
        location.reload();
      }
    </script>
