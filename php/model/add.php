<?php 
    include("../database/db_conect.php");

    if(isset($_POST["submit"])){
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $quarter = $_POST['quarter'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
   
    <nav class="navbar navbar-expand-sm bg-local navbar-local fixed-top" style="background-color: rgba(255, 211, 152, 1);">
        <div class="container justify-content-center">
            <div class="navbar-brand d-flex justify-content-center align-items-center">
                <a class="nav-link" href="#" style="cursor: default;"><img src="../../img/logo-icon-title.png" alt="logo-icon" width="50px"></a>
                <h3 class="mx-3 mt-2 align-items-center">MoraPan</h3>
            </div>
        </div>
    </nav>

    <div class="container mt-4" style="padding-top: 50px;">
        <div class="row rows-col-1">
            <div class="col d-flex mb-3 justify-content-start align-items-center">
                <a class="img" href="#" style="cursor: default;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="background-color" class="bi bi-person-add" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg>
                </a><h3 class="container mt-2 align-items-center">Añadir</h3>
            </div>
                
            <div class="container mt-3">
                <form action="#" method="post" class="row g-3 needs-validation justify-content-center" novalidate>
                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationNameUser" style="font-weight: 500;">Nombres: </label>
                            <input type="text" class="form-control mx-2" id="validationNameUser" name="first_name" value="" placeholder="Escribe aquí..." required >
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationLastNameUser" style="font-weight: 500;">Apellidos: </label>
                            <input type="text" class="form-control mx-2" id="validationLastNameUser" name="last_name" value="" placeholder="Escribe aquí..." required >
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationPhone" style="padding-right: 5px; font-weight: 500;">Teléfono: </label>
                            <input type="text" class="form-control mx-2" id="validationPhone" name="phone" value="" placeholder="Escribe aquí..." required >
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationAddress" style="font-weight: 500;">Dirección: </label>
                            <input type="text" class="form-control mx-2" id="validationAddress" name="address" value="" placeholder="Escribe aquí..." required >
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationQuarter" style="padding-right: 25px; font-weight: 500;">Barrio: </label>
                            <input type="text" class="form-control mx-2" id="validationQuarter" name="quarter" value="" placeholder="Escribe aquí..." required >
                        </div>
                    </div>

                    <div class="form-check d-flex justify-content-center align-items-center">
                        <div>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Cliente</label>
                        </div>

                        <div class="mx-5">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">Domiciliario</label>
                        </div>

                        <div>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">Empleado de caja</label>
                        </div>
                    </div>

                    <div class="row g-2 mt-3 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <a class="btn btn-danger w-25 mx-1" type="button" href="../view/index.php">Cancelar</a>
                            <button class="btn btn-primary w-25 mx-1" type="submit">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- scripts js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>