<?php
include 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];

    $sql = "SELECT * FROM animale WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id);

    if (!$user) {
        header("Location: index.php");
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nume = $_POST["nume"];
    $prenume = $_POST[""];
    $varsta = $_POST[""];

    $sql = "UPDATE carti SET nume = :nume, autor = :autor, pagini = :pagini WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nume', $nume);
    $stmt->execute();

    // header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Editează informatiile</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Editează informatiile animalului</h2>

        <form action="editeaza.php" method="POST" class="mb-3">
            <input type="hidden" name="id" value="<?php echo $carte['id']; ?>">
            <div class="form-row">
                <div class="mb-3">
                    <input type="text" class="form-control" name="nume" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="prenume" value="">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="varsta" value="">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Actualizare</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
