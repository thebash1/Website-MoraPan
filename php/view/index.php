<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="../../img/logo-icon-website.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <nav class="navbar navbar-expand-lg fixed-top"style="background-color: rgba(255, 211, 152, 1);">
        <div class="container-fluid">
            <a class="navbar-brand mx-3" href="#" style="cursor: default;">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="background-color" class="bi bi-activity" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 2a.5.5 0 0 1 .47.33L10 12.036l1.53-4.208A.5.5 0 0 1 12 7.5h3.5a.5.5 0 0 1 0 1h-3.15l-1.88 5.17a.5.5 0 0 1-.94 0L6 3.964 4.47 8.171A.5.5 0 0 1 4 8.5H.5a.5.5 0 0 1 0-1h3.15l1.88-5.17A.5.5 0 0 1 6 2"/>
                </svg>
            </a>
            <h2>Dashboard</h2>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-style: none;">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav nav-underline" id="navbarNav">
                <ul class="navbar-nav ms-auto justify-content-center align-items-end">
                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="../model/addClient.php"  data-bs-toggle="tooltip" data-bs-placement="left" title="Agregar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="left" title="Buscar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../model/editClient.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Editar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item mx-3" >
                        <a class="nav-link" href="../model/deleteClient.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Eliminar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-dash" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="../../index.html" data-bs-toggle="tooltip" data-bs-placement="left" title="Salir">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid mt-5 text-center align-items-center" style="padding-top: 50px;">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-2" style="display: flex; position: relative; margin: 0px; padding: 0px 0 10px 10px;">Usuarios</h2>
                <table class="table mx-1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Teléfono</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Estado</th>
                            <th>Rol</th>
                            <th>Dirección</th>
                            <th>Barrio</th>
                        </tr>
                    
                        <tr>
                            <td>1</td>
                            <td>3002324339</td>
                            <td>Alex Daniel</td>
                            <td>Mora</td>
                            <td>Activo</td>
                            <td>Cliente</td>
                            <td>Carrera 10B1 #16A - 48</td>
                            <td>Brisas de buturama</td>
                        </tr>
                        
                        <tr>
                            <td>2</td>
                            <td>3128903031</td>
                            <td>Juan David</td>
                            <td>Rodriguez</td>
                            <td>Inactivo</td>
                            <td>Cliente</td>
                            <td>Calle 6 #34-2 </td>
                            <td>Alto prado</td>
                        </tr>
                        
                        <tr>
                            <td>3</td>
                            <td>3018683019</td>
                            <td>Juan Carlos</td>
                            <td>Hernandez</td>
                            <td>Activo</td>
                            <td>Cliente</td>
                            <td>Carrera 6 #4-19</td>
                            <td>Barahoja</td>
                        </tr>
                    
                        <tr>
                            <td>4</td>
                            <td>3114083109</td>
                            <td>Javier Francisco</td>
                            <td>Lopez</td>
                            <td>Inactivo</td>
                            <td>Cliente</td>
                            <td>Calle 1 #21a-59</td>
                            <td>Ciudadela</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    
    <!-- scripts js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

