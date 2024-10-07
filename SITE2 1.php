<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>


    <style>
        body{
            padding: 0;
            margin: 0;
            color: #ffffff;
        }
        
        .parte1, .parte3{
            background: rgb(18,14,25);
            background: linear-gradient(90deg, rgba(18,14,25,1) 15%, rgba(19,1,33,1) 28%, rgba(57,20,82,1) 81%, rgba(101,15,133,1) 100%);
        }

        .parte2, .parte4{
            background: black;
        }

        /* imagens */
        img{
            width: 100%; 
            height: 100%;
            border-radius: 30px;
            /* se colocar 100% nos dois, ele não ultrapassa o comprimento da altura e largura da div principal */
        }

       /*----------------------------------------------------------------------------------------------  PARTE 1  -----------------------*/ 
        
        .parte1{
            width: 100%;
            height: 850px;
            background-color: blueviolet;
        }

        /* classe header */
        .inicio{
            width: 1200px;
            height: 850px;
            margin: auto;
        }
        
        .topo, .baixo{
            width: 1200px;
            height: 80px;
            float: left;
            margin-top: 30px;
        }

        /*-----------------------------------------------------------------------------------------------  ICONE  ---------------------------*/

        .posicaoIcone{
            width: 100px;
            height: 80px;
            float: left;
            align-content: center;
            margin-top: 0px;
        }

        .icone{
            width: 80px;
            height: auto;
            margin: auto;
            margin-top: 0px;
        }
        
        /*----------------------------------------------------------------------------------------------------  EMAIL  -------------------------*/

        .posicaoEmail{
            width: 270px;
            height: 50px;
            align-content: center;
            float: left;
            margin-top: 25px;
            font-size: 12pt;
            font-weight: bold; /*para a fonte ficar em negrito  */
            text-align: center;
            cursor: pointer;
            color: white;
        }

        .posicaoEmail:hover {
            color: purple;
            transition: color 0.3s ease;
        }

        /*------------------------------------------------------------------------------------------------------  MENU ---------------------------*/
        .posicaoMenu{
            width: 700px;
            height: 100px;
            float: left;
            display: flex;
            justify-content: space-between;
            list-style: none;   /* para que os itens do menu(da lista) não ficarem com aqueles pontos no começo, como uma lista */
            align-items: center;
            margin-left: 130px;
            margin-top: 5px;
            cursor: pointer;
            
        }

        li, a{
            margin: auto;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
        }

        .botaoContratar{
            background-color: #4e1bb0;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 20px;
            cursor: pointer; 
            transition: background-color 0.3s ease-in-out; 
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); /* box-shadow: [sombra horizontal] [sombra vertical] [raio de desfoque: o quão borrada a sombra aparece.] [raio de propagação: tamanho da sombra.] [cor: tom de preto com uma opacidade de 20% (representado por rgba(0, 0, 0, 0.2)).];
            }  */
        }

        .botaoContratar:hover{
            background-color: white;
            color: purple;
        }
        
        /*---------------------------------------------------------------------------------------------------------  PORTIFOLIO  ----------------------*/

        /* caixa do portifolio */
        .descricaoPortifolio{
            width: 650px;
            height: 400px;
            float: left;
            margin: auto;
            align-content: center;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
        }

        /*eu sou camilly */
        h1.titulo1{
            width: 300px;
            font-size: 30pt;
            font-family: arial;
            margin-top: 10px;
            margin-left: 6px;
        }
        
        /* descrição portifolio */
        p.paragrafo1{
            font-size: 35pt;
            margin: 5px;
            color: purple;
            margin-top: 0px;
            font-family: arial black;;
        }

        /* textinho abaixo da descrição do portifolio */
        .miniparagrafo{
            width: 600px;
            height: 70px;
            float: left;
            font-size: 25px;
            font-family: arial;
            margin-top: 35px;
            margin-left: 6px;
        }

        /*---------------------------------------------------------------------------------------------------------------  FOTO DO PORTIFOLIO ---------------*/

        .areaFoto{
            width: 500px;
            height: 500px;
            float: right;
            align-content: center;
            background: #2a1454;
            margin-top: 40px;
            border-radius: 30px;
            border-color: #751fb8;
            cursor: default;
            transition: background-color 0.5s ease; /* Animation for hover effect */
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            /* border-width:                      Define a espessura da borda. 
            border-style:                        Define o estilo da borda (sólido, pontilhado, tracejado, etc).
            border-color: 
            transition: transform 0.3s ease-in-out; /* Transição suave */
            transform: skewX(-3deg); /* comando para a incrinção da foto */

        }

        .areaFoto:hover{
            background-color: #4e1bb0;
            transform: skewX(0deg);
        }

        /* posição da foto */
        .fotoPortifolio{
            width: 490px;
            height: 490px;
            margin: auto;
            margin-top: 5px;
            
        }

        /*---------------------------------------------------------------------------------------------------------------------  RODAPÉ  ----------------------------*/
        .baixo{
            display: flex;
            margin-top: 50px;
        }
        /* area dos N do rodapé */
        .numTextoBaixo{
            width: 120px;
            height: 100px;
            margin: auto;
            display: flex;
            align-items: center;
            font-family: arial black;
        }

        h3.numTexto{
            font-size: 65px;
            text-align: center;
        }

        p.textoBaixo{
            font-size: larger;
            margin-left: 10px;
        }

        /*---------------------------------------------------------------------------------------------------------------  PARTE 2 ---------------*/
        .parte2{
            width: 100%;
            height: 800px;
        }

        .caixaDeCima{
            width: 1200px;
            height: 200px;
            float: left;
            margin-left: 420px;
            margin-top: 150px;
            text-align: center;
        }

        .retanguloTitulo{
            width: 1000px;
            height: 90px;
            float: left;
            margin-left: 10px;
            margin-top: 0px;
            font-size: 45px;
            font-family: arial black;
            color: #751fb8;
        }

        .retanguloSubtitulo{
            width: 650px;
            height: 50px;
            float: left;
            margin-left: 200px;
            margin-top: 0px;
            font-size: 25px;
            font-family: arial;
        }

        .caixaDosQuatro {
            width: 1150px;
            height: 450px;
            display: flex;
            flex-direction: column;
            margin-left: 390px;
            margin-top: 250px;
        }

        .retangulo1{
            width: 1100px;
            height: 100px;
            background-color: black; /* cor do retangulo antes  */
            color: white; /* cor da fonte antes */
            cursor: pointer;
            border: 1px solid #000;
            margin-bottom: 20px;
            align-content: center;
            display: flex;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }   

        .retangulo1:hover { /* estilo do botão depois do mouse passar */
            background-color: #751fb8; /* cor do retangulo depois do mouse passar em cima */
            color: white; /* cor do texto */
        }



        .number1{
            width: 40px;
            height: 30px;
            font-size: 24px;
            font-weight: bold;
            margin-top: 35px;
            margin-left: 40px;
        }
        
        .title1{
            width: 500px;
            height: 50px;
            font-size: 36px;
            font-family: arial black;
            margin-top: 20px;
        }

        .paragraph1{
            width: 450px;
            height: 80px;
            font-size: 18px;
            font-family: arial;
            margin-left: 50px;
            margin-top: 20px;
        }

        .retangulo2{
            width: 1100px;
            height: 100px;
            background-color: black; /* cor do retangulo antes  */
            color: white; /* cor da fonte antes */
            cursor: pointer;
            border: 1px solid #000;
            margin-bottom: 20px;
            align-content: center;
            display: flex;
            transition: background-color 0.3s ease;
        }   

        .retangulo2:hover { /* estilo do botão depois do mouse passar */
            background-color: #751fb8; /* cor do retangulo depois do mouse passar em cima */
            color: white; /* cor do texto */
        }

        .number2{
            width: 40px;
            height: 30px;
            font-size: 24px;
            font-weight: bold;
            margin-top: 35px;
            margin-left: 40px;
            
        }

        .title2{
            width: 500px;
            height: 50px;
            font-size: 36px;
            font-family: arial black;
            margin-top: 20px;
        }

        .paragraph2{
            width: 450px;
            height: 80px;
            font-size: 18px;
            font-family: arial;
            margin-left: 50px;
            margin-top: 20px;
        }
        
       /* -------------------------------------------------------------------------------------------------------------------- PARTE 3 -----------------------------*/
        .parte3{
            width: 100%;
            height: 800px;
        }

        .caixaTituloPrincipal3{
            width: 1000px;
            height: 150px;
            float: left;
            margin-left: 450px;
            margin-top: 35px;
            text-align: center;
        }

        .retanguloTitulo3{
            width: 1000px;
            height: 55px;
            float: left;
            margin-left: 15px;
            margin-top: 5px;
            font-size: 45px;
            font-family: arial black;
            color: #751fb8;
        }

        .retanguloSubtitulo3{
            width: 600px;
            height: 50px;
            float: left;
            margin-left: 200px;
            margin-top: 20px;
            font-size: 25px;
            font-family: arial;
        }        

        .areaProjetos{
            width: 1200px;
            height: 940px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
        }

        .posicaoProjetos{
            width: 500px;
            height: 450px;
            margin: 20px 50px;
            align-content: center;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 11%, rgba(71,9,121,1) 46%, rgba(44,16,73,1) 70%);
            flex-direction: column;
            position: relative; /* Cria um contexto de posicionamento */
            z-index: 1;
            
        }

        .nomeProjeto{
            width: 350px;
            height: 60px;
            margin-left: 75px;
            font-size: 20px;
            font-family: arial black;
            text-align: center;
            border-radius: 20px;
            background-color: transparent; /* Fundo transparente para o elemento */
            color: transparent; /* Texto transparente */
            opacity: 0; /* Garante que o elemento esteja completamente invisível */
            transition: all 0.3s ease-in-out; /* Aplica a transição a todas as propriedades */
            position: absolute; /* Posiciona o texto sobre o fundo */
            top: 350px; /* Ajusta a posição vertical */
            left: 10px; /* Ajusta a posição horizontal */
            z-index: 2;
            color: white;
        }

        .posicaoProjetos:hover .nomeProjeto {
            background-color: #751fb8;
            color: white;
            opacity: 1;
        }

        .descricaoProjeto{
            width: 350px;
            height: 110px;
            margin-left: 75px;
            font-size: 16px;
            font-family: arial;
            text-align: center;
            border-radius: 20px;
            background-color: transparent; /* Fundo transparente para o elemento */
            color: transparent; /* Texto transparente */
            opacity: 0; /* Garante que o elemento esteja completamente invisível */
            transition: all 0.3s ease-in-out; /* Aplica a transição a todas as propriedades */
            position: absolute; /* Posiciona o texto sobre o fundo */
            top: 380px; /* Ajusta a posição vertical */
            left: 10px; /* Ajusta a posição horizontal */
            z-index: 3;
            color: white;
        }

        .posicaoProjetos:hover .descricaoProjeto {
            background-color: #751fb8;
            color: white;
            opacity: 1;
        }
            
        .projeto{
            width: 400px;
            height: 400px;
            margin-top: 10px;
            margin-left: 50px;
            
        }
        
    /*-----------------------------------------------------------------------------------------------------------------------------  PARTE 4 -------------------------*/
        .parte4{
            width: 100%;
            height: 800px;
        }

        .caixaTitulos{
            width: 1100px;
            height: 100px;
            float: left;
            margin-left: 400px;
            margin-top: 200px;
            align-content: center;
            display: flex;
            justify-content: space-between;
        }

        .caixinhaEsquerda{
            width: 500px;
            height: 10sss0px;
            font-family: arial black;
            font-size: 45px;
        }

        .caixinhaDireita{
            width: 500px;
            height: 100px;
            font-family: arial black;
            font-size: 45px;
        }


        .caixinhaExperiencia{
            width: 500px;
            height: 150px;
            background-color: #2a1454;
            font-family: arial black;
            font-size: 45px;
            flex-direction: column;
            display: flex;
            float: left;
            margin-left: 380px;
            border: none;
            border-radius: 20px;
            cursor: pointer; 
            transition: background-color 0.3s ease; 
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }

        .caixinhaExperiencia:hover{
            background-color: #4e1bb0;
        }

        .anosExperiencia{
            width: 200px;
            height: 32px;
            font-size: 20px;
            font-family: arial black;
            margin-left: 30px;
            margin-top: 15px;
            color: blueviolet;
        }

        .oque{
            width: 200px;
            height: 40px;
            font-size: 35px;
            font-family: arial black;
            margin-left: 30px;
        }

        .onde{
            width: 200px;
            height: 30px;
            font-size: 20px;
            font-family: arial;
            margin-left: 30px;
            margin-top: 18px;
        }

        .caixinhaEducacao{
            width: 500px;
            height: 150px;
            background-color: blueviolet;
            font-family: arial black;
            font-size: 45px;
            align-content: center;
            display: flex;
            float: right;
            margin-right: 430px; 
            background-color: #2a1454;
            flex-direction: column;
            display: flex;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease; 
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }

        .caixinhaEducacao:hover{
            background-color: #4e1bb0;
            color: white;
        }

        .anosEducacao{
            width: 350px;
            height: 32px;
            font-size: 20px;
            font-family: arial black;
            margin-left: 30px;
            margin-top: 15px;
            color: blueviolet;
        }

        .oque{
            width: 350px;
            height: 40px;
            font-size: 35px;
            font-family: arial black;
            margin-left: 30px;
        }

        .onde{
            width: 350px;
            height: 30px;
            font-size: 20px;
            font-family: arial;
            margin-left: 30px;
            margin-top: 18px;
        }

    /* ----------------------------------------------------------------------------------------------------------------------------  PARTE 5 ----------------------- */
       
        .parte5 {
            width: 100%;
            height: 900px;
            display: flex;
            background: rgb(18,14,25);
            background: linear-gradient(90deg, rgba(18,14,25,1) 15%, rgba(19,1,33,1) 28%, rgba(57,20,82,1) 81%, rgba(101,15,133,1) 100%);
        }

        .areaEsquerda{
            width: 900px;
            height: 700px;
            float: left;
            display: flex;
            flex-direction: column;
            margin-left: 200px;
            margin-top: 50px;
            flex-direction: column;
        }

        .ultimoTitulo{
            width: 720px;
            height: 75px;
            float: left;
            font-size: 55px;
            font-family: arial black;
            color: #751fb8;
            margin-left: 85px;
            margin-top: 50px;
        }

        .ultimoSubtitulo{
            width: 750px;
            height: 70px;
            float: left;
            margin-left: 80px;
            margin-top: 20px;
            font-family: arial;
            font-size: 20px;
        }

        /* area do formulario */
        form {
            width: 800px;
            height: 350px;
            background: rgb(18,14,25);
            background: linear-gradient(90deg, rgba(18,14,25,1) 15%, rgba(19,1,33,1) 28%, rgba(57,20,82,1) 81%, rgba(101,15,133,1) 100%);
            border-radius: 10px;
            float: left;
            margin-left: 50px;
            margin-top: 15px;
        }

        /* informações do formulario */
        input, textarea {
            width: 750px;
            padding: 10px;
            margin-bottom: 10px; 
            background-color: #333;
            color: white;
            float: left;
            margin-left: 15px;
            margin-top: 10px;
            font-family: arial;
        }

        button{
            background-color: #4e1bb0;
            color: #fff;
            padding: 5px 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            float: left;
            transition: background-color 0.3s ease-in-out; 
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            font-family: arial;
            margin-left: 15px;
        }

        button:hover{
            background-color: white;
            color: #751fb8;
        }

        .areaDireita{
            width: 700px;
            height: 700px;
            float: right;
            display: flex;
            flex-direction: column;
            margin-right: 50px;
            margin-top: 100px;
            font-family: arial;
        }

        .areaTelefone{
            width: 200px;
            height: 80px;
            display: flex;
            flex-direction: column;
            float: right;
            margin-top: 250px;
        }

        .telefone{
            width: 300px;
            height: 30px;
            font-size: 20px;
            color: darkgrey;
        }

        .numeroTelefone{
            width: 300px;
            height: 40px;
            font-size: 25px;
        }

        .numeroTelefone:hover {
            color: purple;
            transition: color 0.3s ease;
        }

        .areaEmail{
            width: 200px;
            height: 80px;
            display: flex;
            flex-direction: column;
            float: right;
            margin-top: 10px;
        }

        a{
            font-size: 25px;
            font-weight: bold; /*para a fonte ficar em negrito  */
            text-align: center;
            cursor: pointer;
            
        }

        .enderecoEmail, a /* esse a é para o "link" */{
            color: white;
        }

        .enderecoEmail, a:hover {
            color: purple;
            transition: color 0.3s ease;
        }

        .ultimoEmail{
            width: 300px;
            height: 30px;
            font-size: 20px;
            color: darkgrey;
        }

        .enderecoEmail{
            width: 500px;
            height: 40px;
            font-size: 25px;
            cursor: pointer;
        }

        a{
            font-size: 25px;
            font-weight: bold; /*para a fonte ficar em negrito  */
            text-align: center;
            cursor: pointer;
            
        }

        .enderecoEmail, a /* esse a é para o "link" */{
            color: white;
        }

        .enderecoEmail, a:hover {
            color: purple;
            transition: color 0.3s ease;
        }
        
    </style>

