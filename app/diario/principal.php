<style>
  .panel-periodoLegislativos>.panel-body {
    background-color: rgba(239, 239, 239, 0.6);
    color: #FFF;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 100%;
    margin: auto;
    text-align: center;
    font-family: arial;
    border-radius: 30px;
    background-color: #fff;
    padding: 0px;
  }

  button {}

  button:hover,
  a:hover {
    opacity: 0.7;
  }

  .titulo-diario h3 {
    margin: .25em 0 1.25em 0;
    padding-right: 5px;
    padding-left: 5px;
    font-size: 30px;
    color: #2E1B16;
    text-shadow: 4px 4px 2px rgba(150, 150, 150, 0.5);
    text-align: center;
  }

  #divOculto {
    display: none;
  }

  .text-title {
    font-size: 36px;
    font-family: "Open Sans", sans-serif;
    color: #fff;
    font-style: normal;
    font-weight: 300 !important;
  }

  .p-text {
    font-weight: 300;
    font-family: "Open Sans", sans-serif;
    color: #fff;
  }

  .a-text {
    font-family: "Open Sans", sans-serif !important;
    font-size: 16px !important;
    text-decoration: none;
    font-weight: 300;
    color: #fff;
  }

  .p-text-usar {
    margin-bottom: 0 !important;
    font-weight: 300;
    font-family: "Open Sans", sans-serif;
    color: #fff;
  }

  #divOculto {
    display: none;
  }


  table {
    font-family: 'Verdana', sans-serif !important;

  }

  .link-text {
    text-decoration: none !important;
    font-family: "Open Sans", sans-serif !important;
    font-size: 16px !important;
    text-decoration: none;
    font-weight: 300;
    color: #000000;
  }



  @media screen and (max-width: 640px) {
    .titulo-diario h3 {
      font-size: 22px;
    }
  }
</style>




<div class="container py-5">
  <div class="container-fluid">
    <h1 class="mt-2 tittle-search text-center mb-3">Búsqueda Avanzada</h1>
  </div>
  <!-----------Contenerdor de la Busqueda------------->
  <div class="container-fluid border border-success p-2 border-opacity-10 rounded py-5 ">
    <form id="searchForm">
      <!-----------Contenerdor del input tipo text------------->
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="d-flex">
              <div class="d-sm-block col-xs-12 col-sm-12 col-md-10 col-lg-8">
                <input type="text" id="search_text" name="search_text" class="form-control"
                  placeholder="¿Qué quieres buscar?" required>
              </div>
              <div class="d-sm-block d-grid col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <button type="submit" class="btn btn-primary   align-middle fw-semibold">Buscar</button>
              </div>
              <div class="d-sm-block d-grid col-xs-12 col-sm-12 col-md-2 col-lg-2">
                <button type="button" class="btn " id="clearFilters">Limpiar</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-----------Contenerdor de los filtros------------->

      <div class="container-fluid my-5">
        <div class="row justify-content-center">
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
            <label for="category" class="fw-semibold">Selecciona una categoría</label>
            <?php include 'C:\xampp\htdocs\65_diario\app\diario\busqueda\select_options.php'; ?>
          </div>
          <div class="align-self-end col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="input-search rounded">
              <form action="" method="post">
                <div class="d-flex align-items-center">
                  <label for="checkbox" class="fw-semibold px-3 py-1">Periodo de tiempo
                  </label>

                  <div class="d-flex align-items-stretch form-check">
                    <input type="checkbox" id="checkbox" name="checkbox" class="form-check-input " required>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          </div>
        </div>
      </div>
      <!-----------Contenerdor de los calendarios------------->

      <div class="container-fluid mt-2" id="divOculto">
        <div class="row justify-content-end pt-2">
          <div class=" border border-1 rounded col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
            <div class="">
              <label for="start_date" class="fw-semibold">Fecha de inicio:</label>
              <input type="date" id="start_date" name="start_date" class="form-control" required>
            </div>
          </div>
          <div class=" border border-1 rounded col-xs-12 col-sm-12 col-md-4 col-lg-4 p-3">
            <div class="">
              <label for="end_date" class="fw-semibold">Fecha de fin:</label>
              <input type="date" id="end_date" name="end_date" class="form-control" required>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>


<div id="spinner" style="display: none;" class="text-center">
  <i class="fa fa-spinner fa-spin"></i> Cargando...
</div>

<div class="container pb-4">
  <div id="searchResults" class="container mt-4 pagination"></div>
