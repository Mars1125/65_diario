<style type="text/css">
	.search-form .form-group {
  float: left !important;  
  transition: all 0.35s, border-radius 0s;  
  width: 32px;  
  height: 32px;  
  background-color: #fff;  
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;  
  border-radius: 25px;  border: 1px solid #ccc;
  margin-bottom: 0px;
}
.search-form .form-group input.form-control {
  padding-right: 20px;  
  border: 0 none;  
  background: transparent;  
  box-shadow: none;  
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;  
  top: -1px;  
  /* right: -2px;   */
  margin: 0 0 0 -15px;
  z-index: 2;  
  display: block;  
  width: 34px;  
  height: 34px;  
  line-height: 34px;  
  text-align: center;  
  color: #3596e0;  
  left: initial;  
  font-size: 14px;  
  background-color: aqua;
}
 














.search-box{
  width: 85%;
  height: auto;
  position: relative;
  margin: 0 auto;
}
.input-search{
  height: 25px;
  width: 100%;
  border-style: none;
  padding: 4px;
  font-size: 16px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 22px;
  transition: all .5s ease-in-out;
  background-color: #efefef;
  padding-right: 20px;
  color:#000000;
  padding-left: 16px;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 16px;
  letter-spacing: 2px;
  font-weight: 600;
  color:#484848;

   
}
.btn-search{
  width: 25px;
  height: 25px;
  border-style: none;
  font-size: 16px;
  font-weight: bold;
  outline: none;
  cursor: pointer;
  border-radius: 50%;
  position: absolute;
  right: 0px;
  color:#484848;
  background-color:transparent;
  pointer-events: painted;
  margin-right: 8px;
 }
/*.btn-search:focus ~ .input-search{
  width: 150px;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
}
.input-search:focus{
  width: 150px;
  color:#484848;
  border-radius: 0px;
  background-color: transparent;
  border-bottom:1px solid rgba(255,255,255,.5);
  transition: all 500ms cubic-bezier(0, 0.110, 0.35, 2);
  border-bottom: 1px solid #767676;
} */


.row-sm{
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x))
}
.row-sm .container-sm{
  width: 100%;
  max-width: 1290px;
  margin: 0 auto;
  display: flex;
  align-items: center;
}

.row-sm .container-sm .col-ms-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .row-sm .container-sm .col-ms-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .row-sm .container-sm .col-ms-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-sm .container-sm .col-ms-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-sm .container-sm .col-ms-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .row-sm .container-sm .col-ms-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-sm .container-sm .col-ms-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .row-sm .container-sm .col-ms-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .row-sm .container-sm .col-ms-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .row-sm .container-sm .col-ms-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .row-sm .container-sm .col-ms-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .row-sm .container-sm .col-ms-12 {
    flex: 0 0 auto;
    width: 100%;
  }
.row-sm .container-sm .col-sm{
    flex: 0 0 auto;
    width: 33.33333333%;
}
.row-sm .MenuSec01, .row-sm .MenuSec02{
  text-align: center;
}
@media (max-width: 1200px) {
  .input-search{
    width: 100%;
  }
  
}
@media (max-width: 1025px){
  .row-sm .container-sm .col-ms-5,.row-sm .container-sm .col-ms-3{
    width: 50%;
  }
}
@media (max-width: 990px) {
  .row-sm .container-sm{
    flex-direction: column;
  }
  .social-media-rss{
    margin-bottom: 7px;
  }
  .row-sm .container-sm .col-sm{
    flex: 0 0 auto;
    width: 100%;
}
.row-sm .container-sm .col-ms-5,.row-sm .container-sm .col-ms-3{
    width: 100%;
  }
  .input-search{
    width: 100%;
    height: 32px;
  }
  .rowMenuSub{
    height: auto !important; 
  }
  .subMenu01{
    margin:0 auto !important; 
    float: none !important;
  }
  .MenuSec01, .MenuSec02{
    display: none;
  }
  .search-box{
    width: 90%;
    margin-top: 8px;
    margin-bottom: 8px;
  }
  .btn-search {
    height: 32px;}
    
}
.social-media-rss{
  display: flex;
  flex-wrap: wrap;
    justify-content: center;
}
.social-media-rss .icon-rss{
  
  margin: 0 4px;
  text-align: center;
}