</head>

<body>
    <!-----------------------------------------------------------------------------------------------------------------------------  DIV 1 ---------------------------->
    <section class="parte1">
        <header class="inicio">
            <div class="topo">
                <div class="posicaoIcone">
                    <div class="icone">
                        <img src="img/oig5.jpeg" alt="Icone">
                    </div>
                </div>

                <div class="posicaoEmail">
                    <a href="mailto:camilly.broerman@fatec.sp.gov.br">camilly.broerman@fatec.sp.gov.br</a>
                </div>
                <div class="posicaoMenu">
                    <li><a href="https://www.bing.com/images/create/gumball-from-the-amazing-world-of-gumball-saying-27/1-66f9d32f3ac6459b8ef944ae7a3a5c36?id=6AV00m%2bgixHBDpRS7%2bbNmA%3d%3d&view=detailv2&idpp=genimg&idpclose=1&thId=OIG3.NppVX3EFcPKK9K5tVKRu&frame=sydedg&skey=aWeJITo3sC_DuvjSCDlrOtRyFWr7IVrgd_DihVv9RLE&FORM=SYDBIC" target="_blank" class="li, a">Sobre mim</a></li>
                    <li><a href="https://www.bing.com/images/create/gumball-from-the-amazing-world-of-gumball-saying-27/1-66f9d32f3ac6459b8ef944ae7a3a5c36?id=6AV00m%2bgixHBDpRS7%2bbNmA%3d%3d&view=detailv2&idpp=genimg&idpclose=1&thId=OIG3.NppVX3EFcPKK9K5tVKRu&frame=sydedg&skey=aWeJITo3sC_DuvjSCDlrOtRyFWr7IVrgd_DihVv9RLE&FORM=SYDBIC" target="_blank" class="li, a">Serviços</a></li>  
                    <li><a href="https://www.bing.com/images/create/gumball-from-the-amazing-world-of-gumball-saying-27/1-66f9d32f3ac6459b8ef944ae7a3a5c36?id=6AV00m%2bgixHBDpRS7%2bbNmA%3d%3d&view=detailv2&idpp=genimg&idpclose=1&thId=OIG3.NppVX3EFcPKK9K5tVKRu&frame=sydedg&skey=aWeJITo3sC_DuvjSCDlrOtRyFWr7IVrgd_DihVv9RLE&FORM=SYDBIC" target="_blank" class="li, a">Portifólios</a></li>
                    <li><a href="https://www.bing.com/images/create/gumball-from-the-amazing-world-of-gumball-saying-27/1-66f9d32f3ac6459b8ef944ae7a3a5c36?id=6AV00m%2bgixHBDpRS7%2bbNmA%3d%3d&view=detailv2&idpp=genimg&idpclose=1&thId=OIG3.NppVX3EFcPKK9K5tVKRu&frame=sydedg&skey=aWeJITo3sC_DuvjSCDlrOtRyFWr7IVrgd_DihVv9RLE&FORM=SYDBIC" target="_blank" class="li, a">Contato</a></li>
                    <li><a href="https://th.bing.com/th/id/OIG4.Xc8UIR1kL_j4fCMIrTLO?w=1024&h=1024&rs=1&pid=ImgDetMain" target="_blank" class="botaoContratar">Contrate-me!</a></li>

                
                </div>
                
                
            </div>

            <div class="descricaoPortifolio">
                <h1 class="titulo1">Eu sou Camilly</h1>
                <p class="paragrafo1">Estudante de Gestão de Tecnologia da informação</p>
                <div class="miniparagrafo">Fazendo um atividade para aula de programação para internet</div>

                
            </div>

            <div class="areaFoto">
                <div class="posicaoFoto"></div>
                <div class="fotoPortifolio">
                    <img src="img/oig15.jpeg" alt="foto do portifolio">
                </div>
            </div>

            <div class="baixo">
                    <div class="numTextoBaixo">
                    <h3 class="numTexto">2</h1>
                    <p class="textoBaixo">Anos de experiência</p>
                </div>
                <div class="numTextoBaixo">
                    <h3 class="numTexto">3</h1>
                    <p class="textoBaixo">Projetos concluídos</p>
                </div>
                <div class="numTextoBaixo">
                    <h3 class="numTexto">N</h1>
                    <p class="textoBaixo">Clientes felizes</p>
                </div>
                <div class="numTextoBaixo">
                    <h3 class="numTexto">2</h1>
                    <p class="textoBaixo">Anos de experiência</p>
                </div>
            </div>
        </header>
    </section>
