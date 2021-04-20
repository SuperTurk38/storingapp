<?php
$action = $_POST['action'];

if ($action == "create") {

    //Variabelen vullen
    $attractie = $_POST['attractie'];
    if (empty($attractie)) {
        $errors[] = "Vul de attractie-naam in.";
    }
    $capaciteit = $_POST['capaciteit'];
    if (!is_numeric('$capaciteit')) {
        $errors[] = "Vul voor capaciteit een geldige getal in.";
    }
    $melder = $_POST['melder'];
    if (empty($melder)) {
        $errors[] = "Vul de naam van de melder in!";
    }
    $type = $_POST['type'];
    if (empty($type)) {
        $errors[] = "Vul hier een type in!";
    }
    if (isset($_POST['prioriteit'])) {
        $prioriteit = true;
    } else {
        $prioriteit = false;
    }
    $overig = $_POST['overig'];

    $id = $_POST['id'];
    if (isset($errors)) {
        var_dump($errors);
        die();
    }
    //echo $attractie . " / " . $capaciteit . " / " . $melder;

    //1. Verbinding
    require_once 'conn.php';

    //2. Query
    $query = "INSERT INTO meldingen(attractie,capaciteit, melder, type, prioriteit, overige_info)VALUES(:attractie,:capaciteit,:melder,:type,:prioriteit,:overige_info)";

    //3. Prepare
    $statement = $conn->prepare($query);

    //4. Execute
    $statement->execute([
        ":attractie" => $attractie,
        ":capaciteit" => $capaciteit,
        ":melder" => $melder,
        ":type" => $type,
        ":prioriteit" => $prioriteit,
        ":overige_info" => $overig
    ]);

    header("Location: ../meldingen/index.php?msg=Melding opgeslagen");
}
if ($action == "edit") {

    $attractie = $_POST['attractie'];
    $capaciteit = $_POST['capaciteit'];
    $melder = $_POST['melder'];
    $type = $_POST['type'];
    if (isset($_POST['prioriteit'])) {
        $prioriteit = true;
    } else {
        $prioriteit = false;
    }
    $overig = $_POST['overig'];

    require_once 'conn.php';
    $query = "UPDATE meldingen set capaciteit = :capaciteit, attractie = :attractie, melder = :melder, type = :type, prioriteit = :prioriteit, overig = :overig_info WHERE id = :id";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":attractie" => $attractie,
        ":capaciteit" => $capaciteit,
        ":melder" => $melder,
        ":type" => $type,
        ":prioriteit" => $prioriteit,
        ":overig_info" => $overig,
        ":id" => $id
    ]);
    header("Location: ../meldingen/index.php?msg=Melding veranderd!");
}

    if ($action == "delete") {

    }



