<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Site Dinâmico</title>
    <meta name="keywords" content="site,dinamico,projeto">
    <meta name="description" content="Descrição do meu site">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>style/style.css">
</head>
<body>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url){
            case 'sobre':
                echo '<target target="sobre" />';
                break;

            case 'servicos':
                echo '<target target="servicos" />';
                break;    
        }
    ?>
    <header>
        <div class="center">
            <div class="logo left"><a href="/">Logomarca</a></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>    
    </header>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            if($url != 'sobre' && $url != 'servicos'){
                $pagina404 = true;
                include('pages/404.php');
            }else{
                include('pages/home.php');
            }
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true || $url == 'contato') echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os diretos reservados</p>
        </div>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    <?php 
        if($url == 'contato'){
    ?>
    <!-- <script defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBl3oMGfEj9Yxm7lyssDXYzCewFCNQBAAs&callback=Function.prototype"></script> -->
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl3oMGfEj9Yxm7lyssDXYzCewFCNQBAAs&callback=Function.prototype"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script>
    <?php } ?>
</body>
</html>