<!--------------------------------------------------------------------------------------------------------------------------------------  DIV 2------------------------>
    <section class="parte2">
        <div class="caixaDeCima">
        <div class="retanguloTitulo">Quais Serviços eu poderia oferecer</div>
        <div class="retanguloSubtitulo">Quais tipos de seriviços eu poderia oferecer com base no que eu aprendi ao longo do curso</div>
        </div>
  
        <div class="caixaDosQuatro">
        <div class="retangulo1">
            <div class="number1">01</div>
            <div class="title1">Criação de sites simples</div>
            <div class="paragraph1">Desenvolvimento basico de um site utilizando HTMIL e CSS</div>
        </div>
        <div class="retangulo2">
            <div class="number2">02</div>
            <div class="title2">Modelagem de sistemas</div>
            <div class="paragraph2">Criação de diamgramas UML para modelar sistemas e processos</div>
        </div> 
        
    </div>

    <!--------------------------------------------------------------------------------------------------------------------------------------  DIV 3 ------------------->
    </section>

    <section class="parte3">
    <div class="caixaTituloPrincipal3">
        <div class="retanguloTitulo3">Meus projetos em desenvolvimento</div>
        <div class="retanguloSubtitulo3">Ideias que estão sendo desenvolvidas durante o curso</div>
        </div>

        <div class="areaProjetos">
            <div class="posicaoProjetos">
                <div class="nomeProjeto">Easy view</div> 
                <div class="descricaoProjeto">Um projeto que visa facilitar o acesso a informações referentes ao transporte coletivo da cidade através de painéis digitais</div>
                <div class="projeto">
                    <img src="img/oig11.png" alt="">
                    
                </div>
            </div>
            <div class="posicaoProjetos">
                <div class="nomeProjeto">Book stream</div>
                <div class="descricaoProjeto">Uma biblioteca online que permite aos usuários ler livros diretamente no navegador, sem a necessidade de download. O site integra a funcionalidade de tradução automática do Chrome, permitindo que livros internacionais sejam traduzidos em tempo real.</div>
                <div class="projeto">
                    <img src="img/oig12.jpg" alt="">
                </div>

            </div>
        </div>
    </section>