.social-media-rss .icon-rss a{
  font-size: 1.5em;
  width: 32px;
  display: block;
  border-radius: 4px;
  color: #fff;
}
.social-media-rss .icon-rss img{
    max-width: 28px;
    width: 100%;
    height: auto;
    margin-top: -4px;
    position: relative;
}
.social-media-rss .icon-rss .facebook{background: #3a5897;}
.social-media-rss .icon-rss .twitter{background: #2795e9;}
.social-media-rss .icon-rss .youtube{background: #DC2725;}
.social-media-rss .icon-rss .instagram{background: #3f729b;}
.social-media-rss .icon-rss .telegram{background: #0088cc;}
.social-media-rss .icon-rss .spotify{background: #1DB954;}
</style>

<div class="row-sm rowMenuSub" style="background-color: rgba(255, 255, 255, 1) !important; margin: 54px 0 0 0;position: fixed; z-index: 9; width: 100%; height: 37px;">
  <div class="container-sm">
    <div class="col-ms-2 MenuSec01">
      <a href="https://micrositios.senado.gob.mx/datos_abiertos" tabindex="14"><b>Datos abiertos</b></a>
    </div>
    <div class="col-ms-2 MenuSec02">
      <a href="https://micrositios.senado.gob.mx/accesibilidad" tabindex="15"><b>Accesibilidad</b></a>
    </div>
    <div class="col-ms-5">
        <div class="search-box"   style=" ">
          <form action="<?php echo URL; ?>buscador/" class="search-form" method="post">
            <!-- <label id="searchLabel" for="q"></label> -->
              <input type="text" class="input-search" id="q" name="q" placeholder="Buscar..." tabindex="16" aria-labelledby="searchLabel">
              <button class="btn-search" aria-labelledby="searchLabel"><i class="fa fa-search"></i></button>
              <span class="visually-hidden">Label for the input</span>
            
          </form> 
        </div> 
    </div>
    <div class="col-ms-3">
        <div class="social-media-rss">
            <div class="icon-rss">
              <a href="https://www.canaldelcongreso.gob.mx/"><img src="https://www.senado.gob.mx/65/images/canal_congreso_logo2.png"></a>
            </div>
            
            <div class="icon-rss">
              <a class="facebook" href="https://www.facebook.com/SenadoMexico" tabindex="81"><i class="fa-brands fa-facebook"></i> </a>
            </div>
            <div class="icon-rss">
              <a class="twitter" href="https://twitter.com/senadomexicano" tabindex="82"> <i class="fa fa-twitter"></i> </a>
            </div>
            <div class="icon-rss">
              <a class="youtube" href="https://www.youtube.com/SenadoMexico" tabindex="83"><i class="fa fa-youtube"></i> </a>
            </div>
            <div class="icon-rss">
              <a class="instagram" href="https://www.instagram.com/senadomexico/" tabindex="84"><i class="fa fa-instagram"></i> </a>
            </div>
            <div class="icon-rss">
              <a class="telegram" href="https://t.me/senadomexicano" tabindex="85"><i class="fa fa-telegram"></i> </a>
            </div>
            <div class="icon-rss">
              <a class="spotify" href="https://open.spotify.com/show/5uqzGC5WLRvspeSwB2LOlh?si=R3gUDA4DSJWumLTfF1sePw&amp;nd=1"><i class="fa fa-spotify"></i> </a>
            </div>
        </div>
    </div>
  </div>
</div>
<!--<div class="row rowMenuSub" style="background-color: rgba(255, 255, 255, 1) !important; margin: 54px 0 0 0;position: fixed; z-index: 2001; width: 100%; height: 37px;">	    
<div class="container" style="margin-top: 6px;">
  <div class="row justify-content-md-center submenu">
    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 MenuSec01">
      <div class="subMenu01" style="float: right;width: 130px;"><a href="https://micrositios.senado.gob.mx/datos_abiertos" tabindex="14"><b>Datos abiertos</b></a></div>
    </div>
    <div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12 MenuSec02">
      <div style="margin:0 auto;width: 110px;"><a href="https://micrositios.senado.gob.mx/accesibilidad" tabindex="15"><b>Accesibilidad</b></a></div>
    </div>
    <div class="col col-lg-1 col-md-4 col-sm-12 col-xs-12">
        <div class="search-box"   style=" ">
          <form action="<?php echo URL; ?>buscador/" class="search-form" method="post">
            <label id="searchLabel" for="q">
              <input type="text" class="input-search" id="q" name="q" placeholder="Buscar..." tabindex="16" aria-labelledby="searchLabel">
              <button class="btn-search" aria-labelledby="searchLabel"><i class="fa fa-search"></i></button>
              <span class="visually-hidden">Label for the input</span>
            </label>
          </form> 
        </div> 
    </div>
  </div>
</div>					

</div>
-->