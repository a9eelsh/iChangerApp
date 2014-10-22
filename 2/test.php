<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>My App</title>
<link rel="stylesheet" href="http://www.idangero.us/framework7/dist/css/framework7.min.css">
</head>
<body>
<div class="views">
<div class="view view-main">
<div class="navbar">
<div class="navbar-inner">
<div class="left"></div>
<div class="center sliding">Smart Select Custom</div>
<div class="right"></div>
</div>
</div>
<div class="pages navbar-through">
<div data-page="home" class="page">
<div class="page-content">
<div class="list-block">
<ul>
<li><a href="#" data-page-title="Awesome Fruits" data-back-text="Go back" class="item-link smart-select">
<select name="fruits">
<option value="apple" selected>Apple</option>
<option value="pineapple">Pineapple</option>
<option value="pear">Pear</option>
<option value="orange">Orange</option>
<option value="melon">Melon</option>
<option value="peach">Peach</option>
<option value="banana">Banana</option>
</select>
<div class="item-content">
<div class="item-inner">
<div class="item-title">Fruit</div>
</div>
</div></a></li>
<li><a href="#" data-page-title="Super Cars" data-back-text="Go back" class="item-link smart-select">
<select name="car">
<option value="mercedes">Mercedes</option>
<option value="bmw">BMW</option>
<option value="volvo">Volvo</option>
<option value="vw" selected>Volkswagen</option>
<option value="toyota">Toyota</option>
<option value="cadillac">Cadillac</option>
<option value="nissan">Nissan</option>
<option value="mazda">Mazda</option>
<option value="ford">Ford</option>
<option value="chrysler">Chrysler</option>
<option value="dodge">Dodge</option>
</select>
<div class="item-content">
<div class="item-inner">
<div class="item-title">Car</div>
</div>
</div></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="../dist/js/framework7.min.js"></script>
<script>
      var myApp = new Framework7({
        animateNavBackIcon:true
      }); 
      var mainView = myApp.addView('.view-main', {
        dynamicNavbar: true,
      });
    </script>
</body>
</html>