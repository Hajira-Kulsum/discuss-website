<!-- nav bar code -->
<nav class="navbar">
    <ul>
        
        <li><a href="./">Home</a></li>
        <?php if (isset($_SESSION['user']['username'])): ?>
            <li><a href="./server/requests.php?logOut=true">Log Out</a></li>
            <li><a href="?ask=true">Ask question</a></li>
        <?php else: ?>
            <li><a href="?login=true">Login</a></li>
            <li><a href="?signUp=true">Sign Up</a></li>
        <?php endif; ?>
        <li><a href="#contact">discuss</a></li>
    </ul>
</nav>
