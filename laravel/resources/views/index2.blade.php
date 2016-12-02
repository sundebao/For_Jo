<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
      }
      ul,li{
        list-style: none;
      }
      /* top_nav */
      .top_nav{
        border: 1px solid red;
        width: 95%;
        margin: 0 auto;
        height: 50px;
      }
      .top_nav ul li{
        background: #ccc;
        float: left;
        width: 20%;
        height: 50px;
        line-height: 50px;
        text-align: center;
      }

      /* body */
      .body{
        border: 1px solid blue;
        width: 80%;
        height: 600px;
        margin: 0 auto;
      }

      /* footer */
      .footer{
        width: 95%;
        height: 100px;
        border: 1px solid red;
        margin: 0 auto;
      }

      /* body_left */
      .body_left{
        float: left;
        width: 70%;
        height: 100%;
        border: 1px solid pink;
      }

      /* body_right */
      .body_right{
        float: right;
        width: 20%;
        height: 100%;
        border: 1px solid green;
      }

      /* footer li */
      .footer ul li{
        background: #234587;
        float: left;
        width: 20%;
        height: 100px;
        line-height: 100px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <!-- top_nav -->
    <div class="top_nav">
      <ul>
        <li><a href="/laravel/public/element1">Element1</a></li>
        <li><a href="/laravel/public/element2">Element2</a></li>
        <li><a href="/laravel/public/element3">Element3</a></li>
        <li>Element4</li>
        <li>Element5</li>
      </ul>
    </div>

    <!-- body -->
    <div class="body">
      <div class="body_left">
        <center><h1>index2...</h1></center>
      </div>
      <div class="body_right">

      </div>
    </div>

    <!-- footer -->
    <div class="footer">
      <ul>
        <li>Element1</li>
        <li>Element2</li>
        <li>Element3</li>
        <li>Element4</li>
        <li>Element5</li>
      </ul>
    </div>

  </body>
</html>
