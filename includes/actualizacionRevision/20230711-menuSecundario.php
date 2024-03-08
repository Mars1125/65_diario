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
  width: fit-content;
  height: fit-content;
  position: relative;
  margin-top: 3px;
}
.input-search{
  height: 25px;
  width: 150px;
  border-style: none;
  padding: 4px;
  font-size: 18px;
  letter-spacing: 2px;
  outline: none;
  border-radius: 25px;
  transition: all .5s ease-in-out;
  background-color: #efefef;
  padding-right: 20px;
  color:#000000;
}
.input-search::placeholder{
  color:rgba(255,255,255,.5);
  font-size: 18px;
  letter-spacing: 2px;
  font-weight: 100;
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

@media (max-width: 990px) {
  .input-search{
    width: 150px;
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
}
@media (max-width: 1200px) {
  .input-search{
    width: 150px;
  }
  
}
</style>

<!-- <div class="row" style="min-height: 40px; background-color: rgba(255, 255, 255, 1) !important; margin: 54px 0 0 0;position: fixed; z-index: 2001; width: 100%;">	     -->
<div class="row rowMenuSub" style="background-color: rgba(255, 255, 255, 1) !important; margin: 54px 0 0 0;position: fixed; z-index: 2001; width: 100%; height: 37px;">	    

<div class="container" style="margin-top: 6px;">
  <div class="row justify-content-md-center submenu">
    <!-- <div class="col col-lg-3 col-md-12 col-sm-12 col-xs-12">
      <b style="">Sobre el Senado</b>
    </div> -->
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
<!-- 
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-4"></div>							
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-1 text-left" style="padding-right:20px; padding-left:20px; padding-top: 10px; border: 0px solid #f00;"><b>Sobre el Senado</b></div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-1 text-left" style="padding-right:20px; padding-left:20px; padding-top: 10px; border: 0px solid #f00;"><b>Datos abiertos</b></div>
    <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 text-left" style="padding-right:20px; padding-left:20px; padding-top: 10px; border: 0px solid #f00;"><b>Accesibilidad</b></div>
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-left" style="padding-right:20px; padding-left:20px; padding-top: 3px; border: 0px solid #f00;"> -->


      <!-- <div class="search-box">
        <form action="<?php echo URL; ?>buscador/" class="search-form" method="post">
          <button class="btn-search"><i class="fa fa-search"></i></button>
          <input type="text" class="input-search" id="q" name="q" placeholder="Buscar...">
        </form> 
      </div> -->
<!-- 
    </div>
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-2"></div>		 -->
</div>