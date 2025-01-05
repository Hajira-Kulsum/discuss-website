<div class="main-container">
    <div class="container">
        <h2>Login</h2>
        <form action="./server/requests.php " method="POST">
            <div class="group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            </div>
            <div class="group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            </div>
            <button type="submit" class="btn" name="login">Login</button>
        </form>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
    </div>
</div>