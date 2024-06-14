<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
   
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
                        <a class="img-fluid me-3" href="#" style="cursor: default;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="background-color" class="bi bi-person-dash" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7M11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m0-7a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                            </svg>
                        </a>
                        <h4>Eliminar</h4>
                    </div>
                    
                    <div class="col d-flex me-4 justify-content-start align-items-center">
                        <form action="#" class="d-flex">
                            <input class="form-control" type="search" placeholder="Buscar id...">
                            <a class="d-flex mx-3 align-items-center" href="#" type="img" style="color: black;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="background-color" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </a>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row g-2 mt-3 justify-content-center">
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <a class="btn btn-danger w-25 mx-1" type="button" href="../view/index.php">Cancelar</a>
                    <a class="btn btn-primary w-25 mx-1" type="button">Eliminar</a>
                </div>
            </div>


        </div>
    </div>

</body>
</html>