<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Site Dinâmico</title>
    <meta name="keywords" content="site,dinamico,projeto">
    <meta name="description" content="Descrição do meu site">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div>
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>    
    </header>

    <section class="banner-principal">
    <div class="overlay"></div>    
        <div class="center">
            <form>
                <h2>Qual seu melhor email?</h2>
                <input type="email" name="email" required />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div>    
    </section>

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Dérick Trennepohl</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui. Sed dignissim eros elit, id elementum augue sodales sit amet. Aenean congue lacus non erat cursus viverra. Curabitur semper tellus nec euismod finibus. Sed rutrum vel urna tincidunt ornare. Praesent vel nunc dignissim, varius lorem ut, lobortis elit. Donec vitae odio non nibh malesuada suscipit. Mauris eleifend vel ex eu ornare. Donec in nisi quis dolor luctus tincidunt vitae quis purus. Nunc elementum arcu tellus, id euismod justo vehicula et. Donec venenatis, dolor ac pretium ullamcorper, massa mi ultrices sapien, eget cursus sapien augue a erat. Pellentesque lacinia tincidunt metus ac vulputate. Suspendisse molestie, ipsum nec malesuada laoreet, libero mi sodales felis, nec sagittis augue mi vel tellus. Aliquam erat volutpat. Nulla vulputate lectus in turpis consectetur aliquet.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui. Sed dignissim eros elit, id elementum augue sodales sit amet. Aenean congue lacus non erat cursus viverra. Curabitur semper tellus nec euismod finibus. Sed rutrum vel urna tincidunt ornare. Praesent vel nunc dignissim, varius lorem ut, lobortis elit. Donec vitae odio non nibh malesuada suscipit. Mauris eleifend vel ex eu ornare. Donec in nisi quis dolor luctus tincidunt vitae quis purus. Nunc elementum arcu tellus, id euismod justo vehicula et. Donec venenatis, dolor ac pretium ullamcorper, massa mi ultrices sapien, eget cursus sapien augue a erat. Pellentesque lacinia tincidunt metus ac vulputate. Suspendisse molestie, ipsum nec malesuada laoreet, libero mi sodales felis, nec sagittis augue mi vel tellus. Aliquam erat volutpat. Nulla vulputate lectus in turpis consectetur aliquet.</p>
            </div>
        </div>        
        <div class="w50 left">
            <img class="right" src="images/foto.jfif" />
        </div>
        <div class="clear"></div>
    </section>

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h3>CSS3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h3>HTML5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-gg-circle" aria-hidden="true"></i></h3>
                <h3>JAVASCRIPT</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget</p>
            </div>
        </div>
    </section>

    <section class="extras">
        <div class="center">
            <div class="w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div>
            </div>
            <div class="w50 left">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a odio laoreet, tristique quam eget, euismod dui.</li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <footer>
        <div class="center">
            <p>Todos os diretos reservados</p>
        </div>
    </footer>
</body>
</html>