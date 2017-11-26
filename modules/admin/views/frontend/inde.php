<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css">
        <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    </head>
    <body>
    <div class="row">
        <div class="col-sm-3" id = "menu" ></div>
        <div class="col-sm-9" id = "main" ></div> 
    </div>
    
    
    <script type = "text/javascript">
    //webix.ajax().get("/modules/admin/models/admin/sms.php", {action: "Передали", id: 1});
    /*webix.ajax("/modules/admin/views/sms/index.php", function(text){
        webix.message(text); //show server side response
    });*/
    webix.ready(function(){
        var menu = webix.ui({
        
        
        });
        //var rest = webix.proxy("rest", "localhost/datatable_rest.php");
        var dataTable1 = webix.ui({
            container: "main",
            height: 500,
            view: "datatable", id: "t1", load: "rest->/admin/", save: "rest->/admin/"
        });
        
        var dataTable2 = webix.ui({
            container: "main",
            height: 500,
            view: "datatable", id: "t2", url: "/modules/admin/controllers/EvidencesController.php", autoConfig: true, save:true
        });
    });
    //$$("dataTable1").load("/modules/admin/controllers/FrontendController.php");
        
    </script>
    
    
    </body>
</html>