  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

          
    </head>

    <body>

 <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
    

            <ul id="slide-out" class="sidenav sidenav-fixed">
                <li><div class="user-view">
                <div class="background">
                    <img src="images/office.jpg">
                </div>
                <a href="#user"><img class="circle" src="images/yuna.jpg"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div></li>
                <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="{$PAG_HOME}">Home</a></li>
                <li><div class="divider"></div></li>
                <li><a href={$PAG_TESTE} class="">TESTE-01</a></li>
                <li><a href="{$PAG_TESTE2}" class="">teste-02</a></li>
                <li><a class="">link-03</a></li>
                <li><a class="">link-04</a></li>
                <li><a class="">link-05</a></li>
                 
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        

      </div>

      {* ---------------------------------------------------------------------------------------------------- *}

      <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
         <div class="container">

                
             {php}

                     Routes::get_Pagina();                

             {/php}

         </div>

      </div>

    </div>




      <!--JavaScript at end of body for optimized loading-->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

         <script src="./view/Jquery/jquery.js">
             $(document).ready(function(){
                $('.sidenav').sidenav();
            });
        </script>
    </body>
  </html>






 
          