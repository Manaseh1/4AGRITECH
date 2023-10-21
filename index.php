<?php
  include("./navbar.php");
?>  

      <br><br>
    <div class="container">
        
           
        <form class="col s6 form">
            <div class="row">
                <div class="input-field col s6">
                    <input id="first_name" type="text" class="validate">
                    <label for="first_name">First Name</label>
                  </div>
                <div class="input-field col s6">
                    <input id="last_name" type="text" class="validate">
                    <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                  </div>

                  <div class="input-field col s12">
                    <input id="confirm_password" type="password" class="validate">
                    <label for="confirm_password">confirm_Password</label>
                  </div>
            </div>

            <a class="waves-effect waves-light btn-large">Sign Up</a>
        </form>
    </div>
   
    
    </div>
    </div>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    
</body>
</html>