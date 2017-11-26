<!DOCTYPE html>
<html>
<head>
	
	<meta http-equiv="content-type" content="text/html" charset="utf8" />
	<script type = "text/javascript" src = "jq/jquery-3.2.1.min.js"></script>
	<!--<script type = "text/javascript" src = "test.js"></script>!-->
	<!--<script type = "text/javascript" src = "ajaxconnect.js"></script>!-->
	<script type = "text/javascript" src = "getpostjq.js"></script>
	
	<link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css">
    <script src= "http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <script type = "text/javascript">
	function ch(msg){
		$(document).ready(function() {

		function funcB() {
			alert("Мы находимся в моменте времени до отправки!");
		}

		function funcS(data, d) {
			
			if(data == "error1")
				alert("Имя занято!")
			else alert("Имя свободно!");
			
			$('p').text(data + "GO");
		}


			$.ajax({
			url : "file.php",
			type : "POST",
			data : ({
				name: msg
			}),
			dataType : "html",
			beforeSend : funcB,
			success : funcS
			});
			
		});
	}
	webix.ready(function(){
        
        /*var mymenu = webix.ui({
        view: "sidemenu", id: "mym",
        body:{
            view:"list",   scroll: false,
            template: "<span class='webix_icon fa-#icon#'></span> #value#",
            data:[
               {id: 1, value: "Показания таблиц", icon: "user"},
               {id: 2, value: "ДБ", icon: "cube"},

            ]

            
        
        }
        
        });
      
        mymenu.show();*/
        webix.ui({
          /*rows: [
              { template:"Row One"},
              { template:"Row Two"}
          ],*/
          cols: [ {rows: [
              { type: "header", template:"Col Two", width: 200},
              {view: "sidemenu", id: "mym",
              body:{
              view:"list",   scroll: false,
              template: "<span class='webix_icon fa-#icon#'></span> #value#",
              data:[
               {id: 1, value: "Показания таблиц", icon: "user"},
               {id: 2, value: "ДБ", icon: "cube"},
              ]}
            },
            {view: "resizer"},

            ]},
            { template:"Col Two"}
          ]

      });

      

      });
	</script>
</head>	
<body>
	<div id = "id1" class = "myDiv1" style = "width:50; height:200; border:2px solid blue">
		<p id = "myid" class = "t">Текст</p>

	</div>
	
	<div id = "id2">
		<h3> Второй div </h3>
	</div>

<!--<input type = "text" name = "name" onchange = "check(this.value)" />!-->
<!--<input type = "text" name = "name" onchange ="ch(this.value)" />!-->

<br /><span id = "myspan">Клик!</span>

</body>

</html>