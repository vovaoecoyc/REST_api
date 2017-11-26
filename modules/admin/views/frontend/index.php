<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="http://cdn.webix.com/edge/webix.css" type="text/css">
    <script src="http://cdn.webix.com/edge/webix.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    <!--<link rel="stylesheet" href="codebase/skins/touch.css" />!-->
    </head>
    <body>
      
    <div class="row">
        <div class="col-sm-3" id = "menu" ></div>
        <div class="col-sm-9" id = "main" ></div> 
    </div>
        
      
      <?php 
        $r = json_encode($dataProviderR);
        $r1 = json_encode($dataProviderR1);
        $e = json_encode($dataProviderE);
      ?>
        <script type="text/javascript" charset="utf-8">
        function Inexcel(){
          webix.toExcel($$("tableR"));
          webix.toExcel($$("tableE"));
        }
        function Inpdf(){
          webix.toPDF($$("tableR"));
          webix.toPDF($$("tableE"));
        }
        var sel,selr, sele;
        var r = '<? echo($r) ?>';
        var r1 = '<? echo($r1) ?>';
        var e = '<? echo($e) ?>';

        webix.ready(function(){
        var graph1 = webix.ui({
          container: "main",
          view:"chart", id: "g1",
                  width: 900,
                  height: 600,
                  type:"spline",
                  value:"#value#",
                  color:"#f6960a",
                  label: "value",
                  border:true,
                  xAxis:{
                      template:"#time#"
                  },
                  yAxis:{
                      start:-5000,
                      end:30000,
                      step:5000,
                  },
                  data: e
        });
        graph1.hide();

          var main = webix.ui({
            container: "menu",
            height: 1000,
            rows: [{cols:[{view: "button", height: 70, value: "Сохранить таблицу в формате Excel", click: Inexcel},
                    {view: "button",  height: 70, value: "Сохранить таблицу в формате PDF", click: Inpdf},
                    {view:"resizer"}]},
            {
            cols: [ 

                    {  
                        view:"list", id: "lst", template: "<span class='webix_icon fa-#icon#'></span> #value#", width: 300, container: "menu",
                        borderless:true, //scroll: false,
                        select: true,
                        datatype: "json",
                        data:
                        [
              
                          {view: "button", id: 1, value: "Показания таблиц", icon: "database"},
                          {view: "button", id: 2, value: "Текуще показатели", icon: "file"},
                        ],
                        click: function(id){
                                if(id == 1)  {selr = r;sele = e;graph1.hide();$$("tableR").define("data", selr);$$("tableE").define("data", sele); 
                                  dataTable1.show(); dataTable2.show();
                                } 
                                if(id == 2)  {graph1.show();dataTable1.hide(); dataTable2.hide(); }
                        }
                    },
                    {view:"resizer"}

                  ]
          }
        
        ]
        
      });
      var dataTable1 = webix.ui({
          container: "main",
          height: 500,
           view: "datatable", id: "tableR", autoConfig: true, data: selr
      });
      dataTable1.hide(); 
      var dataTable2 = webix.ui({
          container: "main",
          height: 500,
           view: "datatable", id: "tableE", autoConfig: true, data: sele
      });
      dataTable2.hide();
      });
      
        </script>
       
    </body>
</html>