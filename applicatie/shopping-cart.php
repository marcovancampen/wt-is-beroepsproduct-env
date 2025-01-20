

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
      <div class="nav-spacer"></div>
      <div class="container-shopping">
        <div class="cards-shopping">
          <div class="card-shopping">
            <img src="./pictures/cheese_pizza.jpeg" alt="Avatar" />
            <div class="container-card-shopping">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            <a href="#" class="btn-primary"
              ><i class="fa-solid fa-trash-can"></i
            ></a>
          </div>
          <div class="card-shopping">
            <img src="./pictures/cheese_pizza.jpeg" alt="Avatar" />
            <div class="container-card-shopping">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            <a href="#" class="btn-primary"
              ><i class="fa-solid fa-trash-can"></i
            ></a>
          </div>
          <div class="card-shopping">
            <img src="./pictures/cheese_pizza.jpeg" alt="Avatar" />
            <div class="container-card-shopping">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
            <a href="#" class="btn-primary"
              ><i class="fa-solid fa-trash-can"></i
            ></a>
          </div>
        </div>
        <div class="order-shopping">
          <h2>Order</h2>
          <form action="/index.php" method="post">
            <fieldset>
              <label>Name:</label>
              <input type="text" />
            </fieldset>
            <fieldset>
              <label>Adress:</label>
              <input type="text" />
            </fieldset>
            <fieldset>
              <label>Phone:</label>
              <input type="tel" />
            </fieldset>
            <fieldset>
              <label>Special instructions:</label>
              <textarea></textarea>
            </fieldset>
            <input type="submit" />
          </form>
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
