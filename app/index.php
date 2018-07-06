<?php include('includes/header.php');
?>
<div class="app-container">
      <div class="app-container-row"> 
         
          <div class="main-content">
             <?php if (!isset($_SESSION['username'])) : ?>
            <p style="font-weight: bold; padding-top: 50px;"> You re currently not logged in click <a href="register.php">here to Register</a> or <a href="login.php">Login here</a> if already a member</p>
            <?php else : ?>
              <p style="font-weight: bold;">PLEASE CHECK THE LIST OF AWARD CATEGORIES AVAILBLE, YOU CAN ALSO NOMINATE YOUR AND VOTE FOR YOUR FAVOURITE CANDIDATE WITH ONE CLICK OF A BUTTON</p>
           <?php endif; ?>

           <table class="nominee_table">
             <th>AWARD CATEGORIES AVAILABLE</th>
             <tr>
               <td class="category_col">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</td><td class="nominate_col"><a href="nominate_form.php">NOMINATE</a></td>
             </tr>
             <tr>
               <td class="category_col">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</td><td class="nominate_col"><a href="nominate_form.php">NOMINATE</a></td>
             </tr>
            <tr>
               <td class="category_col">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</td><td class="nominate_col"><a href="nominate_form.php">NOMINATE</a></td>
             </tr>
             <tr>
               <td class="category_col">BEST TELECOMMUNICATIONS COMPANY SUPPORTING EDUCATION IN NIGERIA</td><td class="nominate_col"><a href="nominate_form.php">NOMINATE</a></td>
             </tr>
           </table>

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
  