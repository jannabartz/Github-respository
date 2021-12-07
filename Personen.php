
<html>

<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner: Personen</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <header class="jumbotron">
        <center> <h1> Aufgabenplaner: Personen</h1></center>
    </header>
    <div class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="Login.php"> Login </a>
                </li>
                <li class="list-group-item">
                    <a href="Projekte.php"> Projekte </a>
                </li>
                <li class="list-group-item">
                    <a href="Todos.php"> Aktuelles Projekt </a>
                </li>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href="Aufgaben.php"> Aufgaben </a>
                    </li>
                </div>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href="Reiter.php"> Reiter </a>
                    </li>
                </div>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href="Personen.php"> Personen </a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="col-md-8">
            <?php include 'uebung3.php';
            tablePersonen(); ?>


            <form class="mb-4">
                <h3>Bearbeiten/Erstellen:</h3>
                <div class="form-group">
                    <label>Username:</label>
                    <input type="text" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <label>E-Mail-Adresse:</label>
                    <input type="text" class="form-control" placeholder="E-Mail-Adresse eingaben">
                </div>
                <div class="form-group">
                    <label>Passwort:</label>
                    <input type="password" class="form-control" placeholder="Passwort">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Dem Projekt zugeordnet
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                    <button type="submit" class="btn btn-success">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

