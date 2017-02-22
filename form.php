<?php include ('connection.php'); ?>
          <form action="login.php" method="post" >
            <div>
              <label for="email" >Email</label>
              <input type="text"  name="username" id="username" placeholder="Enter email" >
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
                <button type="submit" name="submit" id="submit" name="submit" class="btn btn-success "> Login</button>
              </div>
          </form>
