<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Ibrahim portfolio</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
</head>
<style type="text/css">
   body,html{
    width:100%;
   height: 100vh;
   margin:0;
   padding: 0;
   box-sizing: border-box;
   
  }
  section {
  
  
  opacity: 0;
  
  transform: translate(0,10%);
   transition: all 1s 0.8s;
}


section.visible { 

  transform: translate(0,0);
  opacity: 1;
}
    @-webkit-keyframes autofill {
to {
color: #666;
background: transparent; } }

@keyframes autofill {
to {
color: #666;
background: transparent; } }

input:-webkit-autofill {
-webkit-animation-name: autofill;
animation-name: autofill;
-webkit-animation-fill-mode: both;
animation-fill-mode: both; }

@media screen and (max-width:600px)
{
 
 section:not(:first-child){
  margin-top: 50%;
 }

}
</style>
<body >
  
<section id="intro" style="height: 100%; background:url('mon-site/team.jpg') center cover ;" class="view">
    <div class="mask rgba-black-strong ">

        <div class="container-fluid d-flex align-items-center justify-content-end h-100">

            <div class="row d-flex justify-content-around text-right">

                <div class="col-md-10">

                    <h2 class="white-text mb-2">Salut !</h4>
                    <h2 class="white-text mb-2">Je m'appelle Ibrahim Abdel</h4>
                    <h2 class=" font-weight-bold white-text pt-5 mb-2">Je suis un Developpeur Web en devenir</h2>
                     <p class="white-text  text-lead my-4">Je suis étudiant en 2ème année de licence informatique à L'IST (Institut Supérieur de Technologie).Dès ma première année étant en tronc commun j'ai été fasciné par ce domaine. Le dévelopement Web</p>
                    <a href="#desc-compe"  class="btn lien btn-success font-weight-bold">Voir plus<i class="fa fa-book ml-2"></i></a>

                </div>

            </div>

        </div>

    </div>

 </section>
   <nav class="navbar fixed-top navbar-expand-md navbar-dark green">
    <div class="container-fluid">
        <a class="navbar-brand animated delay-2s bounceInLeft text-left"  href="#">Ibrahim Abdel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon border-0"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <ul class="navbar-nav ml-md-auto">
                <li class="nav-item active">
                    <a class="nav-link lien" href="#intro">Acceuil
                        
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lien" href="#desc-compe">Compétences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lien" href="#form">Contact</a>
                </li>
            </ul>
        </div>  
