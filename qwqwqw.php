<?php
/*
Template Name: Template-Accueil Main
*/

// Votre code ici

get_header();
the_content();



?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap');
            
        /* animation bounce 

        @-webkit-keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
            40% {-webkit-transform: translateY(-30px);} 
            60% {-webkit-transform: translateY(-15px);} 
         } 
         
         @keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);} 
            40% {transform: translateY(-30px);} 
            60% {transform: translateY(-15px);} 
         } 

         */
         
        .buttonNew {
            display: inline-block;
            font-family: 'Hind Siliguri', sans-serif;
            transform: scale(1.33);
        }

        .buttonNew:after {
            content:'';
            display: block;
            clear: both;
        }

        .buttonNew .button-title {
            width: 150px;
            background-color: #ebecee;
            padding: 15px 20px;
            color: #333;
            text-align: center;
            border-radius: 0px 0px 0px 0px;
            float: left;
            position: relative;
            font-weight:700;
            overflow:hidden !important;
            height: 54px;
        }

        .buttonNew .button-title span {
            display: block;

        }
        
        .buttonNew .button-title span:first-child {
            opacity:1;
            transition:.4s;
            transform: translate(0px , 0px);
        }

        .buttonNew .button-title span:last-child {
            opacity:1;
            transition:.4s;
            transform: translate(0px , -60px);
        
        }   

        .buttonNew .button-icon {
            width: 66px;
            background-color: #FFF;
            padding: 15px 20px;
            color: #000;
            text-align: center;
            float: left;
            border-radius: 0px 0px 0px 0px;
            position: relative;
            overflow: hidden;
           /*  background-image:url('http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/10/WhatsApp-Image-2020-10-16-at-12.04.54.jpeg');
            background-size:20px;
            background-repeat: no-repeat;
            background-position:center center; */

        }
        
        .buttonNew .button-icon span {
         transform: translate(0px, 3px);
            display: block;
            height: 24px;
            transition:.4s;
        }

        .buttonNew .button-icon:after {
            content: '\f004';
            font-family: fontAwesome;
            display: block;
            clear: both;
            width: 100%;
            height: 0%;
            background-color: #e53888;
            position: absolute;
            top: 0px;
            left: 0px;
            transition: .4s;
            z-index: 99;
            border-radius: 0px 0px 0px 0px;
            color:transparent;           

        }




        .buttonNew:hover .button-icon:after {
            height: 100%;
            color: #FFF;
            padding-top: 15px;
            -webkit-animation-name: bounce; 
            animation: bounce 1s; 

        }

        @-webkit-keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);} 
            40% {-webkit-transform: translateY(-30px);} 
            60% {-webkit-transform: translateY(-15px);} 
         } 
         
         @keyframes bounce { 
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);} 
            40% {transform: translateY(-30px);} 
            60% {transform: translateY(-15px);} 
         }


        .buttonNew:hover .button-title span:last-child {
            opacity:1;
            transform: translate(0px , -23px);
            
        }

        .buttonNew:hover .button-title span:first-child {
            opacity:0;
            transform: translate(0px , 37px);
        }
        
        .buttonNew:hover .button-icon span {
          transform: translate(0px , 40px);
        }



    #masthead{
        position: fixed;
        z-index: 9999;
        width: 100%;
    }

    .Ligne{
        width: 900px;
        margin: auto;
        height: 100%;
        border-right: 1px solid rgba(255,255,255,0.2);
        border-left: 1px solid rgba(255,255,255,0.2);
    }

    html{
        margin-top: 0px !important;
    }
    body{
        background-color:white !important;
    }
 
    #site-header{
        background-color: #FFFFFF !important;
    }

    #menu-menu-principale > li > a{
        color: black !important;
    }

    #menu-item-10 > a:hover {
        color: black !important;
    }
    #menu-item-11 > a:hover {
        color: black !important;
    }
    #menu-item-12 > a:hover {
        color: black !important;
    }
    #menu-item-13 > a:hover {
        color: black !important;
    }
    #menu-item-14 > a:hover {
        color: black !important;
    }
    
    #menu-item-10:hover {
        color: black !important;
    }
    #menu-item-11:hover{
        color: black !important;
    }
    #menu-item-12:hover{
        color: black !important;
    }
    #menu-item-13:hover {
        color: black !important;
    }
    #menu-item-14:hover {
        color: black !important;
    }
    .colorB{
        background-color: #202020 !important;
    }
    #content{
        width:100% !important;
    }
    .H2Header{
        padding-top: 40% !important;
        font-size: 6.5em !important;
        color: white !important;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif  !important;
        width: 600px  !important;
        margin-left:10% !important;
        line-height: 1 !important;
        font-weight: 700 !important;
    }
    .montreal{
        color: white !important;
        margin-left: 10.5% !important;
        font-size: 1.5em !important;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif !important;
        font-weight: 700 !important;
    }
    .myVideo {
          right: 0;
          bottom: 0;
    }

