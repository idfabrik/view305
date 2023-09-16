<?php include"data.php"; ?>

<!DOCTYPE html>
<html lang="fr-FR" >

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
</head>

<body class="project-template-default single single-project postid-453" page_id="453">

<!-- diapo --->
<link rel="stylesheet" type="text/css" href="css/slider.css"> 
<link rel="stylesheet" type="text/css" href="css/style_diapo_animation.css">
<script src="js/slider.js"></script>
<!-- diapo --->


<style type="text/css">  

@font-face {font-family: "Simple"; font-weight: 400;  src: url('fonts/Simple-Regular.ttf');}
@font-face {font-family: "Simple"; font-weight: 700;  src: url('fonts/Simple-Bold.ttff');}


body{font-family: "Simple", Calibri, Tahoma, sans-serif;}
#home img, .w_100 {width: 100%;}
#menu {
  text-align: center;
}
.center{text-align: center;}

#menu a {color:#000; text-decoration: none;}


iframe {
   display: block;
   margin: 0 auto;
   padding-bottom: 20px;
}


.img_hover {position: absolute;position: absolute;
margin-left: -300px;}

#menu_chap_01 a{ display: inline-block; }


#menu_chap_01 {
  text-align: center;
  padding-top: 30px;
  padding-bottom: 30px;
}





/* roll over */ 

 .vignette:hover p {
    display: none
    }


.vignette:hover:before{  
   content: "";
  padding-top: 60px;   color: #ffffff;   text-transform: uppercase;


 }


.vignette { 
  position: relative; 
  width: 300px;
  height: 90px;
  color: #fff;
  padding-top: 60px;
  background-size: 150px;
    
  background-size: cover;
  background-repeat: no-repeat;
  background-size: 300px 150px !important ;


  
  &::before {
    content: "";
    position: absolute;
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
    opacity: 0.6;
  }
}


.txt  {
  position: relative;
  color: #ffffff;  
  text-align: center;
}




</style>



<!--- 
lien de la chaine youtube https://www.youtube.com/@VIEW305_webdocu
 --->


<div id="menu"><p><a href="#"><?php print $menu[1]; ?></a> - <a href="#"><?php print $menu[2]; ?></a> - <a href="#"><?php print $menu[3]; ?></a></p></div>






<div id="home"><img src="img/home_view305_img_01.jpg"/></div>

<p class="center"><?php print $chap_01["titre"] ; ?></p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php print $chap_01["video"]["youtube"] ; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

<div id="chap1" ><img class="w_100" src="<?php print $chap_01["grande_img"] ;?>"/></div><!-- img/chap1/bg_chap1_1.jpg -->




<div id="menu_chap_01">


<hr/>

<?php 
$i=1;
?>







  <a  onclick="puch_content(slide_01); document.getElementById('slider_photo').style.display = 'block' ;">

<div class="vignette" style="background: url('img/vignettes_videos_youtube/<?php print $chap_01["vignette"][1]["youtube"] ?>.jpg');" >
  <p class="txt"><?php print $chap_01["vignette"][$i]["titre"]; ?></p>
</div>
  </a>

<style type="text/css">
  .vignette { &::before {    background-color: <?php print $chap_01["vignette"][1]["couleur"] ; ?>  }}
  .vignette:hover:before { content: "<?php print $chap_01["vignette"][1]["sous-titre"] ?>" }
}
</style>











<hr/>



  <a  onmouseover="show_img('cha1_img2')" onmouseout="reset_over()" onclick="puch_content(slide_01); document.getElementById('slider_photo').style.display = 'block' ;">
    <img src="img/chap1/btn2_o.png">
    <img id="cha1_img2" class="img_hover" src="img/chap1/btn2.png">
  </a>


  <a  onmouseover="show_img('cha1_img3')" onmouseout="reset_over()"  onclick="puch_video('U40skt9arfo');">
    <img src="img/chap1/btn3_o.png">
    <img id="cha1_img3" class="img_hover" src="img/chap1/btn3.png">
  </a>

  <a  onmouseover="show_img('cha1_img4')" onmouseout="reset_over()" onclick="puch_video('BT9ARxFwhfA');">
    <img src="img/chap1/btn4_o.png">
    <img id="cha1_img4" class="img_hover" src="img/chap1/btn4.png">
  </a>

