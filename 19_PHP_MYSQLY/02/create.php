<?php
require_once 'connection.php';

$err_msg = [];
$ime = $prezime = $email = $broj_telefona = ""; // ovo se definishe kad se prvi put dodje na sajt pa da ne izbacuje kod pogresnog unosa onaj cudan iznos


if($_SERVER["REQUEST_METHOD"] == "POST") // proverava da li smo na stranici dosli pomocu post metode
{   // trim se odma stavlja da se sece space ako neko slucajno stavi , i ako samo klikne space i proba da posalje 
    $ime = trim($_POST['ime']);
    $prezime = trim($_POST['prezime']);
    $email = trim($_POST['email']);
    $broj_telefona = trim($_POST['broj_telefona']);

    //validacija imena
    if(empty($ime))
    {
        $err_msg['ime'] = 'Ime je obavezno polje';
    }elseif(preg_match("~p[0-9]+~", $ime)) // ovo proverava da slucajno nema broja u imenu
    {
        $err_msg['ime'] = 'Nije dozvoljen unos cifara u polju ime';
    }

    //validacija prezimena
    if(empty($prezime))
    {
        $err_msg['prezime'] = 'prezime je obavezno polje';
    }elseif(preg_match("~p[0-9]+~", $prezime)) // ovo proverava da slucajno nema broja u imenu
    {
        $err_msg['prezime'] = 'Nije dozvoljen unos cifara u polju prezime';
    }

    //validacija email-a
    if(!empty($email)){ //prvo gleda jel upisano , pa ako je upisan email proverava formu , Email polje nije obavezno bi bi bio error ako ne upise jer bi prazno polje islo na kontrolu validacije, a polje zapravo nije obavezno.
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errMsg['email'] = "Polje email nije validno";
        }
    }

    //validacija broja telefona
    if(!empty($broj_telefona))
    {
        if(!preg_match("/^[0-9]*$/", $broj_telefona)) // ovo proverava da slucajno nema broja u imenu
        {
            $err_msg['broj_telefona'] = 'Polje broj telefona nije validno';
        }
    }

    if(count($err_msg) == 0) // onda pitas da li je niz prazan da bi znao jel ok sve popunio
    {   // FORMA JE VALIDNA , UPISI PODATKE U BAZU
        $q = "INSERT INTO `studenti`
        VALUES  
        ( null,
         '" . $ime . "',
          '".$prezime. "', 
         " . ($email?"'".$email." '" : "null"). ", " . 
        ($broj_telefona?"'" . $broj_telefona. "'":'null'). ");";

        $r = $connection -> query($q);
        if($r)
        {   // uspesno dodat student
            header("location: index.php"); // kad se unesu podaci ad vrati na pocetak
            exit();  // Ovo za svaki slucaj stavis on svakako nece da ga usvoji jer ce biti prelociran, Stefan kaze zaboravi da upise location pa mu se izvrsi exit funkkcija(sve u svemu neki vid sigurnosti)
        }else
        {
            // doslo je do greske
            echo "<p>Doslo je do greske</p>";
        }
    }
    // else ne treba preko var_dumpa da se ispisuju greske u validaciji
    // {
    //     var_dump($errMsg);
    // }
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

    <title>Unos</title>
</head>
<body>

    <div class="container mt-5">
    <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Student: unos</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="form-group mb-3">
                                <label for="">Ime</label>
                                <input type="text" name="ime" class="form-control <?php if(isset($err_msg['ime'])) echo "is-invalid ;"  ?>" value="<?php echo $ime ?>">
                                <span class="invalid-feedback"><?php if(isset($err_msg['ime'])) echo $err_msg['ime'];  ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Prezime</label>
                                <input type="text" name="prezime" class="form-control <?php if(isset($err_msg['prezime'])) echo "is-invalid ;"  ?>" value="<?php echo $prezime ?>">
                                <span class="invalid-feedback"><?php if(isset($err_msg['prezime'])) echo $err_msg['prezime'];  ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control <?php if(isset($err_msg['email'])) echo "is-invalid ;"  ?>" value="<?php echo $email ?>">
                                <span class="invalid-feedback"><?php if(isset($err_msg['email'])) echo $err_msg['email'];  ?></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Broj telefona</label>
                                <input type="text" name="broj_telefona" class="form-control <?php if(isset($err_msg['broj_telefona'])) echo "is-invalid ;"  ?>" value="<?php echo $broj_telefona ?>">
                                <span class="invalid-feedback"><?php if(isset($err_msg['broj_telefona'])) echo $err_msg['broj_telefona'];  ?></span>
                            </div>
                            <div class="float-end mb-3">
                                <button type="submit" class="btn btn-success">Sacuvaj</button>
                                <a href="index.php" class="btn btn-secondary">Otkazi</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    </div>
    
</body>
</html>