/*
    .fp-viewing-1 > div > div > #masthead{
        display: none;
    }

    .fp-viewing-2 > div > div > #masthead{
        display: none;
    }
    .fp-viewing-3 > div > div > #masthead{
        display: none;
    }
    .fp-viewing-4 > div > div > #masthead{
        display: none;
    }
    .fp-viewing-5 > div > div > #masthead{
        display: none;
    }

    .fp-viewing-0 > div > div > #masthead{
        display: block !important;
    }
*/
    #content-wrapper{
            margin-top:0px !important;
        }

    .imgFond{
        background-image: url('http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/GifTransparent.gif');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;

    }

    #BoiteVf{
        width: 900px;
        height: 100%;
        margin: auto;
        border-right: 1px solid black;
        border-left: 1px solid black;
    }
    .IconFacebook{
        position: relative;
        color: black;
        float: right;
        top: 200px;
        font-size: 2em;
        right: 20px;
        transform: rotate(90deg);
    }
    .IconFacebookTel{
        position: absolute;
        color: black;
        float: right;
        top: 5%;
        font-size: 2em;
        left: 15%;
        transform: rotate(90deg);
    }

    .IconInsta{
        position: relative;
        color: black;
        float: right;
        top: 240px;
        font-size: 2em;
        transform: rotate(90deg);
    }
    .IconInstaTel{
        position: absolute;
        color: black;
        float: right;
        top: 9%;
        left: 15%;   
        font-size: 2em;
        transform: rotate(90deg);
    }
    .IconLink{
        position: relative;
        color: black;
        float: right;
        top: 280px;
        right:-25px;
        font-size: 2em;
        transform: rotate(90deg);
    }
    .IconLinkTel{
        position: absolute;
        color: black;
        float: right;
        top: 13%;
        left: 15%;
        font-size: 2em;
        transform: rotate(90deg);
    }
    .IconMail{
        position: relative;
        color: black;
        float: right;
        top: 320px;
        font-size: 2em;
        transform: rotate(90deg);
        right: -51px;
    }
    .IconMailTel{
        position: absolute;
        color: black;
        float: right;
        top: 17%;
        left: 15%;
        font-size: 2em;
        transform: rotate(90deg);
    }
    .h3VF{
        position: relative;
        color: black;
        float: right;
        top: 240px;
        right: -130px;
        font-weight: 500;
        font-size: 2em;
        transform: rotate(90deg);
    }
    .btnVFRond{
        background-color: white;
        height: 200px;
        width: 200px;
        border-radius: 200px;
        margin: auto;
        text-align: center;
        top: 40vh;
        position: relative;
    }
    .btnVFRond > h4{
        font-weight: 700 !important;
        
    }
    .LinkBtnRond:hover > .btnVFRond{
        background-color: #202020 !important;
    }
    .LinkBtnRond:hover > .btnVFRond > h4{
        color: white;
    }

    .ImgCasino{
        position: absolute;
        margin: auto !important;
        left: 37%;
        top: 100px;
        z-index: 9999 !important;
        width: 400px;
    }

    .BtnTout{
        position: absolute;
        bottom: 200px;
        margin: auto;
        left: 42%;
        z-index:9999;
    }
    .btnBlanc{
        float: left;
        background-color: white;
        padding-top: 18px;
        height: 60px;
        width: 200px;
        font-size: 1.5em;
        text-align: center;
    }
    .BtnRose{
        height: 60px;
        width: 60px;
        background-color: #E43889;
        float: left;
    }
    #ImgArc{
        height: 21px;
        position: relative;
        left: 19px;
        top: 17px;
    }

    .BtnTout:hover > .btnBlanc{
        background-color: #E43889;
        color:white !important;
    }
    .BtnTout:hover > .BtnRose{
        background-color: white;
        color:white !important;
    }

    .h3VFTel {
        position: absolute;
        color: black;
        float: right;
        top: 10%;
        text-align: left;
        left: 14%;
        font-weight: 500;
        font-size: 2em;
        transform: rotate(90deg);
    }

    .imgFondPorteParole{
            background-image: url('http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/MecLunette.jpg');
            background-size: cover;
            background-repeat: no-repeat;
    }

    .VersionTel{
        display: none;
    }

    .PongTel{

        color: white !important;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif !important;
        line-height: 1 !important;
        font-weight: 700 !important;
        font-size: 5em !important;
        width: 350px !important;
        margin-left: 20% !important;
        margin-bottom: 100px !important;
    }

    .LinkReseaux:hover > i{
        color: #7c3a5f !important;
    }

    .ModifVideo{
        min-width: inherit !important;   
        height: 1100px !important;   
        width: 110% !important;   
        margin-left: -100px !important; 
        max-width: inherit !important; 
        z-index: 1;
    }

    .Rond{
        height: 1000px;
        width: 1000px;
        position: absolute;
        bottom: -30%;
        right: -10%;
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 1000px;
    }





    @media only screen and (max-width: 1550px) {

        .ModifVideo{
            min-width: 100% !important;   
            height: 100% !important;
            margin-left: 0px !important; 
            max-width: 100% !important; 
        }

        .H2Header {
            padding-top: 40% !important;
        }

        .VideoPrem{
            width: 100% !important;
        }

        .Rond{

            bottom: -50%;
            right: -20%;

        }

    }

    @media only screen and (max-width: 992px) {

        .ClassBtn{
            position: absolute;
            bottom: 20%;
            width: 100%;
        }

        .ClassImgLoto{
            text-align: center;
            position: absolute;
            width: 100%;
            top: 50px;
        }
        .ClassImgLoto > img{

            top: 0px !important;
        }

        #masthead{
            position: fixed !important;
            z-index: 9999;
            width: 100%;
        }

        #fullpage{
            margin-top: 50px;
        }

        .imgFondPorteParole{
                background-image: url('http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/LunetteTel.jpg') !important;
        }

        .Rond{
            display: none !important;
        }

        .Ligne{
            border:0px !important;
            width: inherit !important;
        }

        .myVideo {
              right: 0;
              bottom: 0;
              min-height: 100%;
              min-width: 100%;
              max-width: 100% !important;
        }

        .H2Header{
            font-size: 5em !important;
            width: 500px !important;
            margin-left: 20% !important;
        }

        .PongTel{

            font-size: 5em !important;
            width: 350px !important;
            margin-left: 20% !important;
        }


        #IdTraitVFTel{
            height: 100%;
            width: 1px;
            background-color: black;
            position: absolute;
            left: 20%;
            z-index: 9999;
            top: 0;
        }

        #VFTel > a > div{
            vertical-align: middle;
            display: table-cell;
            top: 50%;
        }

        .montreal{
            margin-left: 20% !important;
        }

        .VersionOrdi{
            display: none;
        }

        .VersionTel{
            display: block;
        }

        .BtnTout {
            position: relative;
            width: 260px;
            margin: auto;
            left: inherit !important;
            bottom: -50px;
        }

        .marginleft{
            margin-left: 10% !important;
        }

        #ImgArc {
            height: 21px;
            position: relative;
            left: 0px !important;
            top: 17px;
        }

    }

    @media only screen and (max-width: 650px) {
        .H2Header{
            font-size: 3.2em !important;
            width: 300px !important;
            margin-left: 10% !important;
            padding-top: 50% !important;
        }

        .btnVFRond{
            height: 150px !important;
            width: 150px !important;
        }

        .btnVFRond > h4{
            font-size:1em !important;
            margin-bottom:0px !important;
        }

        .LinkBtnRond{
            margin-left: -70px !important;
        }

        .montreal{
            margin-left: 10.5% !important;
        }

        .PongTel{

            font-size: 3.2em !important;
            width: 200px !important;
            margin-left: 10% !important;

        }

    }

    @media only screen and (max-width: 590px) {
        .IconInstaTel{
            top:10% !important;
        }
        .IconLinkTel{
            top:16% !important;
        }
        .IconMailTel{
            top:22% !important;
        }
        .h3VFTel{
            top:15% !important;
        }
    }

    @media only screen and (max-width: 450px) {
        .IconInstaTel{
            left: 10% !important;
        }
        .IconLinkTel{
            left: 10% !important;
        }
        .IconMailTel{
            left: 10% !important;
        }
        .IconFacebookTel{
            left: 10% !important;
        }
        .btnVFRond{
            height: 150px;
            width: 150px;
        }
        .h3VFTel{
            left: 8%;
        }
    }







    @media only screen and (max-height: 880px) {
        .H2Header{
            padding-top: 50% !important;
        }
    }



</style>
<div id="IdVersionOrdi">
<div id="fullpage">

    <div class="section colorB" data-vidbg-bg="mp4:http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/10/Creators-Unity_2.mp4" data-vidbg-options="loop: true, muted: true, overlay: false"> 
        
        <div class="Ligne">
            <h2 class="H2Header"><?php the_field('h1_header'); ?></h2>
            <p class="montreal"><?php the_field('montreal'); ?></p>
            
            
            
        </div>

        <div class="Rond"></div>

    </div>

    <div class="section" data-vidbg-bg="mp4: http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/07/katapub_promo_v18_18sec_720.mp4" data-vidbg-options="loop: true, muted: true, overlay: false">
        
<div style="text-align:center;">
        <a href="">
        <div style="margin-top:450px;" class="buttonNew">       
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>
    </div>
    
    
    <div class="buttonNew">
        <a href="#">
            <div>Project</div>
            <div><span class="pjf-katapub-Rainbow"></span></div>
        </a>
    </div>
<!--
    <div class="section">



        <video class="myVideo VersionOrdi VideoPrem" height="100%" autoplay="autoplay" muted="muted" loop="loop" controls="true" playsinline style="max-width: inherit !important;">
            <source src="<?php the_field('video'); ?>" type="video/mp4">
        </video>

        
        <iframe class="VersionOrdi" src="http://www.youtube.com/embed/3QSFPknPpXQ?autoplay=1&controls=0&loop=1&playlist=3QSFPknPpXQ&amp;showinfo=0" width="100%" height="100%"></iframe>
        -->