<br/><br/>


  <a onmouseover="show_img('cha1_img5')" onmouseout="reset_over()" onclick="puch_video('jOHVlAwRj14');"> 
    <img src="img/chap1/btn5_o.png">
    <img id="cha1_img5" class="img_hover" src="img/chap1/btn5.png">
  </a>

  <a  onmouseover="show_img('cha1_img6')" onmouseout="reset_over()" onclick="puch_video('iVjQ5ffQC6A');">
    <img src="img/chap1/btn6_o.png">
    <img id="cha1_img6" class="img_hover" src="img/chap1/btn6.png">
  </a>

  <!--

   <a  onmouseover="show_img('cha1_img7')" onmouseout="reset_over()" href="">
    <img src="img/chap1/btn7_o.png">
    <img id="cha1_img7" class="img_hover" src="img/chap1/btn7.png">
  </a>

   <a  onmouseover="show_img('cha1_img8')" onmouseout="reset_over()" href="">
    <img src="img/chap1/btn8_o.png">
    <img id="cha1_img!" class="img_hover" src="img/chap1/btn8.png">
  </a>
-->
   <a  onmouseover="show_img('cha1_img9')" onmouseout="reset_over()" onclick="puch_video('9lArMJuYkZs');" >
    <img src="img/chap1/btn9_o.png">
    <img id="cha1_img9" class="img_hover" src="img/chap1/btn9.png">
  </a>

</div>









<div id="home"><img src="img/chap2/bg_chap2.jpg"/></div>
<p class="center">L’Atelier / TRANS305 s’installe au coeur du chantier</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/eF5r25aqZTw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>






<script type="text/javascript">
  
  document.getElementById("cha1_img2").style.display = "none"
  document.getElementById("cha1_img3").style.display = "none"
  document.getElementById("cha1_img4").style.display = "none"
  document.getElementById("cha1_img5").style.display = "none"
  document.getElementById("cha1_img6").style.display = "none"
  document.getElementById("cha1_img9").style.display = "none"

  function show_img(img){
  document.getElementById(img).style.display = "unset"
  }

  function reset_over(){
  document.getElementById("cha1_img2").style.display = "none"
  document.getElementById("cha1_img3").style.display = "none"
  document.getElementById("cha1_img4").style.display = "none"
  document.getElementById("cha1_img5").style.display = "none"
  document.getElementById("cha1_img6").style.display = "none"
  document.getElementById("cha1_img9").style.display = "none"

 }
 
</script>






<div id="slider_photo">
   <script>var nombre_img = 33 ; </script>

  <div id="bloc_img">
  </div>

  <div><a href="#" class = "fleche position_fleche_droite" onclick="img_next(); "> &#62; </a></div>
    <div><a href="#" class = "fleche position_fleche_gauche" onclick="img_pre(); "> &#60; </a></div>

    <p id="feedbak">1</p>
    <a  class="bt_fermer" onclick="document.getElementById('slider_photo').style.display = 'none', document.getElementById('player_video').style.display = 'none' " >X</a> 


    <script>
    document.getElementById("feedbak").innerHTML = img_en_cour + "/" + nombre_img ;
    </script>




  <div id="bloc_texte">
    <h1 class="titre_projet">Titre</h1>
    
<p>Sous-titre</p>

  </div>
</div>









<div id="player_video">

</div>
<!--
<hr/>



<a onclick=" puch_content(slide_01); document.getElementById('slider_photo').style.display = 'block' ;" >Slider N1</a> 
<a onclick=" puch_content(slide_02); document.getElementById('slider_photo').style.display = 'block' " >Slider N2</a> 

<a href="#" onclick=" puch_video('iwcRbM6FfN8') ; document.getElementById('player_video').style.display = 'block' ;"   >VIDEO CHAP 1</a> 

<a href="#" onclick="document.getElementById('slider_photo').style.display = 'none' , document.getElementById('player_video').style.display = 'none' " >fermer</a> 
-->




<style type="text/css">
.bt_fermer {
  font-size: 50px;
  position: absolute;
  right: 30px;
  top: 40px;
}
.bt_fermer:hover { cursor: pointer  }
 
#slider_photo{
  position: fixed;
  top: 0;
    width: 100%;
  height: 100%;
}


#player_video{
display: block;
position: fixed;
top: 0;
background: #FFF;
width: 100vw;
height: 100vh;
padding-top: 90px;
}



#bloc_img {
  min-height: 100vh;
  background-color: #e3e3e3;
}

.fleche {
  color: #000;
}

#bloc_texte {
  position: absolute;
  bottom: 140px;
  left: 100px;
}

#feedbak {
  font-size: 16px;
  text-decoration: none;
  color: black;
  right: 40px;
  bottom: 130px;
  position: absolute;
}
</style>





