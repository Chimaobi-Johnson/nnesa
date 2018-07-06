<?php 
include('config/config.php'); 
include('includes/header.php');
// include('includes/handlers/login_handler.php')
?>


<div class="app-container">
      <div class="app-container-row">
          <div class="side-bar">
                <ul>
                  <li>ABOUT THE AWARD</li>
                  <li>AWARD CATEGORIES</li>
                  <li>ORGANIZING TEAM</li>
                  <li>ABOUT NNESA PROJECT</li>
                </ul>
          </div>
  
         
          <div class="main-content">
           <div class="row form-row">
          <div class="col-md-4 col-xl-6 ml-auto mr-auto">
            <div class="card card-signup">
             <?php if (!isset($_SESSION['username'])) : ?>
            <p> You re not allowed to view this page, click <a href="register.php">here to Register</a> or <a href="login.php">Login here</a> if already a member</p>
            <?php endif; ?>
              <p>WELCOME TO YOUR PROFILE</p>

              <table>
                <tr>
                  <td>USERNAME: </td>
                  <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                  <td>EMAIL: </td>
                  <td><?php if (isset($_SESSION['email'])) : echo $_SESSION['email']; ?>
                    <?php endif; ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>

<?php 
  include('includes/footer.php');
?>
  