<!--
        <video class="myVideo VersionTel" autoplay="autoplay" muted="muted" loop="loop" controls="true">
            <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/katapub_promo_v19_9x16_18sec_720.mov" type="video/mp4">
        </video>
    
    
        <iframe  class="VersionTel" width="100%" height="100%" src="https://www.youtube.com/embed/WAtM3_9tOgk?autoplay=1&controls=0&loop=1&playlist=WAtM3_9tOgk&amp;showinfo=0" frameborder="0"></iframe>




    </div>
        --> 
            <!-- Line Effect Start  -->
            
            
           
    <div class="section imgFond">

        <div id="BoiteVf" class="VersionOrdi">
            <a class="LinkReseaux" target="_blank" href="https://www.facebook.com/Katapub/"><i class="fab fa-facebook-f IconFacebook"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.instagram.com/katapub/"><i class="fab fa-instagram IconInsta"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca"><i class="fab fa-linkedin-in IconLink"></i></a>
            <a class="LinkReseaux" target="_blank" href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fas fa-envelope IconMail"></i></a>

            <h3 class="h3VF">SUIVEZ<br> NOS PROJETS</h3>
            <a href="#" class="LinkBtnRond"><div class="btnVFRond"><h4>Nos projets<h4></div></a>
            
           
            
        </div>

        <div id="VFTel" class="VersionTel" style="text-align: center">
            <a href="#" class="LinkBtnRond" style="position: absolute;"><div class="btnVFRond"><h4>Nos projets<h4></div></a>

            <div id="IdTraitVFTel"></div>
            <a class="LinkReseaux" target="_blank" href="https://www.facebook.com/Katapub/"><i class="fab fa-facebook-f IconFacebookTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.instagram.com/katapub/"><i class="fab fa-instagram IconInstaTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca"><i class="fab fa-linkedin-in IconLinkTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fas fa-envelope IconMailTel"></i></a>
            <h3 class="h3VFTel">SUIVEZ<br> NOS PROJETS</h3>
        </div>

    </div>


    <div class="section" data-vidbg-bg="mp4: http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/video-projets-casino-converted-with-Clipchamp.mp4" data-vidbg-options="loop: true, muted: true, overlay: false">
        
            <img class="ImgCasino" width="200" height="200" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/logo5.png">    

            <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>

    </div>


            <!--
    <div class="section imgFondPorteParole">

        <div class="VersionOrdi" style="height: 100%;">

            <video class="myVideo ModifVideo VersionOrdi" height="100%" autoplay="autoplay" muted="muted" loop="loop"  controls="true" style="min-width: 100%;z-index: 1; left: 0;z-index: 1;position: absolute;">
                <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/video-projets-casino-converted-with-Clipchamp.mp4" type="video/mp4">
            </video>



            <iframe  src="https://www.youtube.com/embed/oc0kG3ptP8Q?autoplay=1&controls=0&loop=1&playlist=oc0kG3ptP8Q&amp;showinfo=0" frameborder="0" allowfullscreen width="100%" height="100%"></iframe>



            <img class="ImgCasino" width="200" height="200" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/logo5.png">    

            <a class="ClassLink" href="http://www.katapub.com/betabetakatp2/">
                <div class="BtnTout">
                    <div class="btnBlanc">Projets</div>
                    <div class="BtnRose">
                        <img id="ImgArc" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png">
                    </div>
                </div>
            </a>

        </div>

        <div class="VersionTel" style="text-align: center;">

            <video class="myVideo" autoplay="autoplay" muted="muted" loop="loop" controls="true">
                <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/promo_loto-qc_9x16.mov" type="video/mp4">
            </video>

            <div class="ClassImgLoto">
                <img style="position: relative;" width="100" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/LotoQuebecLogo.png">
            </div>

            <div class="ClassBtn">
                <a class="ClassLink" href="http://www.katapub.com/betabetakatp2/">
                    <div class="BtnTout">
                        <div class="btnBlanc">Projets</div>
                        <div class="BtnRose">
                            <img id="ImgArc" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    
    </div>
            -->

    <div class="section colorB">
                
        <style>

            .LigneTest {
                height: 0px;
                border-top: 0px solid #ed4598;
                position: relative;
                top: 310px;
            }

            #TestCanvas{
                height: 100vh;
                width: 900px;
                margin: auto;
                margin-top: -75px;
                border-right: 1px solid #ed4598;
                border-left: 1px solid #ed4598;
                padding-top: 400px;
            }
            main {
                margin: 0 auto;
                background-color: #202020;
                width: 100%;
                height: auto;
            text-align:center;
            }

            .fp-tableCell > main {
                border-bottom:1px solid #ed4598 !important;
            }

            #start-game {
               display:none;
            }



            #IdABtn:hover > #BtnOrange{
               background-color: white;
            }
            #IdABtn:hover > #BtnBlanc{
                background-color: rgb(240, 65, 152);
                color:white !important;
            }

            #ImgBtn{
                position: absolute;
            bottom: 21px;
                right: 20px;
            }

            #BtnTout{
            position: absolute;
                right: 450px;
                bottom: 20px;
                z-index: 9999;
            }
            @media only screen and (max-width: 1550px) {
                #TestCanvas{
                    padding-top: 400px;
                }
            }
            @media only screen and (max-width: 1150px) {
            #BtnTout{

                bottom: 50px !important;
            }
            }

            #BtnBlanc{
                float: left;
                background-color: white;
                padding-top: 18px;
                height: 60px;
                width: 200px;
                font-size: 1.5em;
                text-align: center;
                font-weight: 700;
            }
            #BtnBlanc > p{
               font-family: "Hind Siliguri" !important;
            }
            #BtnOrange{
                height: 60px;
                width: 60px;
                background-color: #E43889;
                float: left;
            }

            ul {
                list-style: none;
                padding: 0;
            }
            #canvas {

            margin-top:0px !important;
            margin-bottom:-8px !important;

            }

            #IdJob{
                position: absolute;
                color: white;
                z-index: 9999;
                font-size: 100px;
                font-weight: 700;
                top: 120px;
                left: 30%;
                font-family: "Hind Siliguri" !important;
                text-align:left;
                line-height: 0.8;
            }

            #PJob{
                position: absolute;
                color: white;
                font-size: 1em;
                font-weight: 500;
                top: 160px;
                right: 450px;
                font-family: "Hind Siliguri" !important;
            }
            #h3Job{
                position: absolute;
                color: white;
                font-size: 2em;
                line-height:1;
                font-weight: 700;
                top: 140px;
                text-align:right;
                right: 490px;
                font-family: "Hind Siliguri" !important;
             font-style: normal !important;
            }


            @media only screen and (max-width: 1250px) {
                #IdJob{
                    right: 250px;
                }
                #h3Job{
                    right: 250px;
                }

                #BtnTout{
                    right: 250px;
                }
            }

        </style>

            <div class="VersionOrdi">


                <main  role="main">
                    <div style="color:white;position:relative;top: 35px; left:-250px; text-align: center;visibility: hidden">
                    <p style="color:white; font-size:1.5em; font-weight:700;font-family: 'Hind Siliguri' !important; ">Topin <span style="color:#e43889;">VS</span> Katapub </p>
                        
                    <p style="font-size:2em; font-weight:700;font-family: 'Hind Siliguri' !important; "><span id="player-score">0</span> <span style="color:#fbdd1a;">|</span> <span id="computer-score">0</span></p>
                    </div>

                        <ul>
                            <li>
                                <button id="start-game">Démarrer</button>
                            </li>

                        </ul>
                    <!--
                    <ul>
                            <li>
                                <button id="start-game">Démarrer</button>
                            </li>
                            <li>
                                <button id="stop-game">Arrêter</button>
                            </li>
                        </ul>
                     -->
                    <!-- <div class="LigneTest"></div> -->

                         <div id="TestCanvas">
                            <canvas id="canvas" width="826" height="500"></canvas>
                         </div>


                     


                    <h2 id="IdJob">
                        La balle <br> 
                    est dans <br> 
                    ton camp</h2>







                    <div id="BtnTout">
                    <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>
                    </div>


                </main>
            
        </div>
        <div class="VersionTel">
            <h2 class="PongTel">La balle est dans ton camp</h2>
                            <a class="ClassLink" href="http://www.katapub.com/betabetakatp2/"><div class="BtnTout marginleft">
                <div class="btnBlanc">Postuler</div>
                <div class="BtnRose"><img id="ImgArc" style="left: 17px !important;" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png"></div>
            </div>
            </a>
        </div>

    </div>
    


