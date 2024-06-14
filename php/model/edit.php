<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
   
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
    
    
    <div class="container mt-5" style="padding-top: 50px;">
        <div class="row">
        
            <div class="container">
                <div class="row">
                    
                    <div class="col d-flex justify-content-end align-items-center">
                        <a class="img me-3" href="#" style="cursor: default;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="background-color" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                        </a>
                        <h4>Editar</h4>
                    </div>
                    
                    <div class="col d-flex me-4 justify-content-start align-items-center">
                        <form action="#" class="d-flex">
                            <input class="form-control" type="search" placeholder="Buscar id...">
                            <a class="d-flex mx-3 align-items-center" href="#" type="img" style="color: black;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container mt-3" id="editAll">
                <form action="#" method="post" class="row g-3 needs-validation justify-content-center" novalidate>
                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationNameUser" style="font-weight: 500;">Nombres: </label>
                            <input type="text" class="form-control mx-2" id="validationNameUser" value="" placeholder="Escribe aquí..." required >
                            <div class="valid-feedback">
                                ¡Bien hecho!
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationLastNameUser" style="font-weight: 500;">Apellidos: </label>
                            <input type="text" class="form-control mx-2" id="validationLastNameUser" value="" placeholder="Escribe aquí..." required >
                            <div class="valid-feedback">
                                ¡Bien hecho!
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationAddress" style="font-weight: 500;">Dirección: </label>
                            <input type="text" class="form-control mx-2" id="validationAddress" value="" placeholder="Escribe aquí..." required >
                            <div class="valid-feedback">
                                ¡Bien hecho!
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationQuarter" style="padding-right: 25px; font-weight: 500;">Barrio: </label>
                            <input type="text" class="form-control mx-2" id="validationQuarter" value="" placeholder="Escribe aquí..." required >
                            <div class="valid-feedback">
                                ¡Bien hecho!
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex align-items-center">
                            <label for="validationPhone" style="padding-right: 5px; font-weight: 500;">Teléfono: </label>
                            <input type="text" class="form-control mx-2" id="validationPhone" value="" placeholder="Escribe aquí..." required >
                            <div class="valid-feedback">
                                ¡Bien hecho!
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mt-3 justify-content-center" style="padding-left: 0px;">
                        <div class="col-md-6 d-flex justify-content-center align-items-center">
                            <a class="btn btn-danger w-25 mx-1" type="button" href="../view/index.php" >Cancelar</a>
                            <a class="btn btn-primary w-25 mx-1" type="button">Guardar</a>
                        </div>
                    </div>
                    
                </form>
            </div>


        </div>
    </div>

</body>
</html>