{"filter":false,"title":"mailf7.php","tooltip":"/2/mailf7.php","undoManager":{"mark":16,"position":16,"stack":[[{"group":"doc","deltas":[{"start":{"row":47,"column":24},"end":{"row":47,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":47,"column":24},"end":{"row":47,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":63,"column":21},"end":{"row":63,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":63,"column":21},"end":{"row":63,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":65,"column":24},"end":{"row":65,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":65,"column":24},"end":{"row":65,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":88,"column":21},"end":{"row":88,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":88,"column":21},"end":{"row":88,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":90,"column":24},"end":{"row":90,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":90,"column":24},"end":{"row":90,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":107,"column":21},"end":{"row":107,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":107,"column":21},"end":{"row":107,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":109,"column":24},"end":{"row":109,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":109,"column":24},"end":{"row":109,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":129,"column":21},"end":{"row":129,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":129,"column":21},"end":{"row":129,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":131,"column":24},"end":{"row":131,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":131,"column":24},"end":{"row":131,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":150,"column":21},"end":{"row":150,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":150,"column":21},"end":{"row":150,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":152,"column":24},"end":{"row":152,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":152,"column":24},"end":{"row":152,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":167,"column":21},"end":{"row":167,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":167,"column":21},"end":{"row":167,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":169,"column":24},"end":{"row":169,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":169,"column":24},"end":{"row":169,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":183,"column":21},"end":{"row":183,"column":32},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":183,"column":21},"end":{"row":183,"column":36},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":185,"column":24},"end":{"row":185,"column":35},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":185,"column":24},"end":{"row":185,"column":39},"action":"insert","lines":["ichangerapp.com"]},{"start":{"row":211,"column":47},"end":{"row":211,"column":58},"action":"remove","lines":["ichanger.tk"]},{"start":{"row":211,"column":47},"end":{"row":211,"column":62},"action":"insert","lines":["ichangerapp.com"]}]}],[{"group":"doc","deltas":[{"start":{"row":73,"column":30},"end":{"row":73,"column":42},"action":"remove","lines":["Like Dislike"]},{"start":{"row":98,"column":30},"end":{"row":98,"column":42},"action":"remove","lines":["Like Dislike"]},{"start":{"row":117,"column":30},"end":{"row":117,"column":42},"action":"remove","lines":["Like Dislike"]},{"start":{"row":139,"column":30},"end":{"row":139,"column":42},"action":"remove","lines":["Like Dislike"]}]}],[{"group":"doc","deltas":[{"start":{"row":40,"column":0},"end":{"row":40,"column":12},"action":"remove","lines":["\t\tMail Icons"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":35},"end":{"row":40,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":40,"column":35},"end":{"row":40,"column":39},"action":"remove","lines":["</p>"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":35},"end":{"row":40,"column":5},"action":"remove","lines":["","\t\t<p>"]}]}],[{"group":"doc","deltas":[{"start":{"row":38,"column":38},"end":{"row":39,"column":71},"action":"remove","lines":["","\t\t<div class=\"content-block-title\">Experimental-Opens New Message</div>"]}]}],[{"group":"doc","deltas":[{"start":{"row":0,"column":0},"end":{"row":29,"column":0},"action":"remove","lines":["<?php","// TheLocken iChanger 2 Authentication Handler and Carrier","","\t// Convert ?user=USERNAME to USERNAME","$user_name = '' . htmlspecialchars($_GET[\"user\"]) . '';","$user_display = '' . htmlspecialchars($_GET[\"user\"]) . '';","","\t// take username ($userraw) and turn it into ?user=USERNAME","","$uend = \"?user=$userraw&user_display=$user_display\";","$userraw = '' . htmlspecialchars($_GET[\"user\"]) . '';","\t","\t// if userraw = \"\" (no user) set userraw to NULL","","if ( $userraw == \"\" ) {","\t$userraw = \"NULL\";","\t$user_display = \"Not Logged In\";","}","","?>","  <link rel=\"stylesheet\" href=\"ui/css/load.css\">","  <script src=\"http://www.lockenfiles.tk/cdn/jquery-1.11.1.min.js\"></script>","  <script type=\"text/javascript\">","    $(window).load(function() {","\t$(\".loader\").fadeOut(\"slow\");","    })","    // <a href=\"#\" id=\"simClickElement\" class=\"beta-warning\">BETA WARNING</a>","  </script>","\t  <div class=\"loader\"></div>",""]}]}],[{"group":"doc","deltas":[{"start":{"row":3,"column":40},"end":{"row":3,"column":53},"action":"remove","lines":["iChanger 2 - "]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":49},"end":{"row":2,"column":50},"action":"remove","lines":["7"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":48},"end":{"row":2,"column":49},"action":"remove","lines":["f"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":48},"end":{"row":2,"column":49},"action":"insert","lines":["v"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":49},"end":{"row":2,"column":50},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":50},"end":{"row":2,"column":51},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":51},"end":{"row":2,"column":52},"action":"insert","lines":["w"]}]}],[{"group":"doc","deltas":[{"start":{"row":2,"column":56},"end":{"row":2,"column":77},"action":"remove","lines":["<?php print $uend; ?>"]}]}],[{"group":"doc","deltas":[{"start":{"row":178,"column":6},"end":{"row":179,"column":90},"action":"remove","lines":["","<script type=\"text/javascript\" src=\"http://www.ichangerapp.com/js/alerts.js?v=2\"></script>"]}]}]]},"ace":{"folds":[],"scrolltop":2608.5,"scrollleft":0,"selection":{"start":{"row":178,"column":6},"end":{"row":178,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":152,"state":"start","mode":"ace/mode/php"}},"timestamp":1424231532427,"hash":"e0881fd213300f731bd12d15ce47c6fe8f04f6f7"}