<style type="text/css">
    
    .ClassFooterTel{
        height: 900px;
    }
    .LigneFooter{
        width: 922px;
        border-right: 1px solid rgba(0, 0, 0, 0.2);
        border-left: 1px solid rgba(0, 0, 0, 0.2);
        margin:auto;
        height: 100%;
        padding: 200px 0px;
    }

    .LigneFooter1EtapeG{
        width: 50%;
        float: left;
    }

    .LigneFooter1EtapeD{
        width: 50%;
        float: left;
        margin-top: 80px;
    }

    .LigneFooter1EtapeG > h2{
        width: 350px;
        line-height: 0.8;
        font-size: 5em;     
        margin-left: 50px;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif;
        font-weight: 700;
    }

    .LigneFooter2EtapeG{
        float: left;
        width: 250px;
        padding-top: 200px;
    }

    .LigneFooter2EtapeD{
        float: left;
        width: 420px;
        padding-top: 326px;
    }


    .ClassRetourner{
        transform: rotate(-90deg);
        width: 350px;
        position: relative;
        right: 75px;
    }

    .ClassRetourner > h3{
        font-weight: 700;
        font-size: 2em;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif;
    }

    .ClassRetourner > h3 > a{
        text-decoration: underline;
    }

    .ClassRetourner > h3 > a:hover{
        color: #E43889 !important;
    }

   .LienProjet:before , .LienAgence:before , .LienServices:before{
        content: '';
        display: block;
        height: 5px;
        width: 0;
        background: transparent;
        transition: width .5s ease, background-color .5s ease;
        top: 30px;
        position: relative;
    }
    .LienProjet:hover:before {
        width: 80px;
        background: #E43889 !important;
    }

    .LienAgence:hover:before {
        width: 80px;
        background: #fbdd1a !important;
    }

    .LienServices:hover:before {
        width: 80px;
        background: #40abdd !important;
    }

    .LienFooter{
        padding-top: 15px;
    }

    .LienFooter > a {
        font-weight: 700;
        font-size: 1.5em;
        font-family: "Hind Siliguri",Arial,Helvetica,sans-serif;
        color: black;

    }




    .LienFooter > a > i {
        margin-right: 10px;
    }

    .LienFooter > a:hover > i {
        color: #E43889 !important;
    }


    .DivLogoFooter{
        float: right;
        text-align: right;
        padding-right: 40px;
    }

    .DivLogoFooter > p{
        font-family: "Libre Baskerville";
        font-style: italic;
    }

    .DivLogoFooter > a > img{
        width: 120px;
    }




</style>

    <section class="section ClassFooterTel">
        
        <div class="LigneFooter">
            
            <div class="LigneFooter1EtapeG">
                <h2>
                    Par ici pour notre infolettre
                </h2>
            </div>
            
            <div class="LigneFooter1EtapeD">
            
            <style>
            html,
body {
  height: 100%;
}
body {
  display: grid;
  font-family: Avenir;
  -webkit-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  overflow: hidden;
}
* {
  box-sizing: border-box;
}
.inp {
  position: relative;
  margin: auto;
  width: 100%;
  max-width: 280px;
}
.inp .label {
  position: absolute;
  top: 16px;
  left: 0;
  font-size: 16px;
  color: rgb(240, 65, 152);
  font-weight: 500;
  transform-origin: 0 0;
  transition: all 0.2s ease;
  margin-top: 26px;
  margin-left: -10px;
}
.inp svg {
  position: absolute;
  left: 0;
  bottom: 0;
  height: 26px;
  fill: none;
}
.inp svg path {
  stroke: rgb(240, 65, 152);
  stroke-width: 6;
}
.inp svg path d {
  transition: all 0.2s ease;
}
.inp .border {
  position: absolute;
  bottom: 0;
  left: 120px;
  height: 3px;
  right: 0;
  background: rgb(240, 65, 152);
  width:290px;
}
.inp input {
  -webkit-appearance: none;
  width: 100%;
  border: 0;
  font-family: inherit;
  padding: 12px 0;
  height: 48px;
  font-size: 16px;
  font-weight: 500;
  background: none;
  transform: translate(0px, 18px) !important;
  border-radius: 0;
  color: #223254;
  transition: all 0.15s ease;

}
.inp input:not(:placeholder-shown) + span {
  color: #5a667f;
  transform: translateY(-26px) scale(0.75);
}
.inp input:focus {
  background: none;
  outline: none;
}
.inp input:focus + span {
  color: rgb(240, 65, 152);
  transform: translateY(-26px) scale(0.75);
  transition-delay: 0.1s;
}
.inp input:focus + span + svg path {
  stroke: rgb(240, 65, 152);
  animation: elasticInput 0.4s ease forwards;
}
.inp input:focus + span + svg + .border {
  background: rgb(240, 65, 152);
}
.dribbble {
  position: fixed;
  right: 20px;
  bottom: 15px;
  transition: all 0.2s ease;
}
.dribbble span {
  font-size: 28px;
  color: #9098a9;
}
@-moz-keyframes elasticInput {
  50% {
    d: path("M2,2 C21,17 46,25 74,25 C102,25 118,25 120,25");
  }
}
@-webkit-keyframes elasticInput {
  50% {
    d: path("M2,2 C21,17 46,25 74,25 C102,25 118,25 120,25");
  }
}
@-o-keyframes elasticInput {
  50% {
    d: path("M2,2 C21,17 46,25 74,25 C102,25 118,25 120,25");
  }
}
@keyframes elasticInput {
  50% {
    d: path("M2,2 C21,17 46,25 74,25 C102,25 118,25 120,25");
  }
}

            </style>
            
                <label for="inp" class="inp">
       
                      <form id="subs_form" action="" method="POST">
                      <input type="email" id="inp" placeholder="&nbsp;">
                      <span class="label" style="font-weight:bold;">Courriel</span>
                      <svg width="120px" height="26px" viewBox="0 0 120 24">
                        <path d="M0,25 C21,25 46,25 74,25 C102,25 118,25 120,25"></path>
                      </svg>
                      <button id="sub_eff" style="background-color:transparent;border:none;color:#e43889; font-size:40px; position:absolute;top:-10px;right:-170px;"><?php echo do_shortcode('[ti_icon icon="ti-arrow-right" size="default" style="icon-left"]'); ?></button>
                      <img id="form_effect" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/10/Ghuranti-pink-1.gif">
                      
                      <span class="border"></span>
                    <p id="mmmsg"></p>
                    </form>
                  
</label>

                
                <?php // echo do_shortcode( '[mc4wp_form id="195"]' ); ?>
            </div>



            <style type="text/css">
                
                .EspaceFooterEntre{
                    margin-top: 200px;
                }

            </style>

            <div class="EspaceFooterEntre">

                <div class="LigneFooter2EtapeG">
                    
                    <div class="ClassRetourner">
                        <h3>ON FAIT LES AVANCES <BR> VOUS LES PREMIERS PAS. <BR> <a href="#">CONTACT</a> </h3>
                    </div>

                </div>

                <div class="LigneFooter2EtapeG">
                    
                    <div class="LienFooter">
                        
                        <a class="LienProjet" href="http://www.katapub.com/betabetakatp2/projets/">Projets</a> <br>
                        <a class="LienAgence" href="http://www.katapub.com/betabetakatp2/agence/">Agence</a> <br>
                        <a class="LienServices" href="http://www.katapub.com/betabetakatp2/services/">Services</a> <br>
                        <a class="LienProjet" href="http://www.katapub.com/betabetakatp2/job/">Job</a> <br>
                        <a class="LienServices" href="http://www.katapub.com/betabetakatp2/contact/">Contact</a> <br> <br>

                        <a href="https://www.facebook.com/Katapub/" target="_blank"><i class="fa-icon-facebook-f"></i></a> <a href="https://www.instagram.com/katapub/" target="_blank"><i class="fa-icon-instagram"></i></a> <a href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca" target="_blank"><i class="fa-icon-linkedin"></i></a> <a href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fa-icon-envelope"></i></a>

                    </div>

                </div>

                <div class="LigneFooter2EtapeD">
                    
                    <div class="DivLogoFooter">
                        <a href="http://www.katapub.com/betabetakatp2/"><img src="http://www.katapub.com/betabetakatp2/wp-content/uploads/revslider/footer/katablack.png"></a>

                        <p>Copyright 2020 Katapub </p>
                    </div>

                </div>

            </div>


        </div>


    </section>

