<html>

<head>
    <meta charset="UTF-8">
    <title>Todos</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
    <header class="jumbotron">
        <center><h1> Aufgabenplaner: Projekte</h1></center>
    </header>
    <form class="row">
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item">
                    <a href=""> Login </a>
                </li>
                <li class="list-group-item">
                    <a href=""> Projekte </a>
                </li>
                <li class="list-group-item">
                    <a href=""> Aktuelles Projekt </a>
                </li>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href=""> Aufgaben </a>
                    </li>
                </div>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href=""> Reiter </a>
                    </li>
                </div>
                <div style="padding-left: 2em">
                    <li class="list-group-item">
                        <a href=""> Mitglieder </a>
                    </li>
                </div>
            </ul>
        </div>

        <div class="col-md-8">
            <form class="mb-4">
            <div class="form-group">
                <h1>Projekt Auswählen:</h1>

                <label for="exampleFormControlSelect1"></label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option selected=""> - bitte auswählen -</option>
                    <option>Projekt 1</option>
                    <option>Projekt 2</option>
                    <option>Projekt 3</option>
                    <option>Projekt 4</option>
                    <option>Projekt 5</option>
                </select>

            </div>

            <div class="form-group">
                <button type="button" class="btn btn-primary">Auswählen</button>
                <button type="button" class="btn btn-primary">Bearbeiten</button>
                <button type="button" class="btn btn-danger">Löschen</button>
            </div>

            <div class="form-group">
                <h3>Projekt bearbeiten/erstellen:</h3>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Projektname:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Projekt">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Projektbeschreibung:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung"
                              rows="3"></textarea>
                </div>
                <div class="col">
                    <button type="Speichern" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-info">Reset</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</body>
</html>



