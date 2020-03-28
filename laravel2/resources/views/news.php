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

      .news {
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
      }

      .news__block {
        width: 500px;
        text-align: center;
        margin: 0 auto;
      }

      .news__block h1 {
        font-family: 'arial', sans-serif;
        font-size: 40px;
        text-transform: uppercase;
      }

      .news__block__text {
        background-color: #000;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .news__block__text p {
        font-size: 20px;
        color: #26c19a;
      }

      .news__block__menu {
        width: 200px;
        margin: 0 auto;
        background-color: #000;
      }

      .news__block__menu ul {
        display: flex;
        justify-content: space-between;
      }

      .news__block__menu a {
        font-size: 30px;
        color: #fff;
        font-weight: bold;
        transition: all .2s linear;
      }

      .news__block__menu a:hover {
        color: #26c19a;
      }
    </style>

    <div class="news">
      <div class="news__block">
        <h1>News</h1>

        <div class="news__block__text">
            <p>В России, согласно последним официальным данным, число зараженных — 658, 410 случаев заражения зафиксированы в Москве, 41 — в Московской области и 21 — в Санкт-Петербурге. За последние сутки выявлено 163 случая заражения.</p>
        </div>

        <div class="news__block__menu">
          <ul>
            <li><a href="<?= $welcome ?>">Welcome</a></li>
            <li><a href="<?= $data ?>">Data</a></li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