</div>
</div>


























<div id="IdVersionTell">
<div id="fullpage">

    <div class="section colorB">
        
        <div class="Ligne">
            <h2 class="H2Header"><?php the_field('h1_header'); ?></h2>
            <p class="montreal"><?php the_field('montreal'); ?></p>
        </div>

        <div class="Rond"></div>

    </div>

    <div class="section" data-vidbg-bg="mp4: http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/07/katapub_promo_v19_9x16_18sec_720.mp4" data-vidbg-options="loop: true, muted: true, overlay: false">
    
            <div class="ClassBtn">
                <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"></div>
        </div>
    </a>
    </div>
            </div>
        

    </div>
<!--
    <div class="section">



        <video class="myVideo VersionOrdi VideoPrem" height="100%" autoplay="autoplay" muted="muted" loop="loop" controls="true" playsinline style="max-width: inherit !important;">
            <source src="<?php the_field('video'); ?>" type="video/mp4">
        </video>

        
        <iframe class="VersionOrdi" src="http://www.youtube.com/embed/3QSFPknPpXQ?autoplay=1&controls=0&loop=1&playlist=3QSFPknPpXQ&amp;showinfo=0" width="100%" height="100%"></iframe>
        -->
<!--
        <video class="myVideo VersionTel" autoplay="autoplay" muted="muted" loop="loop" controls="true">
            <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/katapub_promo_v19_9x16_18sec_720.mov" type="video/mp4">
        </video>
    
    
        <iframe  class="VersionTel" width="100%" height="100%" src="https://www.youtube.com/embed/WAtM3_9tOgk?autoplay=1&controls=0&loop=1&playlist=WAtM3_9tOgk&amp;showinfo=0" frameborder="0"></iframe>




    </div>
        --> 
    <div class="section imgFond">

        <div id="BoiteVf" class="VersionOrdi">
            <a class="LinkReseaux" target="_blank" href="https://www.facebook.com/Katapub/"><i class="fab fa-facebook-f IconFacebook"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.instagram.com/katapub/"><i class="fab fa-instagram IconInsta"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca"><i class="fab fa-linkedin-in IconLink"></i></a>
            <a class="LinkReseaux" target="_blank" href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fas fa-envelope IconMail"></i></a>

            <h3 class="h3VF">SUIVEZ<br> NOS PROJETS</h3>
            <a href="#" class="LinkBtnRond"><div class="btnVFRond"><h4>Nos projets<h4></div></a>
            
        </div>

        <div id="VFTel" class="VersionTel" style="text-align: center">
            <a href="#" class="LinkBtnRond" style="position: absolute;"><div class="btnVFRond"><h4>Nos projets<h4></div></a>

            <div id="IdTraitVFTel"></div>
            <a class="LinkReseaux" target="_blank" href="https://www.facebook.com/Katapub/"><i class="fab fa-facebook-f IconFacebookTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.instagram.com/katapub/"><i class="fab fa-instagram IconInstaTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca"><i class="fab fa-linkedin-in IconLinkTel"></i></a>
            <a class="LinkReseaux" target="_blank" href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fas fa-envelope IconMailTel"></i></a>
            <h3 class="h3VFTel">SUIVEZ<br> NOS PROJETS</h3>
        </div>

    </div>


    <div class="section" data-vidbg-bg="mp4: http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/07/promo_loto-qc_9x16.mp4" data-vidbg-options="loop: true, muted: true, overlay: false">
        
            <div class="ClassImgLoto">
                <img style="position: relative;" width="100" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/LotoQuebecLogo.png">
            </div>

            <div class="ClassBtn">
                <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>
            </div>

    </div>


            <!--
    <div class="section imgFondPorteParole">

        <div class="VersionOrdi" style="height: 100%;">

            <video class="myVideo ModifVideo VersionOrdi" height="100%" autoplay="autoplay" muted="muted" loop="loop"  controls="true" style="min-width: 100%;z-index: 1; left: 0;z-index: 1;position: absolute;">
                <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/video-projets-casino-converted-with-Clipchamp.mp4" type="video/mp4">
            </video>



            <iframe  src="https://www.youtube.com/embed/oc0kG3ptP8Q?autoplay=1&controls=0&loop=1&playlist=oc0kG3ptP8Q&amp;showinfo=0" frameborder="0" allowfullscreen width="100%" height="100%"></iframe>



            <img class="ImgCasino" width="200" height="200" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/logo5.png">    

            <a class="ClassLink" href="http://www.katapub.com/betabetakatp2/">
                <div class="BtnTout">
                    <div class="btnBlanc">Projets</div>
                    <div class="BtnRose">
                        <img id="ImgArc" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png">
                    </div>
                </div>
            </a>

        </div>

        <div class="VersionTel" style="text-align: center;">

            <video class="myVideo" autoplay="autoplay" muted="muted" loop="loop" controls="true">
                <source src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/promo_loto-qc_9x16.mov" type="video/mp4">
            </video>

            <div class="ClassImgLoto">
                <img style="position: relative;" width="100" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/LotoQuebecLogo.png">
            </div>

            <div class="ClassBtn">
                <a class="ClassLink" href="http://www.katapub.com/betabetakatp2/">
                    <div class="BtnTout">
                        <div class="btnBlanc">Projets</div>
                        <div class="BtnRose">
                            <img id="ImgArc" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png">
                        </div>
                    </div>
                </a>
            </div>

        </div>
    
    </div>
            -->

    <div class="section colorB">
                
        <style>

            .LigneTest {
                height: 1px;
                border-top: 1px solid #ed4598;
                position: relative;
                top: 310px;
            }

            #TestCanvas{
                height: 100vh;
                width: 900px;
                margin: auto;
                margin-top: -75px;
                border-right: 1px solid #ed4598;
                border-left: 1px solid #ed4598;
                padding-top: 400px;
            }
            main {
                margin: 0 auto;
                background-color: #202020;
                width: 100%;
                height: auto;
            text-align:center;
            }

            .fp-tableCell > main {
                border-bottom:1px solid #ed4598 !important;
            }

            #start-game {
               display:none;
            }



            #IdABtn:hover > #BtnOrange{
               background-color: white;
            }
            #IdABtn:hover > #BtnBlanc{
                background-color: rgb(240, 65, 152);
                color:white !important;
            }

            #ImgBtn{
                position: absolute;
            bottom: 21px;
                right: 20px;
            }

            #BtnTout{
            position: absolute;
                right: 450px;
                bottom: 20px;
                z-index: 9999;

            }
            @media only screen and (max-width: 1550px) {
                #TestCanvas{
                    padding-top: 400px;
                }
            }
            @media only screen and (max-width: 1150px) {
            #BtnTout{

                bottom: 50px !important;
            }
            }

            #BtnBlanc{
        float: left;
        background-color: white;
        padding-top: 18px;
        height: 60px;
        width: 200px;
        font-size: 1.5em;
        text-align: center;
            }
            #BtnBlanc > p{
            
               font-family: "Hind Siliguri" !important;
            }
            #BtnOrange{

                height: 60px;
                width: 60px;
                background-color: #eae600;
                float: left;
            }

            ul {
                list-style: none;
                padding: 0;
            }
            #canvas {

            margin-top:0px !important;
            margin-bottom:-8px !important;

            }

            #IdJob{
                position: absolute;
                color: white;
                z-index: 9999;
                font-size: 100px;
                font-weight: 700;
                top: 120px;
                left: 30%;
                font-family: "Hind Siliguri" !important;
                text-align:left;
                line-height: 0.8;
            }

            #PJob{
                position: absolute;
                color: white;
                font-size: 1em;
                font-weight: 500;
                top: 160px;
                right: 450px;
                font-family: "Hind Siliguri" !important;
            }
            #h3Job{
                position: absolute;
                color: white;
                font-size: 2em;
                line-height:1;
                font-weight: 700;
                top: 140px;
                text-align:right;
                right: 490px;
                font-family: "Hind Siliguri" !important;
             font-style: normal !important;
            }


            @media only screen and (max-width: 1250px) {
                #IdJob{
                    right: 250px;
                }
                #h3Job{
                    right: 250px;
                }

                #BtnTout{
                    right: 250px;
                }
            }

        </style>

            <div class="VersionOrdi">


                <main style="border-bottom:1px solid #ed4598;" role="main">
                    <div style="color:white;position:relative;top: 35px; left:-250px; text-align: center;visibility: hidden">
                    <p style="color:white; font-size:1.5em; font-weight:700;font-family: 'Hind Siliguri' !important; ">Topin <span style="color:#e43889;">VS</span> Katapub </p>
                        
                    <p style="font-size:2em; font-weight:700;font-family: 'Hind Siliguri' !important; "><span id="player-score">0</span> <span style="color:#fbdd1a;">|</span> <span id="computer-score">0</span></p>
                    </div>

                        <ul>
                            <li>
                                <button id="start-game">Démarrer</button>
                            </li>

                        </ul>
                    <!--
                    <ul>
                            <li>
                                <button id="start-game">Démarrer</button>
                            </li>
                            <li>
                                <button id="stop-game">Arrêter</button>
                            </li>
                        </ul>
                     -->
                    <!-- <div class="LigneTest"></div> -->

                         <div id="TestCanvas">
                            <canvas id="canvas" width="826" height="500"></canvas>
                         </div>


                     


                    <h2 id="IdJob">
                        La balle <br> 
                    est dans <br> 
                    ton camp</h2>







                    <div id="BtnTout">
                    <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>
                    </div>


                </main>
            
        </div>
        <div class="VersionTel">
            <h2 class="PongTel">La balle est dans ton camp</h2>
            <div style="text-align:center;">
        <a href="">
        <div class="buttonNew">     
            <div class="button-title">
                <span>Projet</span>
                <span>On y va !</span>
            </div>
            <div class="button-icon"><span class="pjf-katapub-Rainbow"></span></div>
        </div>
    </a>
    </div>
        </div>

    </div>
    
