<?php include 'header.php'; ?>

    <div class="form-login">
        <h1>Login</h1>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
            <a href="register.html">New customer? Start here.</a>
        </form>

    </div>

    <?php include 'footer.php'; ?>
</body>
</html>