<script type="text/javascript">
const slide_01 = [];
slide_01.push(
  "img/chap1/slide_construction/1.jpg", 
  "img/chap1/slide_construction/2.jpg", 
  "img/chap1/slide_construction/3.jpg", 
  "img/chap1/slide_construction/4.jpg", 
  "img/chap1/slide_construction/5.jpg", 
  "img/chap1/slide_construction/6.jpg",
  "img/chap1/slide_construction/7.jpg", 
  "img/chap1/slide_construction/8.jpg", 
  "img/chap1/slide_construction/9.jpg", 
  "img/chap1/slide_construction/10.jpg", 
  "img/chap1/slide_construction/11.jpg", 
  "img/chap1/slide_construction/12.jpg",
  "img/chap1/slide_construction/13.jpg", 
  "img/chap1/slide_construction/14.jpg", 
  "img/chap1/slide_construction/15.jpg", 
  "img/chap1/slide_construction/16.jpg", 
  "img/chap1/slide_construction/17.jpg", 
  "img/chap1/slide_construction/18.jpg",
  "img/chap1/slide_construction/19.jpg",
  "img/chap1/slide_construction/20.jpg",
  "img/chap1/slide_construction/21.jpg",
  "img/chap1/slide_construction/22.jpg",
  "img/chap1/slide_construction/23.jpg",
  "img/chap1/slide_construction/24.jpg",
  "img/chap1/slide_construction/25.jpg",
  "img/chap1/slide_construction/26.jpg",
  "img/chap1/slide_construction/27.jpg",
  "img/chap1/slide_construction/28.jpg",
  "img/chap1/slide_construction/29.jpg",
  "img/chap1/slide_construction/30.jpg",
  "img/chap1/slide_construction/31.jpg",
  "img/chap1/slide_construction/32.jpg",
  "img/chap1/slide_construction/33.jpg"
  );

const slide_02 = [];
slide_02.push(
  "../chapter2/slides/workshop_graphistes/1.jpg", 
  "../chapter2/slides/workshop_graphistes/2.jpg", 
  "../chapter2/slides/workshop_graphistes/3.jpg",
  "../chapter2/slides/workshop_graphistes/4.jpg",
  "../chapter2/slides/workshop_graphistes/5.jpg",
  "../chapter2/slides/workshop_graphistes/6.jpg",
  "../chapter2/slides/workshop_graphistes/7.jpg",
  "../chapter2/slides/workshop_graphistes/8.jpg",
  "../chapter2/slides/workshop_graphistes/9.jpg", 
  "../chapter2/slides/workshop_graphistes/10.jpg", 
  "../chapter2/slides/workshop_graphistes/11.jpg",
  "../chapter2/slides/workshop_graphistes/12.jpg",
  "../chapter2/slides/workshop_graphistes/13.jpg",
  "../chapter2/slides/workshop_graphistes/14.jpg",
  "../chapter2/slides/workshop_graphistes/15.jpg",
  "../chapter2/slides/workshop_graphistes/16.jpg"
  );

function reset(){
// desactive le slide
document.getElementById("slider_photo").style.display = "none"

// desactive le player video
document.getElementById("player_video").style.display = "none"
}



function puch_content(slide_selec){
    
console.log("puch_content"+slide_selec);
    
    reset()

    // selec slider
    var_slide = slide_selec 

    var nombre_img = var_slide.length ; 



    var_slide.forEach(myFunction)
    // let  html_slide_content="lala"
    function myFunction(item, index, arr) {

    //console.log("index"+index);
     let index_nb = index
     index_nb = Number(index_nb)+1

       if(index==0){
         carName =  '<div  id="'+index_nb+'" class="img_param img_in display_on" style="" id="'+index_nb+'" ><img id="img_projet_'+index_nb+'" class="img_projet_grand" src="'+item+'" alt="" /></div>';
       }

      if(index!=0){
       carName = carName+  '<div id="'+index_nb+'" class="img_param img_in display_off" style="" id="'+index_nb+'" ><img id="img_projet_'+index_nb+'" class="img_projet_grand" src="'+item+'" alt="" /></div>';
      }
    } 

    //push content
    document.getElementById("bloc_img").innerHTML = carName
}

function remove_video(){
const element = document.getElementById("playerid");
element.remove();
}


function puch_video(yt_id){
    reset()

    bt_close= "<a  class='bt_fermer' onclick=\"document.getElementById('slider_photo').style.display = 'none', document.getElementById('player_video').style.display = 'none', remove_video() \" >X</a>"

    ifram='<iframe id="playerid"  width="800" height="600" allowscriptaccess="always"  src="https://www.youtube-nocookie.com/embed/'+yt_id+'?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>'

     //push content // 
    document.getElementById("player_video").innerHTML = ifram+bt_close

    // puch_content(slide_02);
    var myPlayer = document.getElementById('playerid');
    //myPlayer.stopVideo();

    document.getElementById('player_video').style.display = 'block' 
}

// init
reset()


</script>

</body>
</html>