<style type="text/css">
    


        .CenterFooter{
            width: 300px;
            margin: auto;
            text-align: center;

        }

        .CenterFooter > h2{
            font-size: 2em;
            line-height: 1;
            font-family: "Hind Siliguri",Arial,Helvetica,sans-serif;
            color: black;
            font-weight: 700;
        }

        .FooterLienTel > a{
            font-size: 1.5em;
            font-weight: 700;
            font-family: "Hind Siliguri",Arial,Helvetica,sans-serif;
            color: black;
        }
        .FooterLienTel > a > i{
            margin-right: 10px;
        }
        .FooterLienTel{
            padding-top: 105px;
        }

        .TextFooterTelCopy{
            font-family: "Libre Baskerville";
            font-style: italic;
        }

        .ImgFooterTel{
            width: 120px;
            padding: 20px 0px;
        }
        .CenterFooter{
            display: none;
        }
    @media only screen and (max-width: 992px) {

        .ClassCourriel{
            height: 60px !important;
        }

        .LabelBtn > i{
            padding-top: 20px !important;
        }

        .CenterFooter{
            display: block;
        }

        .LigneFooter{
            display: none;
        }

        .ClassFooterTel{
            height: inherit;
            margin-top: 50px;
        }


    }


</style>

    <section class="section ClassFooterTel">
        
        <div class="CenterFooter">

            <h2>Par ici <br> pour notre <br> infolettre</h2>


            <?php echo do_shortcode( '[mc4wp_form id="195"]' ); ?>

            <div class="FooterLienTel">

                <a class="LienProjet" href="http://www.katapub.com/betabetakatp2/projets/">Projets</a> <br>
                <a class="LienAgence" href="http://www.katapub.com/betabetakatp2/agence/">Agence</a> <br>
                <a class="LienServices" href="http://www.katapub.com/betabetakatp2/services/">Services</a> <br>
                <a class="LienProjet" href="http://www.katapub.com/betabetakatp2/job/">Job</a> <br>
                <a class="LienServices" href="http://www.katapub.com/betabetakatp2/contact/">Contact</a> <br> <br>

                <a href="https://www.facebook.com/Katapub/" target="_blank"><i class="fa-icon-facebook-f"></i></a> <a href="https://www.instagram.com/katapub/" target="_blank"><i class="fa-icon-instagram"></i></a> <a href="https://www.linkedin.com/company/katapub/?trk=ppro_cprof&originalSubdomain=ca" target="_blank"><i class="fa-icon-linkedin"></i></a> <a href="mailto:?subject=Viens voir katapub&body=Viens voir la page de Katapub"><i class="fa-icon-envelope"></i></a>     

            </div>


            <a href="http://www.katapub.com/betabetakatp2"><img class="ImgFooterTel" src="http://www.katapub.com/betabetakatp2/wp-content/uploads/revslider/footer/katablack.png"></a>

            <p class="TextFooterTelCopy">Copyright 2020 Katapub </p>
        
        </div>

    </section>

</div>
</div>








<script>

jQuery(document).ready(function() {
jQuery('.BtnTout').hover(
    function(){
        jQuery(this).addClass('hover');
        jQuery('#ImgArc').attr('src', 'http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/icon_button-02.png');
    },
    function(){
        jQuery(this).removeClass('hover');
        jQuery('#ImgArc').attr('src', 'http://www.katapub.com/betabetakatp2/wp-content/uploads/2020/05/2arc.png');
    }
);

});

</script>



<script> 

jQuery("#IdVersionTell").hide();

var iWindowsSize = jQuery(window).width();
if (iWindowsSize  < 992 && iWindowsSize >=290){


jQuery(document).ready(function() {

        jQuery("#IdVersionOrdi").remove();
        jQuery("#IdVersionTell").show();

});

}

 </script>


<script> 

'use strict';

var canvas;
var game;
var anim;

const PLAYER_HEIGHT = 100;
const PLAYER_WIDTH = 15;
const MAX_SPEED = 15;

setTimeout('play()',2000);

function draw() {
    var context = canvas.getContext('2d');

    // Draw field
    context.fillStyle = '#202020';
    context.fillRect(0, 0, canvas.width, canvas.height);

    // Draw middle line
    context.strokeStyle = '#202020';
    context.beginPath();
    context.moveTo(canvas.width / 2, 0);
    context.lineTo(canvas.width / 2, canvas.height);
    context.stroke();

    // Draw players
    context.fillStyle = '#34abe1';
    context.fillRect(0, game.player.y, PLAYER_WIDTH, PLAYER_HEIGHT);
    context.fillRect(canvas.width - PLAYER_WIDTH, game.computer.y, PLAYER_WIDTH, PLAYER_HEIGHT);

    // Draw ball
    context.beginPath();
    context.fillStyle = '#fadd2f';
    context.arc(game.ball.x, game.ball.y, game.ball.r, 0, Math.PI * 5, false);
    context.fill();
}

function changeDirection(playerPosition) {
    var impact = game.ball.y - playerPosition - PLAYER_HEIGHT / 2;
    var ratio = 100 / (PLAYER_HEIGHT / 2);

    // Get a value between 0 and 10
    game.ball.speed.y = Math.round(impact * ratio / 10);
}

