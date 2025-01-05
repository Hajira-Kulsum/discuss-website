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
