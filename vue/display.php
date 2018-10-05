<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Bienvenue sur le site de Co-voiturage !</title>
</head>

<body>

<!-- <form>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-danger">Submit</button>
  </form> -->
  <form method="post" action="#">
    <div>
      <label>Table :</label>
      <input type="text" placeholder="Table" name="table">
    </div>
    <div>
      <button type="submit" class="btn btn-danger" name="SubmitButton">Submit</button>
    </div>
  </form>
  <?php
 echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

 class TableRows extends RecursiveIteratorIterator
 {
     public function __construct($it)
     {
         parent::__construct($it, self::LEAVES_ONLY);
     }

     public function current()
     {
         return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
     }

     public function beginChildren()
     {
         echo "<tr>";
     }

     public function endChildren()
     {
         echo "</tr>" . "\n";
     }
 }

 $servername = "localhost";
 $username = "enfant_voiture";
 $password = "toto123";
 $dbname = "enfant_voiture";
 if (isset($_POST['SubmitButton'])) { //check if form was submitted
  $table = $_POST['table']; //get input text
 }

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * FROM $table");
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
         echo $v;
     }
 } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
 }
 $conn = null;
 echo "</table>";
 ?>

</body>
</html>
