
<html>

<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner: Reiter</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <header class="jumbotron">
        <center><h1> Aufgabenplaner: Reiter</h1></center>
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
                tableAufgaben(); ?>

            <form class="mb-4">
                <h3>Bearbeiten/Erstellen:</h3>
                <div class="form-group">
                    <label>Aufgabenbezeichnung:</label>
                    <input type="text" class="form-control" placeholder="Reiter">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung"
                              rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label>Erstellungsdatum:</label>
                    <input type="text" class="form-control" placeholder="01.01.19">
                </div>
                <div class="form-group">
                    <label>fällig bis:</label>
                    <input type="text" class="form-control" placeholder="01.01.19">
                </div>
                <div class="form-group">
                    <label>Zugehöriger Reiter:</label>
                    <input type="text" class="form-control" placeholder="ToDo">
                </div>
                <div class="form-group">
                    <label>Zuständig:</label>
                    <input type="text" class="form-control" placeholder="Max Mustermann">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Speichern</button>
                    <button type="submit" class="btn btn-info">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