function playerMove(event) {
    // Get the mouse location in the canvas
    var canvasLocation = canvas.getBoundingClientRect();
    var mouseLocation = event.clientY - canvasLocation.y;

    if (mouseLocation < PLAYER_HEIGHT / 2) {
        game.player.y = 0;
    } else if (mouseLocation > canvas.height - PLAYER_HEIGHT / 2) {
        game.player.y = canvas.height - PLAYER_HEIGHT;
    } else {
        game.player.y = mouseLocation - PLAYER_HEIGHT / 2;
    }
}

function computerMove() {
    game.computer.y += game.ball.speed.y * game.computer.speedRatio;
}

function collide(player) {
    // The player does not hit the ball
    if (game.ball.y < player.y || game.ball.y > player.y + PLAYER_HEIGHT) {
        reset();

        // Update score
        if (player == game.player) {
            game.computer.score++;
            document.querySelector('#computer-score').textContent = game.computer.score;
        } else {
            game.player.score++;
            document.querySelector('#player-score').textContent = game.player.score;
        }
    } else {
        // Change direction
        game.ball.speed.x *= -1;
        changeDirection(player.y);

        // Increase speed if it has not reached max speed
        if (Math.abs(game.ball.speed.x) < MAX_SPEED) {
            game.ball.speed.x *= 1.2;
        }
    }
}

function ballMove() {
    // Rebounds on top and bottom
    if (game.ball.y > canvas.height || game.ball.y < 0) {
        game.ball.speed.y *= -1;
    }

    if (game.ball.x > canvas.width - PLAYER_WIDTH) {
        collide(game.computer);
    } else if (game.ball.x < PLAYER_WIDTH) {
        collide(game.player);
    }

    game.ball.x += game.ball.speed.x;
    game.ball.y += game.ball.speed.y;
}
function play() {
    draw();

    computerMove();
    ballMove();

    anim = requestAnimationFrame(play);
}

function reset() {
    // Set ball and players to the center
    game.ball.x = canvas.width / 2;
    game.ball.y = canvas.height / 2;
    game.player.y = canvas.height / 2 - PLAYER_HEIGHT / 2;
    game.computer.y = canvas.height / 2 - PLAYER_HEIGHT / 2;

    // Reset speed
    game.ball.speed.x = 3;
    game.ball.speed.y = Math.random() * 3;
}

function stop() {
    cancelAnimationFrame(anim);

    reset();

    // Init score
    game.computer.score = 0;
    game.player.score = 0;

    document.querySelector('#computer-score').textContent = game.computer.score;
    document.querySelector('#player-score').textContent = game.player.score;

    draw();
}




document.addEventListener('DOMContentLoaded', function () {
    canvas = document.getElementById('canvas');
    game = {
        player: {
            score: 0
        },
        computer: {
            score: 0,
            speedRatio: 0.75
        },
        ball: {
            r: 15,
            speed: {}
        }
    };

    reset();


    // Mouse move event
    canvas.addEventListener('mousemove', playerMove);

    // Mouse click event
   
 document.querySelector('#start-game').addEventListener('click', play);

    document.querySelector('#stop-game').addEventListener('click', stop);

});


    jQuery('#start-game').click(function(){
        jQuery('#start-game').fadeToggle('500');
    jQuery('#canvas').css({
        'margin-top':'-40px',});

        });




 </script>



<script type="text/javascript">
    

$(function() {

  // La vidéo étant lancée automatiquement, le bouton est masqué
   $('#play_pause').hide();

   // Assignation de l'élément <video>
   la_video = $('#video').get(0);

   // Le clic Bouton lance la lecture...
   $('#play_pause').click(function() {
   // ...si le bouton est visible (donc vidéo en pause)
       if ($(this).is(':visible')) {
           $(this).fadeOut("normal", function() {
               // Au masquage du bouton, on enlève la class qui affiche l'image Pause
               $(this).removeClass('pause');
           });
          la_video.play();
       }
   });

   // Clic sur vidéo = Pause + affichage du bouton
       $('#video').click(function() {
           la_video.pause();
           // on ajoute la class qui affiche l'image Pause
           $('#play_pause').addClass('pause').fadeIn("slow");
       });

   // En fin de lecture, on affiche le bouton en image Lecture
   // pour pouvoir relancer la lecture
   la_video.onended = function() {
       $('#play_pause').fadeIn("slow");
   }
});

</script>










<script type="text/javascript">
    



/*!
 * Vidbg v1.1.1 (https://github.com/blakewilson/vidbg)
 * Vidbg By Blake Wilson
 * @license Licensed Under MIT (https://github.com/blakewilson/vidbg/blob/master/LICENSE)
 */
