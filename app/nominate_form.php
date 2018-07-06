<?php 
	include('includes/header.php');
?>

<div class="app-container">
      <div class="app-container-row"> 
         
          <div class="main-content">
           <div class="row form-row">
          <div class="col-md-4 col-xl-12 ml-auto mr-auto">             
              <form class="form" method="post" action="nominate_form.php">
              <h3 style="text-align: center;">NOMINATE YOUR CANDIDATE</h3>
              <p style="font-style: italic; text-align: center;">Select candidate and give reasons for nomination</p>
                <p class="text-divider"></p>
                <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="material-icons"></i></span>
                    </div>
                    
						<select name="carlist" form="carform">
						  <option value="volvo">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</option>
						  <option value="saab">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</option>
						  <option value="opel">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</option>
						  <option value="audi">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</option>
						</select>
                   </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" name="reg_email" value="" placeholder="Email...">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="reg_password" placeholder="Password...">
                  </div>
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="reg_password2" placeholder="Retype Password...">
                  </div>
                  <!-- If you want to add a checkbox to this form, uncomment this code

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        Subscribe to newsletter
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div> -->

                <div class="card-footer justify-content-center">
                  <input type="submit" name="reg_button" value="REGISTER" class="btn btn-link btn-primary btn-lg">
                </div>
                <p style="text-align: center;">Already Registered? <a href="login.php">Login Here</a></p>
              </form>
          </div>
      </div>
    </div>

    </div>

     <div class="side-bar">
                <ul>
                  <li>ABOUT THE AWARD</li>
                  <li>AWARD CATEGORIES</li>
                  <li>ORGANIZING TEAM</li>
                  <li>ABOUT NNESA PROJECT</li>
                </ul>
          </div>

    </div>
</div>

<?php 
	include('includes/footer.php');
?>