</nav>
   <section id="desc-compe" class="section h-100 pt-sm-5 container  d-flex flex-column justify-content-center align-items-center">
    
          <h3 class="text-center text-muted font-weight-bold">Vue d'ensemble sur mes compétences</h3>
          <p class=" text-center  font-weight-bold">
         Depuis le début de mon apprentissage il y a 2 ans j'ai appris des langages dont la plupart concernent le developpement
         web.Vous voyez qu'a côté de certains langages sont marqués "en cours".Ces derniers sont en phase d'apprentissage. </p>
      
     
           <div class ="row-fluid justify-content-center ">
      <div  class="card-deck   mt-4 ">
      <div class="card col-sm-12 col-md-4 "> 
      <div class="card-body text-left mt-2">
        <h3 class="text-center font-weight-bold text-muted">Front-end</h3>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold"> HTML </p>
          <span class="badge flex-center badge-pill badge-primary">OK</span>
        </div>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold"> CSS (Cascading Style Sheets) 
            <small class="text-muted">Bootstrap</small>  </p>
          <span class="badge flex-center badge-pill badge-primary">OK</span>
        </div>
         
         <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold"> Javascript  
          </br><small class="text-muted" >Jquery</small>
           </p>
          <span class="badge flex-center badge-pill badge-primary">OK</span>
        </div>
       
      </div>
     </div>
     <!--1ere carte-->
    <div   class="card col-sm-12 col-md-4 ml-md-2"> 
     <div class="card-body text-left">
        <h3 class="text-center h3-reponsive font-weight-bold text-muted">Back-end</h3>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold"> PHP </p>
          <span class="badge flex-center badge-pill badge-primary">en cours</span>
        </div>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold"> Javascript</br> 
            <small class="text-muted" >AJAX</small> </p>
          <span class="badge flex-center badge-pill badge-primary">OK</span>
        </div>
        
      </div>
    </div>
    <!--2eme carte--> 
    <div class="card col-sm-12 col-md-4 ml-md-2"> 
     <div class="card-body">
        <h3 class="text-center font-weight-bold text-muted">Autres</h3>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold">React native<span class="
            dark-text">(app mobile)</span> </p>
          <span class="badge flex-center badge-pill badge-primary">en cours</span>
        </div>
        <div class="d-flex flex-row justify-content-between">
          <p class=" dark-text font-weight-bold">C</p>
          <span class="badge flex-center badge-pill badge-primary">en cours</span>
        </div>
      </div>
    </div> 
    <!--3eme carte-->
    </div>
     </div>
     
   </section>  
   <section style="height: 100%; " class=" d-flex flex-column justify-content-center align-items-center">
     <h1 class="h1-responsive font-weight-bold text-center ">Contactez moi</h1>
     <p class="text-lead font-weight-bold  text-center">Vous êtes intéressés ? Faite moi part de vos projets Web</p>
     <div class="container-fluid  d-flex justify-content-center align-items-center">
       <div class="row flex-center">
        <div class=" col-md-7 col-sm-12">
          <div class="row">
             <div class="alert col-12 offset-md-4 alert-danger" role="alert">  
              <p class="alert-texte text-center font-weight-bold dark-text"></p>
            </div>
          </div>
         
          <form id="form"  action="contact.php" method="post">
            <div class="row">
              <div class="col-6">
                <div class="md-form">
                  <input type="text" name="name" id="name" class="form-control font-weight-bold " required>
                  <label for="Nom">Nom</label>
                  <small class="form-text text-muted">Votre nom complet</small>
                </div>
              </div>
              <div class="col-6">
                <div class="md-form">
                  <input type="email" name="email" id="email" class="form-control font-weight-bold " required>
                  <label for="Email">Email</label>
                  <small class="form-text text-muted">Entrer une addresse email</small>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="md-form">
                  <input type="text" name="subject" id="subject" class="form-control font-weight-bold">
                  <label for="Nom">Sujet</label>
                  <small class="form-text text-muted">De quoi parle votre message ?</small>
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-12">
                <div class="md-form">
                  <textarea class="form-control font-weight-bold md-textarea" rows="2" name="message" id="message" required></textarea>
                  <label for="Nom">Votre message</label>
           
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit"  style="border-radius: 50px;" class=" btn btn-success "> 
              <i class="fas fa-paper-plane mr-2"></i>Envoyer</button>
            </div>
            

          </form>
        </div>
         <div class="col-md-4 float-right  text-center p-2">
                      <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt text-success fa-2x"></i>
                            <p class="text-lead">Libreville ,Bel Air</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 text-success fa-2x"></i>
                            <p class="text-lead">+241 07 45 20 17</p>
                        </li>

                        <li><i class="fas fa-envelope text-success mt-4 fa-2x"></i>
                            <p class="text-lead">abdeli12.ai@gmail.com</p>
                        </li>
                   </ul>
                </div>
         
       </div>
     </div>
   </section>
    <a href="#intro" style="border-radius: 50px;" class=" float-right mb-5 z-depth-2 btn btn-success lien text-white"><i class="fa fa-arrow-up fa-lg text-white"></i></a>


<div class="modal fade right "  id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="true" >
  <div class="modal-dialog modal-side modal-frame modal-top-right modal-notify modal-success"style="width: 100%;" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">

          <p class="pt-3 font-weight-bold">Les cookies améliorent votre expérience.En accepter vous l'utilisation ?</p>

          <a  id="accept" class="btn btn-success">Ok, merci <i class="fas fa-check ml-1"></i></a>
          <a  class="btn btn-outline-success waves-effect" id="refuse" >Non, merci</a>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
   <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript">
    $(function () {
     var lien=$('.lien');
       $(document).scroll(function () {
         var pageTop = $(this).scrollTop();
        var pageBottom = pageTop + $(this).height();
         var tags = $("section");

         for (var i = 0; i < tags.length; i++) {
          var tag=tags[i];
                    if ($(tag).position().top<pageBottom) {
                     $(tag).addClass('visible');

                    }
                    else{
                      $(tag).removeClass('visible');
                    }
             }
             lien.each(function(){
              if($(this.hash).offset().top<=pageTop)
               {
                 $(this).parent().siblings().removeClass('active');
                 $(this).parent().addClass('active');
                

               }
             }) 

       })
        lien.click(function(e){
         e.preventDefault();
          $('body,html').animate({
                    scrollTop:$(this.hash).offset().top
                  },1000)

       })
    })
     
  </script>
</body>

</html>