<!--------------------------------------------------------------------------------------------------------------------------------  DIV 4 ---------------------------->
    <section class="parte4">
        <div class="caixaTitulos">
            <div class="caixinhaEsquerda">Minha Experiência</div>
            <div class="caixinhaDireita">Minha educação</div>
        </div>

        
            <div class="caixinhaExperiencia">
                <div class="anosExperiencia">0 experiência</div>
                <div class="oque">inexistente</div>
                <div class="onde">Lugar nenhum</div>
            </div>


            <div class="caixinhaEducacao">
            <div class="anosEducacao">2023 - Cursando</div>
                <div class="oque">Curso GTI</div>
                <div class="onde">Fatec de São Sebastião</div>
            </div>
        </div>
    </section>


    <section class="parte5">
    <div class="areaEsquerda">
      <div class="ultimoTitulo">Vamos trabalhar juntos</div>
      <div class="ultimoSubtitulo">Preencha o formulário e desse sua mensagem sobre o serviço que quer contratar</div>
   
      <form>
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="sobrenome" placeholder="Sobrenome">
        <input type="email" name="email" placeholder="Seu   email">
        <input type="tel" name="telefone" placeholder="Seu telefone">
        <textarea name="mensagem" placeholder="Sua mensagem"></textarea>
        <button type="submit">
            <a href="https://i0.wp.com/omeudiadia.com.br/wp-content/uploads/2022/04/mili.jpg?resize=700%2C500&ssl=1">Enviar</a>
        </button>
      </form>
      </div>
    </div>
    <div class="areaDireita">
        <div class="areaTelefone">
            <div class="telefone">Telefone</div>
            <div class="numeroTelefone">(12)98313-2864</div>
        </div>
        <div class="areaEmail">
            <div class="ultimoEmail">Email</div>
            <div class="enderecoEmail">
                    <a href="mailto:camilly.broerman@fatec.sp.gov.br">camilly.broerman@fatec.sp.gov.br</a>
                </div>
        </div>
      </div>
    </section>

</body>
</html>