<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenidos</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <?php  echo $this->Html->css('bootstrap.min'); ?>
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php  echo $this->Html->css('font-awesome.min'); ?>
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <?php  echo $this->Html->css('AdminLTE'); ?>
        <?php echo $this->fetch('css'); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black"><br><br><br>
<div class="margin text-center">
                <span></span>
                
                
                
                

            </div>
        <div class="form-box" id="login-box">
            <div class="header bg-blue">Iniciar Sesion</div>
            
                <div class="body bg-gray">
                    <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>     
                    <div class="form-group">
                        
                    </div>
                </div>
                
            

            <div class="footer">                                                               
                    
                </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <?php  echo $this->Html->script('jquery.min'); ?>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>   
        <?php  echo $this->Html->script('bootstrap.min'); ?>     
         <?php echo $this->Html->script('jquery-2.1.1.min'); ?>
         <?php echo $this->Html->script('jquery-ui'); ?>
         
    

    </body>
</html>