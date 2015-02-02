<!DOCTYPE html>
<html>
<!-- Copyright TheLocken LLC 2015 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>My App</title>
    <link rel="stylesheet" href="ui/css/framework7.css">
    <link rel="stylesheet" href="ui/css/framework7.min.css">
	<link rel="stylesheet" href="ui/css/framework7.themes.css">
	<link rel="stylesheet" href="ui/css/f7-2.css">
    <style>
      .statusbar-overlay {
        background: SkyBlue;
      }
    </style>
</head>
<body>
    <div class="views">
        <div class="view view-main">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="left"></div>
                        <div class="center sliding">Through Navbar</div>
                            <div class="right"></div>
                </div>
            </div>
                <div class="pages navbar-through toolbar-through">
                    <div data-page="home" class="page">
                        <div class="page-content">
                            <div class="content-block">
    <p><a href="custom/">About page</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse at nibh felis. Nunc consequat diam et tellus tempor gravida. Donec hendrerit aliquet risus, ut tempor purus dictum sit amet. Integer sit amet lacus eget ipsum pulvinar interdum. Proin semper turpis sed placerat dapibus. Sed iaculis id nibh a viverra. Sed vitae tellus sed purus lacinia dignissim. Aenean sagittis interdum leo in molestie. Aliquam sodales in diam eu consectetur. Sed posuere a orci id imperdiet.</p>
    <p>Donec et nulla auctor massa pharetra adipiscing ut sit amet sem. Suspendisse molestie velit vitae mattis tincidunt. Ut sit amet quam mollis, vulputate turpis vel, sagittis felis. Vestibulum ornare ut eros vitae adipiscing. Vestibulum volutpat justo enim, ullamcorper vulputate sapien lacinia vel. Integer sed justo ultrices augue tincidunt dictum eu vel orci. Mauris sodales auctor diam vel condimentum.</p>
    <p>Praesent mauris purus, faucibus vel hendrerit at, dapibus quis lorem. Sed placerat fermentum blandit. Suspendisse potenti. Cras sollicitudin laoreet tellus, ut gravida leo eleifend convallis. Sed pharetra nisl quis libero fermentum pharetra. Cras lacinia quam turpis, eget varius risus interdum sit amet. Quisque laoreet tortor dui, vitae accumsan lacus fringilla in. Quisque consequat placerat risus, non ornare felis scelerisque quis. Sed adipiscing diam tellus, vel faucibus mauris rhoncus vel. Vestibulum eu ultrices tortor, non suscipit lorem. Mauris tellus nulla, volutpat quis lacus eu, scelerisque adipiscing dui. Nullam nec tempor sem, nec pulvinar sapien. Etiam blandit condimentum vehicula.</p>
    <p>Praesent nec imperdiet diam. Maecenas vel lectus porttitor, consectetur magna nec, viverra sem. Aliquam sed risus dolor. Morbi tincidunt ut libero id sodales. Integer blandit varius nisi quis consectetur. Nulla pellentesque elementum ligula vitae porta. Nunc sollicitudin mi quis mi mattis cursus. Nulla diam felis, ullamcorper eget lacinia ac, auctor id velit. Fusce enim nunc, egestas a augue vitae, malesuada tincidunt risus. Nullam fringilla, enim nec porta iaculis, enim leo pharetra nunc, eget rutrum tortor dui et risus. Etiam sit amet molestie dolor. Curabitur ultrices justo ut augue ornare, vel pharetra libero adipiscing. Duis rhoncus a felis ac venenatis. Duis posuere non leo vitae tincidunt. Integer luctus arcu ut risus posuere, vel vehicula ipsum elementum. Duis et cursus sapien. </p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="toolbar">
                        <div class="toolbar-inner"><a href="#" class="link">Hello</a><a href="#" class="link">World</a></div>
                    </div>
        </div>
    </div>
<script type="text/javascript" src="../dist/js/framework7.min.js"></script>
<script>
      var myApp = new Framework7();
      var mainView = myApp.addView('.view', {
        dynamicNavbar: true
      });
    </script>
</body>
</html>