<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pizzeria Sole Machina</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script
      src="https://kit.fontawesome.com/3bf5bd898b.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="topnav">
          <a href="/index.php" id="logo"
            ><i class="fa-solid fa-pizza-slice"></i>
            <b>Pizzeria Sole Machina</b></a
          >
          <div class="topnav-menu">
            <a href="/login.php"><i class="fa-solid fa-user"></i></a>
            <a href="/shopping-cart.php"
              ><i class="fa-solid fa-cart-shopping"></i
            ></a>
            <a href="/index.php">Menu</a>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="login-container">
        <div class="login-block">
          <div class="login-background"></div>
          <div class="login-form">
            <form action="/orders.php" method="post">
              <h2>Employee login</h2>
              <input type="email" placeholder="johndoe@gmail.com" required />
              <input type="password" placeholder="password" required />
              <input type="submit" value="login" />
            </form>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <ol>
        <li>&copy; Marco</li>
        <li><a href="privacy.php">Privacy verklaring</a></li>
      </ol>
    </footer>
  </body>
</html>
