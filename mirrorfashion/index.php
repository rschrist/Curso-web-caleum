<!DOCTYPE html>
<html>

  <head >

<!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- ajustando com essa tag no header para dispositivos mobile -->
	

    <title>Mirror Fashion</title>
    <meta charset="utf-8">
  <!-- ajustando com esse css no header para dispositivos mobile -->
	<meta name="viewport" content="width=device-width">
	

    <link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="css/reset.css">  
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
</head>


  <body>

<header class="container">
	<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>

 
  <p class="sacola">
    Nenhum item na sacola de compras
  </p>

  <nav class="menu-opcoes">
    <ul>
      <li><a href="#">Sua Conta</a></li>
      <li><a href="#">Lista de Desejos</a></li>
      <li><a href="#">Cartão Fidelidade</a></li>
      <li><a href="sobre.php">Sobre</a></li>
      <li><a href="#">Ajuda</a></li>

    </ul>

  </nav>
</header>


<div class="container destaque">

  <section class="busca">
    <h2>Busca</h2>

    <form>
      <input type="search">
      <input type="image" src="img/busca.png">
    </form>
  </section><!-- fim .busca -->

  <section class="menu-departamentos">
    <h2>Departamentos</h2>

    <nav>
    	
      <ul>
        <li><a href="#">Blusas e Camisas</a>
  <ul>
    <li><a href="#">Manga curta</a></li>
    <li><a href="#">Manga comprida</a></li>
    <li><a href="#">Camisa social</a></li>
    <li><a href="#">Camisa casual</a></li>
  </ul>
        </li>

        <li><a href="#">Calças</a></li>
        <li><a href="#">Saias</a></li>
        <li><a href="#">Vestidos</a></li>
        <li><a href="#">Sapatos</a></li>
        <li><a href="#">Bolsas e Carteiras</a></li>
        <li><a href="#">Acessórios</a></li>
      </ul>

    </nav>
  </section><!-- fim .menu-departamentos -->

  <img src="img/destaque-home.png" alt="Promoção: Big City Night">
</div><!-- fim .container .destaque -->

<div class="container paineis">
  <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->

  <section class="painel novidades">
    <h2>Novidades</h2>
    <ol>

  <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura1.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
 <!-- 2 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura2.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>

          
        </a>
      </li>
 <!-- 3 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura3.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>

          
        </a>
      </li>


      <!-- coloque mais produtos aqui! -->
    </ol>

     <ol>

    <!-- 2 coluna coloque vários produtos aqui -->
    <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura4.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura5.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura6.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>

  </ol>
  </section>

  <section class="painel mais-vendidos">
  <h2>Mais Vendidos</h2>
  <ol>

    <!-- coloque vários produtos aqui -->
    <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura7.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura8.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura9.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>

  </ol>

   <ol>

    <!-- 2 coluna coloque vários produtos aqui -->
    <!--1 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura10.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--2 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura11.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>
      <!--3 produto -->
      <li>
        <a href="produto.html">
          <figure>
            <img src="img/produtos/miniatura12.png">
            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
          </figure>


        </a>
      </li>

  </ol>
</section>

<?php include("rodape.php"); ?>

</div>





     
  </body>
</html>