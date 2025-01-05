/*
<div class="main-container">
<div class="container">
        <h2>Sign Up</h2>
        <form action="./server/requests.php" method="POST">
            <div class="group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
            </div>
            <div class="group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Choose a username" required>
            </div>
            <div class="group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>
           
            <button type="submit" class="btn" name="signUp">Sign Up</button>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="./?login=true">Login</a></p>
        </div>
    </div>
</div>
*/

<div class="container">
<h1 class="heading">Signup </h1>

<form method="post" action="./server/requests.php">
  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="enter user name">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">User Email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="enter user email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="enter user password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">User Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="enter user address">
  </div>
  <div class="col-6 offset-sm-3 margin-bottom-15">
  <button type="submit" name="signup" class="btn btn-primary">Signup</button>

  </div>

</form>

</div>