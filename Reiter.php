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
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Beschreibung</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ToDo</td>
                    <td>Dinge die erledigt werden müssen
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor'
                                 xmlns='http://www.w3.org/2000/svg'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd'
                                      d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg>
                        </a> &nbsp;
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square'
                                 fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd'
                                      d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Erledigt</td>
                    <td>Dinge die erledigt sind
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor'
                                 xmlns='http://www.w3.org/2000/svg'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd'
                                      d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg>
                        </a>
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square'
                                 fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd'
                                      d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Verschoben</td>
                    <td>Dinge die später erledigt werden
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-trash' fill='currentColor'
                                 xmlns='http://www.w3.org/2000/svg'>
                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                <path fill-rule='evenodd'
                                      d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                            </svg>
                        </a>
                        <a href='#' class='float-right'>
                            <svg width='1em' height='1em' viewBox='0 0 16 16' class='bi bi-pencil-square'
                                 fill='currentColor' xmlns='http://www.w3.org/2000/svg'>
                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                <path fill-rule='evenodd'
                                      d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <form class="mb-4">
                <h3>Bearbeiten/Erstellen:</h3>
                <div class="form-group">
                    <label>Bezeichnung des Reiters:</label>
                    <input type="text" class="form-control" placeholder="Reiter">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Beschreibung der Aufgabe:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Beschreibung" rows="3"></textarea>
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

