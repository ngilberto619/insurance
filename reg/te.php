<?php if (isset($_SESSION['success'])): ?>
     <div class="error success">
     <h3>
     <?php echo $_SESSION['success'];
           unset($_SESSION['success']);
     ?>
     </h3>
     <?php endif ?>
     <?php if(isset($_SESSION["username"])): ?>
        <p>welcome<strong><?php echo $_SESSION['username'];?></strong></p>
        <p><a href="" style="color:red;">logout</a></p>
     <?php endif ?>
</div>