!(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['jquery'], factory);
  } else if (typeof exports === 'object') {
    factory(require('jquery'));
  } else {
    factory(root.jQuery);
  }
})(this, function($) {

  'use strict';

  /**
   * Name of the plugin
   * @private
   * @const
   * @type {String}
   */
  var PLUGIN_NAME = 'vidbg';

  /**
   * Default settings
   * @private
   * @const
   * @type {Object}
   */
  var DEFAULTS = {
    volume: 1,
    playbackRate: 1,
    muted: true,
    loop: true,
    autoplay: true,
    position: '50% 50%',
    overlay: false,
    overlayColor: '#000',
    overlayAlpha: 0.3,
    resizing: true
  };

  /**
   * Not implemented error message
   * @private
   * @const
   * @type {String}
   */
  var NOT_IMPLEMENTED_MSG = 'Not implemented';

  /**
   * Parse a string with options
   * @private
   * @param {String} str
   * @returns {Object|String}
   */
  function parseOptions(str) {
    var obj = {};
    var delimiterIndex;
    var option;
    var prop;
    var val;
    var arr;
    var len;
    var i;

    // Remove spaces around delimiters and split
    arr = str.replace(/\s*:\s*/g, ':').replace(/\s*,\s*/g, ',').split(',');

    // Parse a string
    for (i = 0, len = arr.length; i < len; i++) {
      option = arr[i];

      // Ignore urls and a string without colon delimiters
      if (
        option.search(/^(http|https|ftp):\/\//) !== -1 ||
        option.search(':') === -1
      ) {
        break;
      }

      delimiterIndex = option.indexOf(':');
      prop = option.substring(0, delimiterIndex);
      val = option.substring(delimiterIndex + 1);

      // If val is an empty string, make it undefined
      if (!val) {
        val = undefined;
      }

      // Convert a string value if it is like a boolean
      if (typeof val === 'string') {
        val = val === 'true' || (val === 'false' ? false : val);
      }

      // Convert a string value if it is like a number
      if (typeof val === 'string') {
        val = !isNaN(val) ? +val : val;
      }

      obj[prop] = val;
    }

    // If nothing is parsed
    if (prop == null && val == null) {
      return str;
    }

    return obj;
  }

  /**
   * Parse a position option
   * @private
   * @param {String} str
   * @returns {Object}
   */
  function parsePosition(str) {
    str = '' + str;

    // Default value is a center
    var args = str.split(/\s+/);
    var x = '50%';
    var y = '50%';
    var len;
    var arg;
    var i;

    for (i = 0, len = args.length; i < len; i++) {
      arg = args[i];

      // Convert values
      if (arg === 'left') {
        x = '0%';
      } else if (arg === 'right') {
        x = '100%';
      } else if (arg === 'top') {
        y = '0%';
      } else if (arg === 'bottom') {
        y = '100%';
      } else if (arg === 'center') {
        if (i === 0) {
          x = '50%';
        } else {
          y = '50%';
        }
      } else {
        if (i === 0) {
          x = arg;
        } else {
          y = arg;
        }
      }
    }

    return { x: x, y: y };
  }

  /*
   * Hex to RGB
   */
  function hexToRgb(hex) {
    // Expand shorthand form (e.g. "03F") to full form (e.g. "0033FF")
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function(m, r, g, b) {
        return r + r + g + g + b + b;
    });

    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
  }

  /**
   * Vidbg constructor
   * @param {HTMLElement} element
   * @param {Object|String} path
   * @param {Object|String} options
   * @constructor
   */
  function Vidbg(element, path, options) {
    this.$element = $(element);

    // Parse path
    if (typeof path === 'string') {
      path = parseOptions(path);
    }

    // Parse options
    if (!options) {
      options = {};
    } else if (typeof options === 'string') {
      options = parseOptions(options);
    }

    this.settings = $.extend({}, DEFAULTS, options);
    this.path = path;

    try {
      this.init();
    } catch (e) {
      if (e.message !== NOT_IMPLEMENTED_MSG) {
        throw e;
      }
    }
  }

  /**
   * Initialization
   * @public
   */
  Vidbg.prototype.init = function() {
    var vidbg = this;
    var path = vidbg.path;
    var poster = path;
    var sources = '';
    var $element = vidbg.$element;
    var settings = vidbg.settings;
    var position = parsePosition(settings.position);
    var $video;
    var $wrapper;
    var $overlay;

    // Set styles of a video wrapper
    $wrapper = vidbg.$wrapper = $('<div class="vidbg-container">').css({
      position: 'absolute',
      'z-index': -1,
      top: 0,
      left: 0,
      bottom: 0,
      right: 0,
      overflow: 'hidden',
      '-webkit-background-size': 'cover',
      '-moz-background-size': 'cover',
      '-o-background-size': 'cover',
      'background-size': 'cover',
      'background-repeat': 'no-repeat',
      'background-position': position.x + ' ' + position.y
    });

    // Get a poster path
    if (typeof path === 'object') {
      if (path.poster) {
        poster = path.poster;
      } else {
        if (path.mp4) {
          poster = path.mp4;
        } else if (path.webm) {
          poster = path.webm;
        }
      }
    }

    // Set a video poster
    $wrapper.css('background-image', 'url(' + poster + ')');

    // If a parent element has a static position, make it relative
    if ($element.css('position') === 'static') {
      $element.css('position', 'relative');
    }
    $element.css('z-index', '1');

    // If the element is set to body make the wrapper position fixed
    if($element.is("body")) {
      $wrapper.css({
        position: 'fixed'
      });
    }

    $element.prepend($wrapper);

    if (typeof path === 'object') {
      if (path.mp4) {
        sources += '<source src="' + path.mp4 + '" type="video/mp4">';
      }

      if (path.webm) {
        sources += '<source src="' + path.webm + '" type="video/webm">';
      }

      $video = vidbg.$video = $('<video>' + sources + '</video>');
    } else {
      $video = vidbg.$video = $('<video>' +
        '<source src="' + path + '" type="video/mp4">' +
        '<source src="' + path + '" type="video/webm">' +
        '</video>');
    }

    try {
      $video

        // Set video properties
        .prop({
          autoplay: settings.autoplay,
          loop: settings.loop,
          volume: settings.volume,
          muted: settings.muted,
          defaultMuted: settings.muted,
          playbackRate: settings.playbackRate,
          defaultPlaybackRate: settings.playbackRate
        });
    } catch (e) {
      throw new Error(NOT_IMPLEMENTED_MSG);
    }

    // Video alignment
    $video.css({
      margin: 'auto',
      position: 'absolute',
      'z-index': -1,
      top: position.y,
      left: position.x,
      '-webkit-transform': 'translate(-' + position.x + ', -' + position.y + ')',
      '-ms-transform': 'translate(-' + position.x + ', -' + position.y + ')',
      '-moz-transform': 'translate(-' + position.x + ', -' + position.y + ')',
      transform: 'translate(-' + position.x + ', -' + position.y + ')',
      'max-width' : 'none',

      // Disable visibility, while loading
      visibility: 'hidden',
      opacity: 0
    })

    // Resize a video, when it's loaded
    .one('canplaythrough.' + PLUGIN_NAME, function() {
      vidbg.resize();
    })

    // Make it visible, when it's already playing
    .one('playing.' + PLUGIN_NAME, function() {
      $video.css({
        visibility: 'visible',
        opacity: 1
      });
      $wrapper.css('background-image', 'none');
    });

    // Resize event is available only for 'window'
    // Use another code solutions to detect DOM elements resizing
    $element.on('resize.' + PLUGIN_NAME, function() {
      if (settings.resizing) {
        vidbg.resize();
      }
    });

    // Append a video
    $wrapper.append($video);


    $overlay = vidbg.$overlay = $('<div class="vidbg-overlay">').css({
      position: 'absolute',
      top: 0,
      left: 0,
      right: 0,
      bottom: 0,
      background: 'rgba(' + hexToRgb(settings.overlayColor).r + ', ' + hexToRgb(settings.overlayColor).g + ', ' + hexToRgb(settings.overlayColor).b + ', ' + settings.overlayAlpha + ')',
    });

    // Set an overlay if settings is true
    if (settings.overlay) {
      $wrapper.append($overlay);
    }
  };

  /**
   * Get a video element
   * @public
   * @returns {HTMLVideoElement}
   */
  Vidbg.prototype.getVideoObject = function() {
    return this.$video[0];
  };

  /**
   * Resize a video background
   * @public
   */
  Vidbg.prototype.resize = function() {
    if (!this.$video) {
      return;
    }

    var $wrapper = this.$wrapper;
    var $video = this.$video;
    var video = $video[0];

    // Get a native video size
    var videoHeight = video.videoHeight;
    var videoWidth = video.videoWidth;

    // Get a wrapper size
    var wrapperHeight = $wrapper.height();
    var wrapperWidth = $wrapper.width();

    if (wrapperWidth / videoWidth > wrapperHeight / videoHeight) {
      $video.css({

        // +2 pixels to prevent an empty space after transformation
        width: wrapperWidth + 2,
        height: 'auto'
      });
    } else {
      $video.css({
        width: 'auto',

        // +2 pixels to prevent an empty space after transformation
        height: wrapperHeight + 2
      });
    }
  };

  /**
   * Destroy a video background
   * @public
   */
  Vidbg.prototype.destroy = function() {
    delete $[PLUGIN_NAME].lookup[this.index];
    this.$video && this.$video.off(PLUGIN_NAME);
    this.$element.off(PLUGIN_NAME).removeData(PLUGIN_NAME);
    this.$wrapper.remove();
  };

  /**
   * Special plugin object for instances.
   * @public
   * @type {Object}
   */
  $[PLUGIN_NAME] = {
    lookup: []
  };

  /**
   * Plugin constructor
   * @param {Object|String} path
   * @param {Object|String} options
   * @returns {JQuery}
   * @constructor
   */
  $.fn[PLUGIN_NAME] = function(path, options) {
    var instance;

    this.each(function() {
      instance = $.data(this, PLUGIN_NAME);

      // Destroy the plugin instance if exists
      instance && instance.destroy();

      // Create the plugin instance
      instance = new Vidbg(this, path, options);
      instance.index = $[PLUGIN_NAME].lookup.push(instance) - 1;
      $.data(this, PLUGIN_NAME, instance);
    });

    return this;
  };

  $(document).ready(function() {
    var $window = $(window);

    // Window resize event listener
    $window.on('resize.' + PLUGIN_NAME, function() {
      for (var len = $[PLUGIN_NAME].lookup.length, i = 0, instance; i < len; i++) {
        instance = $[PLUGIN_NAME].lookup[i];

        if (instance && instance.settings.resizing) {
          instance.resize();
        }
      }
    });

    $window.on('unload.' + PLUGIN_NAME, function() {
      return false;
    });

    // HTML initialization
    // Add 'data-vidbg-bg' attribute with a path to the video
    // Pass options throw the 'data-vidbg-options' attribute
    $(document).find('[data-' + PLUGIN_NAME + '-bg]').each(function(i, element) {
      var $element = $(element);
      var options = $element.data(PLUGIN_NAME + '-options');
      var path = $element.data(PLUGIN_NAME + '-bg');

      $element[PLUGIN_NAME](path, options);
    });

  });

});



</script>









<?php
get_footer();
?>