<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Bienvenue sur le site de Co-voiturage !</title>
  <style>
    div{
      margin: auto;
      width: 200px;
    }
    .tableau{
      margin: auto;
    }
    td{
      padding: 10px;
      text-align: center;
      border: 2px solid black;
    }
  </style>
</head>

<body>

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
 function display_data($data)
 {
     $output = "<table class='tableau'>";
     foreach ($data as $key => $var) {
         //$output .= '<tr>';
         if ($key===0) {
             $output .= '<tr>';
             foreach ($var as $col => $val) {
                 $output .= "<td>" . $col . '</td>';
             }
             $output .= '</tr>';
             foreach ($var as $col => $val) {
                 $output .= '<td>' . $val . '</td>';
             }
             $output .= '</tr>';
         } else {
             $output .= '<tr>';
             foreach ($var as $col => $val) {
                 $output .= '<td>' . $val . '</td>';
             }
             $output .= '</tr>';
         }
     }
     $output .= '</table>';
     echo $output;
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
     display_data($stmt);
 } catch (PDOException $e) {
     echo "Error: " . $e->getMessage();
 }
 $conn = null;
 ?>

</body>
</html>
