<?php


function tablePersonen(){
    $personen = array(
        array(
            'name' => 'Max Mustermann',
            'email' => 'mustermann@muster.de',
        ),
        array(
            'name' => 'Petra Mueller',
            'email' => 'petra@mueller.de',
        )
    );

    echo "
    <table class='table'>
                <thead class='thead-light'>
                <tr>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>in Projekt</th>
                </tr>
                </thead>
                <tbody>
                ";
    foreach ($personen as $person){
        echo '<tr>';
        echo '<td>'.$person['name'].'</td>';
        echo '<td>'.$person['email'].'</td>';
        echo "<td><input type='checkbox'>
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
                    </td>";
        echo '</tr>';
    }


        echo"
                </tbody>
            </table> ";
}





function tableAufgaben(){
    $aufgaben = array(
        array(
            'aufgabenbezeichnung' => 'HTML Datei erstellen',
            'beschreibung der aufgabe' => 'HTML Datei erstellen',
            'reiter' => 'ToDo',
            'zuständig' => 'Max Mustermann',
        ),
        array(
            'aufgabenbezeichnung' => 'CSS Datei erstellen',
            'beschreibung der aufgabe' => 'CSS Datei erstellen',
            'reiter' => 'ToDo',
            'zuständig' => 'Max Mustermann',
        ),
        array(
            'aufgabenbezeichnung' => 'PC eingeschaltet',
            'beschreibung der aufgabe' => 'PC eingeschaltet',
            'reiter' => 'Erledigt',
            'zuständig' => 'Petra Müller',
        ),
        array(
            'aufgabenbezeichnung' => 'Kaffee trinken',
            'beschreibung der aufgabe' => 'Kaffee trinken',
            'reiter' => 'Erledigt',
            'zuständig' => 'Petra Müller',
        ),
        array(
            'aufgabenbezeichnung' => 'Für die Uni lernen',
            'beschreibung der aufgabe' => 'Für die Uni lernen',
            'reiter' => 'Verschoben',
            'zuständig' => 'Max Mustermann',
        )
    );

    echo "
    <table class='table'>
                <thead class='thead-light'>
                <tr>
                    <th>Aufgabenbezeichnung:</th>
                    <th>Beschreibung der Aufgabe:</th>
                    <th>Reiter:</th>
                    <th>Zuständig:</th>
                </tr>
                </thead>
                <tbody>
                ";
    foreach ($aufgaben as $aufgabe){
        echo '<tr>';
        echo '<td>'.$aufgabe['aufgabenbezeichnung'].'</td>';
        echo '<td>'.$aufgabe['beschreibung der aufgabe'].'</td>';
        echo '<td>'.$aufgabe['reiter'].'</td>';
        echo '<td>'.$aufgabe['zuständig'];
            echo "
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
                   " .'</td>';
        echo '</tr>';

    }


    echo"
                </tbody>
            </table> ";
}


function tableToDos(){
    $ToDos = array(
        array(
            'header' => 'ToDo:',
            'Bezeichnung1' => 'HTML-Datei erstellen (Sebastian Andres)',
            'Bezeichnung2' => 'CSS-Datei erstellen (Janna Bartz)',
        ),
        array(
            'header' => 'Erledigt:',
            'Bezeichnung1' => 'PC-eingeschaltet (Sebastian Andres)',
            'Bezeichnung2' => 'Kaffee trinken (Janna Bartz)',
        ),
        array(
            'header' => 'Verschoben:',
            'Bezeichnung1' => 'Für die Uni lernen (Sebastian Andres)',
            'Bezeichnung2' => 'WE-Übung erledigen (Janna Bartz)',
        ),
    );

    echo '
    <div class="col-md-10">
            <div class="row">
            ';
        foreach ($ToDos as $ToDo){
            echo '<div class="col">'.'<div class="card">';
            echo '<div class="card-header">'. $ToDo['header']. '</div>';
            echo '<ul class="list-group">
                            <li class="list-group-item">'.$ToDo['Bezeichnung1'].'</li>'.
                            '<li class="list-group-item">'.$ToDo['Bezeichnung2'].'</li>'.
                        '</ul></div></div>';
        }
}

?>