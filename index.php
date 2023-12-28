<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>library login</title>
        <link rel="stylesheet" href="styles/index.style.css">
        <link rel="stylesheet" href="styles/animation.css">
    </head>
    <body>
        <header>
            <div class="header-logo">
                <img src="images/logo/logo.png" width="100px" height="100px">
            </div>
            <div class="header-title">
                <h1>Library System Management </h1>
            </div>
        </header>
        <div class="wrapper">
            <div class="form-box login">
                <h2>Login </h2>
                <form action="" method="post">
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <input type="text" name="username" id="username" required>
                        <label>UserName</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <input type="password" name="password"  required>
                        <label>Password</label>
                    </div>
                    <button type="submit" class="log-in">Login</button>
                </form> 
            </div>
        </div>

        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>