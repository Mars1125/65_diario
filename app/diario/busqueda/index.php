<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c7b1d2a865.js" crossorigin="anonymous"></script>
</head>
<style>
    #divOculto {
        display: none;
    }
</style>



<body>
    <nav>
        <div class="container-fluid navbar">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col d-flex justify-content-end me-2">
                    <i class="fa-solid fa-house icono"></i>
                </div>
                <div class="col ">
                    Sobre el Senado
                </div>
                <div class="col border-start border-white lh-1">Órganos de Gobierno</div>
                <div class="col border-start border-white lh-1">Instituto Belisario Domínguez</div>
                <div class="col border-start border-white lh-1">Grupos Parlamentarios</div>
                <div class="col border-start border-white lh-1">Comisiones</div>
                <div class="col border-start border-white lh-1">Órganos Técnicos</div>
                <div class="col border-start border-white lh-1">Información Parlamentaria</div>
                <div class="col border-start border-white lh-1">Información Administrativa</div>
                <div class="col border-start border-white lh-1">Comunicación Social</div>
                <div class="col border-start border-white lh-1">Transparencia</div>
                <div class="col border-start border-white lh-1"></div>
            </div>
        </div>

    </nav>
    <section>
        <div class="container busqueda rounded">
            <div class="row justify-content-center text-center align-items-center p-1">
                <div class="col-2 pt-2">
                    <p class="fw-bolder">Datos abiertos</p>
                </div>
                <div class="col-2 pt-2">
                    <p class="fw-bolder">Accesibilidad</p>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <input type="email" class="form-control border border-black" id="exampleFormControlInput1"
                            placeholder="Busqueda...">
                    </div>
                </div>
                <div class="col-4 me-auto">
                    <div class="d-flex justify-content-evenly">
                        <div class="div"><img src="https://www.senado.gob.mx/65/images/canal_congreso_logo2.png" alt=""
                                class="img-icono"></div>
                        <div class="div"><i class="fa-brands fa-facebook-f" style="color: #56585d;"></i></div>
                        <div class="div"><i class="fa-brands fa-x-twitter" style="color: #464d59;"></i></div>
                        <div class="div"><i class="fa-brands fa-youtube" style="color: #4d525c;"></i></div>
                        <div class="div"><i class="fa-brands fa-instagram" style="color: #3f434b;"></i></div>
                        <div class="div"><i class="fa-brands fa-telegram" style="color: #454a54;"></i></div>
                        <div class="div"><i class="fa-brands fa-spotify" style="color: #41464e;"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid banner-diario">
            <div class="row">
                <div class="d-sm-block col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <h1 class="text-title mt-4 mx-5">Diario de los Debates</h1>
                </div>
                <div class="d-sm-block col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                            <p aling="center p-text">
                                <a href="" class="a-text">¿Qué es?</a><br>
                                <a href="" class="a-text">¿Qué contiene?</a><br>
                                <a href="" class="a-text">¿Como se consulta?</a><br>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-2">
                            <p class="p-text-usar">
                                <a href="" class="a-text">
                                    Como usar
                                </a>
                            </p>
                            <p class="p-text" style="padding-top:5px;">
                                <a href="">
                                    <img src="https://www.senado.gob.mx/65/images/65/cabecera/Icons_como_usar/circle_lines.png"
                                        alt="" class="img-responsive">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container mt-4 pb-3">
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
                                    <input type="text" id="search_text" name="search_text"
                                        class="form-control input-search" placeholder="¿Qué quieres buscar?" required>
                                </div>
                                <div class="d-sm-block d-grid col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                    <button type="submit"
                                        class="btn btn-primary px-4 ms-2 btn-search align-middle fw-semibold">Buscar</button>
                                </div>
                                <div class="d-sm-block d-grid col-xs-12 col-sm-12 col-md-2 col-lg-2">
                                    <button type="button" class="btn btn-secondary" id="clearFilters">Limpiar</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-----------Contenerdor de los filtros------------->

                <div class="container-fluid mt-4">
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                            <label for="category" class="fw-semibold">Selecciona una categoría</label>
                            <?php include('select_options.php'); ?>
                        </div>
                        <div class="align-self-end col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="input-search rounded">
                                <form action="" method="post">
                                    <div class="d-flex align-items-center">
                                        <label for="checkbox" class="fw-semibold px-3 py-1">Periodo de tiempo
                                        </label>

                                        <div class="d-flex align-items-stretch">
                                            <input type="checkbox" id="checkbox" name="checkbox"
                                                class="form-check-input " required>
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

    <div class="container">
        <div id="searchResults" class="container mt-4 pagination"></div>
    </div>


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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="index.js"></script>
</body>

</html>