</div>






<div class="row">
  <div class="col-sm-6 mb-5">

    <div style="margin: 0px 0; padding-left: 0px; padding-right: 0px; border: 0px #f00 solid;" class="card">

      <div class="row" style=" margin-top: 0px; border: 0px #f00 solid;">
        <div class="col-sm-5 text-center" style=" border: 0px #f00 solid;padding-top: 10px;padding-bottom: 10px;">
          <img src="<?php echo URL; ?>images/diario_de_los_debates/libro_diario_boton.png" style="max-height: 310px;">
        </div>
        <div class="col-sm-7 text-center" style=" border: 0px #f00 solid;">
          <p
            style=" padding-top: 10px; font-size: 30px; color: #2E1B16; text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.5); ">
            Último Diario de Debates</p>
          <?= UltimoDiarioD($conecta_base) ?>
        </div>
      </div>
    </div>

  </div>

  <div class="col-sm-6 mb-5">
    <div class="panel panel-default"
      style="margin-bottom: 0; border-radius: 30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
      <div class="panel-body" style="background: #EBE7E6; border-radius: 30px; padding: 0;">
        <div id="calendarioOrdenDia"></div>
        <div id="loaderCalendario"></div>
      </div>
    </div>
  </div>
</div>


<!-------------------------->
<div class="row">
  <div class="col-sm-12 titulo-diario">
    <h3>
      <?php
      switch ($var1) {

        case "LIII":
          $lg = "53";
          echo "<strong>LIII Legislatura (1985-1988)</strong>";
          $periodo1 = "Septiembre 1985 - agosto 1986";
          $periodo2 = "Septiembre 1986 - agosto 1987";
          $periodo3 = "Septiembre 1987 - agosto 1988";
          break;
        case "LIV":
          $lg = "54";
          echo "<strong>LIV Legislatura (1988-1991)</strong>";
          $periodo1 = "Septiembre 1988 - agosto 1989";
          $periodo2 = "Septiembre 1989 - agosto 1990";
          $periodo3 = "Septiembre 1990 - agosto 1991";
          break;
        case "LV":
          $lg = "55";
          echo "<strong>LV Legislatura (1991-1994)</strong>";
          $periodo1 = "Septiembre 1991 - agosto 1992";
          $periodo2 = "Septiembre 1992 - agosto 1993";
          $periodo3 = "Septiembre 1993 - agosto 1994";
          break;
        case "LVI":
          $lg = "56";
          echo "<strong>LVI Legislatura (1994-1997)</strong>";
          $periodo1 = "Septiembre 1994 - agosto 1995";
          $periodo2 = "Septiembre 1995 - agosto 1996";
          $periodo3 = "Septiembre 1996 - agosto 1997";
          break;
        case "LVII":
          $lg = "57";
          echo "<strong>LVII Legislatura (1997-2000)</strong>";
          $periodo1 = "Septiembre 1997 - agosto 1998";
          $periodo2 = "Septiembre 1998 - agosto 1999";
          $periodo3 = "Septiembre 1999 - agosto 2000";
          break;
        case "LVIII":
          $lg = "58";
          echo "<strong>LVIII Legislatura (2000-2003)</strong>";
          $periodo1 = "Septiembre 2000 - agosto 2001";
          $periodo2 = "Septiembre 2001 - agosto 2002";
          $periodo3 = "Septiembre 2002 - agosto 2003";
          break;
        case "LIX":
          $lg = "59";
          echo "<strong>LIX Legislatura (2003-2006)</strong>";
          $periodo1 = "Septiembre 2003 - agosto 2004";
          $periodo2 = "Septiembre 2004 - agosto 2005";
          $periodo3 = "Septiembre 2005 - agosto 2006";
          break;
        case "LX":
          $lg = "60";
          echo "<strong>LX Legislatura (2006-2009)</strong>";
          $periodo1 = "Septiembre 2006 - agosto 2007";
          $periodo2 = "Septiembre 2007 - agosto 2008";
          $periodo3 = "Septiembre 2008 - agosto 2009";
          break;
        case "LXI":
          $lg = "61";
          echo "<strong>LXI Legislatura (2009-2012)</strong>";
          $periodo1 = "Septiembre 2009 - agosto 2010";
          $periodo2 = "Septiembre 2010 - agosto 2011";
          $periodo3 = "Septiembre 2011 - agosto 2012";
          break;
        case "LXII":
          $lg = "62";
          echo "<strong>LXII Legislatura (2012-2015)</strong>";
          $periodo1 = "Septiembre 2012 - agosto 2013";
          $periodo2 = "Septiembre 2013 - agosto 2014";
          $periodo3 = "Septiembre 2014 - agosto 2015";
          break;
        case "LXIII":
          $lg = "63";
          echo "<strong>LXIII Legislatura (2015-2018)</strong>";
          $periodo1 = "Septiembre 2015 - agosto 2016";
          $periodo2 = "Septiembre 2016 - agosto 2017";
          $periodo3 = "Septiembre 2017 - agosto 2018";
          break;
        case "LXIV":
          $lg = "64";
          echo "<strong>LXIV Legislatura (2018-2021)</strong>";
          $periodo1 = "Septiembre 2018 - agosto 2019";
          $periodo2 = "Septiembre 2019 - agosto 2020";
          $periodo3 = "Septiembre 2020 - agosto 2021";
          break;
        case "LXV":
          $lg = "65";
          echo "<strong>LXV Legislatura (2021-2024)</strong>";
          $periodo1 = "Septiembre 2021 - agosto 2022";
          $periodo2 = "Septiembre 2022 - agosto 2023";
          $periodo3 = "Septiembre 2023 - agosto 2024";
          break;
        default:
          $lg = "65";
          echo "<strong>LXV Legislatura (2021-2024)</strong>";
          $periodo1 = "Septiembre 2021 - agosto 2022";
          $periodo2 = "Septiembre 2022 - agosto 2023";
          $periodo3 = "Septiembre 2023 - agosto 2024";
          break;
      }
      ?>
    </h3>
  </div>
