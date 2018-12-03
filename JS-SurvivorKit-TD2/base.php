<!DOCTYPE html>
<head>
 
    <meta charset="utf-8" />
 
    <title>Kit de Survie JS</title>
    <meta name="description" content="">
 
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <style>
    	body{ font-family: 'Quicksand', sans-serif; }
	</style>

    <script src="jquery-3.2.1.min.js"></script>

    <script type="text/javascript">
    
    	$(document).ready(function(){

    		$('#conteneur').load('exo2.html #div_button',function(){

                $('#button1').click(function(){
                    $('#conteneur_info').text("chargement du contenu");
                    setTimeout(
                        function() 
                        {
                            $('#conteneur_info').hide();
                            $('#conteneur_content').load('exo2.html #content_button1');  
                        }, 2000);
                              
                })

                $('#button2').click(function(){
                    $('#conteneur_content').load('exo2.html #content_button2');               
                })
            })
    	});
   	</script>
</head>
<body>
    <div id="conteneur"></div>
    <div id="conteneur_content"></div>
    <div id="conteneur_info"></div>
</body>
 
</html>