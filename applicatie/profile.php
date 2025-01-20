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
            <a href="/login.php"><i class="fa-solid fa-user"></i> john</a>
            <a href="/shopping-cart.php"
              ><i class="fa-solid fa-cart-shopping"></i
            ></a>
            <a href="/index.php">Menu</a>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="nav-spacer"></div>
      <h2>Profile (previous orders)</h2>
      <div class="container-orders">
        <div class="cards-orders">
          <div class="card-orders">
            <details>
              <summary><b>Order 001</b></summary>
              <p>Cheese pizza</p>
              <p>Pepperoni pizza</p>
              <b>Status: onderweg</b>
            </details>
          </div>
        </div>
        <div class="cards-orders">
          <div class="card-orders">
            <details>
              <summary><b>Order 002</b></summary>
              <p>Cheese pizza</p>
              <p>Pepperoni pizza</p>
              <b>Status: afgeleverd</b>
            </details>
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
</html>