</div>


<div class="row">
  <div class="col-sm-4 text-center" style="height: auto;">
    <div class="card" style="width:100%">
      <img src="<?php echo URL; ?>images/diario_de_los_debates/btn1a.png"
        style="width: 100%; margin-top: 0px; border-top-left-radius: 30px; border-top-right-radius: 30px;">
      <p style=" font-size: 18px; margin-top: 5px; margin-bottom: -20px;">
        <?php echo $periodo1; ?>
      </p>
      <div style="margin: 24px 0; border: 0px #f00 solid;" class="container-fluid">
        <div class="row" style=" margin-top: 0px;">
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid; ">
            <?= busca_periodos64($watch, $lg, 1, "O", 1, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 1, "O", 2, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 1, "R", 2, $conecta_base) ?>
          </div>
        </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" margin-bottom: 10px; margin-top: 10px;">
          <tr>
            <td colspan="3">
              <?php echo busca_extraordinario64($watch, $lg, 1, $conecta_base); ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center" style="height: auto;">
    <div class="card">
      <img src="<?php echo URL; ?>images/diario_de_los_debates/btn2a.png"
        style="width: 100%; margin-top: 0px; border-top-left-radius: 30px; border-top-right-radius: 30px;">
      <p style=" font-size: 18px; margin-top: 5px; margin-bottom: -20px;">
        <?php echo $periodo2; ?>
      </p>
      <div style="margin: 24px 0; border: 0px #f00 solid;" class="container-fluid">
        <div class="row" style=" margin-top: 0px;">
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid; ">
            <?= busca_periodos64($watch, $lg, 2, "O", 1, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 2, "O", 2, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 2, "R", 2, $conecta_base) ?>
          </div>
        </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" margin-bottom: 10px; margin-top: 10px;">
          <tr>
            <td colspan="3">
              <?php echo busca_extraordinario64($watch, $lg, 2, $conecta_base); ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center" style="height: auto;">
    <div class="card">
      <img src="<?php echo URL; ?>images/diario_de_los_debates/btn3a.png"
        style="width: 100%; margin-top: 0px; border-top-left-radius: 30px; border-top-right-radius: 30px;">
      <p style=" font-size: 18px; margin-top: 5px; margin-bottom: -20px;">
        <?php echo $periodo3; ?>
      </p>
      <div style="margin: 24px 0; border: 0px #f00 solid;" class="container-fluid">
        <div class="row" style=" margin-top: 0px;">
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid; ">
            <?= busca_periodos64($watch, $lg, 3, "O", 1, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 3, "O", 2, $conecta_base) ?>
          </div>
          <div class="col-sm-4 text-center" style=" border: 0px #f00 solid;">
            <?= busca_periodos64($watch, $lg, 3, "R", 2, $conecta_base) ?>
          </div>
        </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style=" margin-bottom: 10px; margin-top: 10px;">
          <tr>
            <td colspan="3">
              <?php echo busca_extraordinario64($watch, $lg, 3, $conecta_base); ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-12" style="padding-right: 5px; padding-left: 5px; font-size: 30px; color: #2E1B16; "
    align="center">
    <?php
    if ($var2 != NULL) {
      $conteo = substr_count($var2, '_');
      if ($conteo == 1) {
        $anio = NULL;
        $tp = NULL;
        $np = NULL;
        list($anio, $tp) = explode("_", $var2);
        if ($tp == "CP") {
          include("boton_permanente.php");
        } else {
          switch ($tp) {
            case "E":
              $periodo = "<strong>Periodo Extraordinario</strong>";
              break;
            case "O":
            case "OD":
              $periodo = "<strong>Periodo Ordinario</strong>";
              break;
            case "R":
              $periodo = "<strong>Receso</strong>";
              break;
            case "CP":
              $periodo = "";
              break;
            default:
              $periodo = "<strong>Primer Periodo Ordinario</strong>";
              break;
          }

          switch ($np) {
            case 1:
              $num_periodo = "<strong>Primer $periodo</strong>";
              break;
            case 2:
              $num_periodo = "<strong>Segundo $periodo</strong>";
              break;
            default:
              $num_periodo = "<strong>$periodo</strong>";
              break;
          }
          switch ($anio) {
            case 1:
              echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>";
              break;
            case 2:
              echo "<strong>2do. A&ntilde;o de Ejercicio $num_periodo</strong>";
              break;
            case 3:
              echo "<strong>3er. A&ntilde;o de Ejercicio $num_periodo</strong>";
              break;
            default:
              echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>";
              break;
          }
          include("bxslider/index.php");
        }
      } elseif ($conteo == 2) {
        $anio = NULL;
        $tp = NULL;
        $np = NULL;
        list($anio, $tp, $np) = explode("_", $var2);
        switch ($tp) {
          case "E":
            $periodo = "<strong>Periodo Extraordinario</strong>";
            break;
          case "O":
          case "OD":
            $periodo = "<strong>Periodo Ordinario</strong>";
            break;
          case "R":
            $periodo = "<strong>Receso</strong>";
            break;
          case "CP":
            $periodo = "";
            break;
          default:
            $periodo = "<strong>Primer Periodo Ordinario</strong>";
            break;
        }

        switch ($np) {
          case 1:
            $num_periodo = "<strong>Primer $periodo</strong>";
            break;
          case 2:
            $num_periodo = "<strong>Segundo $periodo</strong>";
            break;
          default:
            $num_periodo = "<strong>$periodo</strong>";
            break;
        }
        switch ($anio) {
          case 1:
            echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>";
            break;
          case 2:
            echo "<strong>2do. A&ntilde;o de Ejercicio $num_periodo</strong>";
            break;
          case 3:
            echo "<strong>3er. A&ntilde;o de Ejercicio $num_periodo</strong>";
            break;
          default:
            echo "<strong>1er. A&ntilde;o de Ejercicio $num_periodo</strong>";
            break;
        }
        echo "<div class='mt-5'></div>";
        include("bxslider/index.php");
      }
    }
    ?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LXV/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LXV</b><br></span>2021-2024<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LXIV/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LXIV</b><br></span>2018-2021<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LXIII/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LXIII</b><br></span>2015-2018<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LXII/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LXII</b><br></span>2012-2015<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LXI/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LXI</b><br></span>2009-2012<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LX/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LX</b><br></span>2006-2009<span></a>
  </div>
