    
      
    <script src="../asset/js/jquery-2.1.0.min.js"></script>
    <script src="../asset/js/init.js"></script>
    <script src="../asset/js/jquery.timeago.min.js"></script> 
    <script src="../asset/js/live.js"></script>
    <script src="../asset/js/prism.js"></script>
    <script src="../asset/js/modernizr.js"></script> <!-- Modernizr -->
    <script src="../asset/pace-master/pace.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>


       
         <script >
        
        $( document ).ready(function(){
             var ancho = 60; 
             var alto = 55;

            $(".button-collapse").sideNav();
            $(".dropdown-button").dropdown({ hover: false });
            $('.modal-trigger').leanModal();
            $('ul.tabs').tabs();
            $('select').material_select();
            $('#modal1').css("width", ancho+'%');
            $('#modal1').css("height", alto+'%');

        })
        </script>
    </body>
  </html>