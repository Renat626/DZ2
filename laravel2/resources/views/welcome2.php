<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>welcome</title>
  </head>
  <body>
    <style>
      * {
        margin: 0;
        padding: 0;
      }

      a {
        text-decoration: none;
      }

      li {
        list-style-type: none;
      }

      .welcome {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
      }

      .welcome__block {
        width: 500px;
        text-align: center;
        margin: 0 auto;
      }

      .welcome__block h1 {
        font-family: 'arial', sans-serif;
        font-size: 40px;
        text-transform: uppercase;
      }

      .welcome__block__menu {
        width: 200px;
        margin: 0 auto;
        background-color: #000;
      }

      .welcome__block__menu ul {
        display: flex;
        justify-content: space-between;
      }

      .welcome__block__menu a {
        font-size: 30px;
        color: #fff;
        font-weight: bold;
        transition: all .2s linear;
      }

      .welcome__block__menu a:hover {
        color: #26c19a;
      }
    </style>

    <div class="welcome">
      <div class="welcome__block">
        <h1>Hello everybody1</h1>
        <div class="welcome__block__menu">
          <ul>
            <li><a href="<?= $data ?>">Data</a></li>
            <li><a href="<?= $news ?>">News</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