</div>
<div class="row">
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LIX/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LIX</b><br></span>2003-2006<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LVIII/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LVIII</b><br></span>2000-2003<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LVII/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LVII</b><br></span>1997-2000<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LVI/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LVI</b><br></span>1994-1997<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LV/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LV</b><br></span>1991-1994<span></a>
  </div>
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LIV/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LIV</b><br></span>1988-1991<span></a>
  </div>
</div>
<div class="row">
  <div class="col-sm-2" style="padding-right: 5px; padding-left: 5px;">
    <a class="btn btn-default" href="<?php echo URL . $watch . "/LIII/1_O_1"; ?>" role="button"
      style=" width: 95%; padding:10px; margin: 10px; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);"><span
        style=" font-size: 28px;"><b>LIII</b><br></span>1985-1988<span></a>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <?php echo listadoDiarios($lg, 1, $conecta_base); ?>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <?php echo listadoDiarios($lg, 2, $conecta_base); ?>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <?php echo listadoDiarios($lg, 3, $conecta_base); ?>
  </div>
</div>

<script>
  $(document).ready(function () {
    loadCalendario(<?php echo date("Y"); ?>, <?php echo date("m"); ?>, <?php echo date("d"); ?>);
  });

  function loadCalendario(anio, mes, dia) {
    var parametros = { "action": "ajax", "anio": anio, "mes": mes, "dia": dia };
    $("#loaderCalendario").fadeIn('slow');
    $.ajax({
      url: '<?php echo URL; ?>app/diario/functions/calendarioMes2.php',
      data: parametros,
      beforeSend: function (objeto) {
        $("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
      },
      success: function (data) {
        $("#calendarioOrdenDia").html(data).fadeIn('slow');
        $("#loaderCalendario").html("");
      }
    })
  }
  function ChangeUrl(formulaire) {
    if (formulaire.ListeUrl.selectedIndex != 0) {
      $("#loaderCalendario").fadeIn('slow');
      console.log(formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value);
      $.ajax({
        url: '<?php echo URL; ?>app/diario/functions/calendarioMes2.php',
        data: formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value,
        beforeSend: function (objeto) {
          $("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
        },
        success: function (data) {
          $("#calendarioOrdenDia").html(data).fadeIn('slow');
          $("#loaderCalendario").html("");
        }
      })
    } else {
      alert('Tienes que elegir un destino.');
    }
  }
</script>
<!--
<script>
  $(document).ready(function(){
    loadCalenadrio(<?php echo date("Y"); ?>, <?php echo date("m"); ?>);
  });

  function loadCalenadrio(anio, mes){
    var parametros = { "action":"ajax", "anio":anio, "mes":mes };
    $("#loaderCalendario").fadeIn('slow');
    $.ajax({
      url:'<?php echo URL; ?>app/diario/functions/calendarioMes.php',
      data: parametros,
      beforeSend: function(objeto){
        $("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
      },
      success:function(data){
        $("#calendariosintesis").html(data).fadeIn('slow');
        $("#loaderCalendario").html("");
      }
    })
  }
  function ChangeUrl(formulaire) {
    if (formulaire.ListeUrl.selectedIndex != 0) {
      $("#loaderCalendario").fadeIn('slow');
      console.log(formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value);
      $.ajax({
        url:'<?php echo URL; ?>app/diario/functions/calendarioMes.php',
        data: formulaire.ListeUrl.options[formulaire.ListeUrl.selectedIndex].value,
        beforeSend: function(objeto){
          $("#loaderCalendario").html("<img src='<?php echo URL; ?>images/loader.gif' width='25px'>");
        },
        success:function(data){
          $("#calendariosintesis").html(data).fadeIn('slow');
          $("#loaderCalendario").html("");
        }
      })
    } else  {
      alert('Tienes que elegir un destino.');
    }
  }
</script>
-->



<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('checkbox').addEventListener('change', function () {
      var divOculto = document.getElementById('divOculto');
      divOculto.style.display = this.checked ? 'block' : 'none';
    });

    // Función para cargar la página actual
    function loadPage(page) {
      $("#spinner").show();
      var selectedCategory = $("#category").val();
      var startDate = $("#start_date").val();
      var endDate = $("#end_date").val();
      var searchText = $("#search_text").val();

      $.ajax({
        type: "POST",
        url: "search.php",
        data: {
          category: selectedCategory,
          start_date: startDate,
          end_date: endDate,
          search_text: searchText,
          page: page,
        },
        success: function (response) {
          $("#searchResults").html(response);
          $("#spinner").hide();
        },
        error: function (xhr, status, error) {
          console.error(xhr.responseText);
          $("#spinner").hide();
        },
      });
    }

    // Manejar clics en botones de paginación
    $(document).on('click', '.page-btn', function () {
      var page = $(this).data('page');
      loadPage(page);
    });

    $("#searchForm").submit(function (event) {
      event.preventDefault(); // Evitar el envío del formulario
      loadPage(1); // Cargar la página 1 al enviar el formulario
    });

    $('#clearFilters').click(function () {
      $('#category').val('');
      $('#start_date').val('');
      $('#end_date').val('');
      $('#search_text').val('');
      $('#searchResults').empty(); // Limpiar resultados de búsqueda
    });
  });

</script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>