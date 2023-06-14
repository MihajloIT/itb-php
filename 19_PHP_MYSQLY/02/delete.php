<?php
require_once 'connection.php';
$id = "";

if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']))
{
    $id = $_GET['id'];
    // mozete da izvadite dodatne podatke o studentu
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST['id'];
    $q = " DELETE FROM studenti WHERE id = " . $id . " ;"  ;
    $r = $connection -> query($q);
    if($r)
    {
        header("location:index.php");
        exit();
    }else
    {
        echo "<p>Doslo je do greske kod brisanja</p>";
    }
}





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Brisanje</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student: brisanje</h4>
                    </div>
                    <div class="card-body">
                    <form action="#" method="post">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <p>Da li ste sigurni da zelite da obrisete podatak ?</p>
                        <p>
                            <button type="submit" class="btn btn-success"> DA </button>
                            <a href="index.php" class="btn btn-danger"> NE </a>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    
</body>
</html>