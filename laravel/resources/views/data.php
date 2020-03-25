<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>data</title>
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

      .data {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
      }

      .data__block {
        width: 500px;
        text-align: center;
        margin: 0 auto;
      }

      .data__block h1 {
        font-family: 'arial', sans-serif;
        font-size: 40px;
        text-transform: uppercase;
      }

      .data__block__text {
        background-color: #000;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .data__block__text p {
        font-size: 20px;
        color: #26c19a;
      }

      .data__block__menu {
        width: 200px;
        margin: 0 auto;
        background-color: #000;
      }

      .data__block__menu ul {
        display: flex;
        justify-content: space-between;
      }

      .data__block__menu a {
        font-size: 30px;
        color: #fff;
        font-weight: bold;
        transition: all .2s linear;
      }

      .data__block__menu a:hover {
        color: #26c19a;
      }
    </style>

    <div class="data">
      <div class="data__block">
        <h1>data</h1>

        <div class="data__block__text">
            <p>Это проект рассказывающий про короновирус в России.</p>
        </div>

        <div class="data__block__menu">
          <ul>
            <li><a href="<?= $welcome ?>">Welcome</a></li>
            <li><a href="<?= $news ?>">News</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
