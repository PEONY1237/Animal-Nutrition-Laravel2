<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--icon/logo-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"/>

        <!-- Bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

        <!-- css -->
        <link href="{{ url('/css/about.css') }}" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <title>About ALF SAHEL</title>
    </head>

<body>

    @extends('index.Component')
    <main>

    @section('navbar')

        <!-- page web header -->
        <header>
            @parent
        </header>

        <!-- page body section -->
        <section>

            <!-- about -->
            <div class="about">
                <div class="about-title">
                    <h5>A propos de Nous</h5>
                    <h1>QUI EST ALF SAHEL</h1>
                </div>
                <div class="about-content">
                    <p> 
                        <h3>« Nous desservons désormais 30% du marché national et nous nous positionnons en tant que leaders de la filière des aliments composés pour animaux sur le plan national et en Afrique. »</h3> <br>
                        C'est avec une fierté non dissimulée que Charki M'hamed, directeur commercial d'Alf Sahel évoque la position de sa compagnie. La petite société qui avait été lancée en 2003 par la famille Moumen produit désormais chaque année 1 200 000 tonnes d'aliments composés pour animaux contre un peu plus de 200 000 tonnes à ses débuts.<br> 
                        Cette progression est le fruit d'une vision qui s'est traduite par une augmentation constante des capacités de production. <br>
                        En effet, Alf Sahel avait été, à l'origine, conçue pour satisfaire aux besoins de l'entreprise d'accouvage de la famille Moumen et la demande de ses clients en aliments. Elle a d'abord porté sa capacité de transformation annuelle à 344 000 tonnes puis à 600 000 tonnes avant de la doubler. <br>
                        Aujourd'hui le groupe mène son expansion dans des pays d'Afrique subsaharienne comme la Mauritanie, le Sénégal et la Côte d'Ivoire. <br>
                        Cependant cette montée en puissance ne se fait pas sans obstacle et le groupe doit lutter comme ses pairs contre la volatilité du cours des matières premières. <br>
                    </p>
                </div>
            </div>

        </section>

        <!-- gallery -->
        <div id="gallery" class="gallery">
            <div class="about-title">
                <h1>QUE FAIT ALF SAHEL</h1>
            </div>
            <div class="container">
                <div>
                    <div class="row justify-content-start">
                        <div class="col-4">
                            <img src="{{ URL('img/1.png') }}" />
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/7.jpg') }}" />
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/8.jpg') }}"/>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <img src="{{ URL('img/5.jpg') }}" />
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/2.jpg') }}" />
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/3.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <img src="{{ URL('img/9.jpg') }}"/>
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/4.jpg') }}" />
                        </div>
                        <div class="col-4">
                            <img src="{{ URL('img/19.jpg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <div class="wrapper">
            <h1>ALF SAHEL</h1>
            <div class="team">
                <div class="team_member">
                <div class="team_img">
                    <img src="{{ url('/img/24.jpg')}}" alt="Team_image">
                </div>
                <h3>Vision de ALF SAHEL</h3>
                <!-- <p class="role">UI developer</p> -->
                <p>ALF SAHEL aspire à être un leader incontesté dans le secteur de la nutrition animale, en fournissant des solutions de qualité supérieure qui contribuent à une production animale efficace, durable et respectueuse de l'environnement. L'entreprise vise à soutenir l'industrie agricole en offrant des produits de pointe et en établissant des partenariats solides avec les acteurs du secteur.</p>
                </div>
                <div class="team_member">
                <div class="team_img">
                    <img src="{{ url('/img/27.jpg')}}" alt="Team_image">
                </div>
                <h3>Réalisations de ALF SAHEL</h3>
                <!-- <p class="role">Tester</p> -->
                <p>1. Plus grand producteur d'aliments composés pour animaux au Maroc : ALF SAHEL a réussi à se positionner comme la plus grande entreprise marocaine dans la production d'aliments pour animaux, avec une capacité de production annuelle dépassant 1,2 million de tonnes.<br> <br>
                2. Investissement significatif : L'entreprise a réalisé un investissement cumulé de 850 millions de dirhams, démontrant son engagement à développer ses activités et à maintenir des normes élevées de qualité.<br> <br>
                3. Croissance et expansion : Depuis sa création en 2002, ALF SAHEL a connu une croissance constante et continue d'élargir sa portée et sa présence sur le marché marocain de la nutrition animale.</p></div>
                <div class="team_member">
                <div class="team_img">
                    <img src="{{ url('/img/14.jpg')}}" alt="Team_image">
                </div>
                <h3>Valeurs de ALF SAHEL </h3>
                <!-- <p class="role">Support Lead</p> -->
                <p>1. Engagement envers la qualité : ALF SAHEL accorde une grande importance à la fabrication d'aliments pour animaux sains et variés, en veillant à ce qu'ils répondent aux normes de qualité les plus élevées. <br> <br>
                2. Expertise et savoir-faire : L'entreprise met en avant son expertise et son expérience dans le domaine de la nutrition animale pour offrir des produits de qualité et des solutions adaptées aux besoins spécifiques des animaux. <br> <br>
                3. Innovation continue : ALF SAHEL s'engage dans la recherche et le développement pour améliorer continuellement ses produits et optimiser leur impact sur la santé et les performances des animaux.</p>
                </div>
            </div>
            </div>
        </div>
        
        @endsection

        <!-- Footer -->
        <footer>
            @section('Footer')
                @parent
            @endsection
        </footer>

    </main>

    <!-- css -->
    <style>
        /* dropdown */
        .dropdown:hover > .dropdown-content {
            display: block;
            overflow: visible;
            z-index: 1000;
        }

        @import url('https://fonts.googleapis.com/css?family=Allura|Josefin+Sans');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .wrapper{
            margin-top: 550px;
            padding: 55px;
            margin-bottom: 250px;
            background: #81B29A;
        }

        .wrapper h1{
            font-family: 'Allura', cursive;
            font-size: 52px;
            margin-bottom: 60px;
            text-align: center;
            margin-bottom: 250px;
        }

        .team{
            display: flex;
            justify-content: center;
            width: auto;
            text-align: center;
            flex-wrap: wrap;
        }

        .team .team_member{
            background: #fff;
            margin: 5px;
            margin-bottom: 50px;
            width: 500px;
            padding: 30px;
            line-height: 20px;
            color: #8e8b8b;  
            position: relative;
            border-radius: 50px;
        }

        .team .team_member h3{
            color: #81c644;
            font-size: 26px;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .team .team_member p.role{
            color: #ccc;
            margin: 12px 0;
            font-size: 12px;
            text-transform: uppercase;
        }

        .team .team_member .team_img{
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 100%;
            width: 100px;
            height: 100px;
            background: #fff;
        }

        .team_img img
        {
            border-radius: 100%;

        }

        .team .team_member .team_img img{
        width: 100px;
        height: 100px;
        padding: 5px;
        }

    </style>

    </body>
</html>