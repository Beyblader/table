<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <header>
        <a href="#"><img src="logo.png" class="logo"></a>
           
           <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="FT.html">Future Technology</a></li>
               <li><a href="tech_t.php">Technology Type</a></li>
               <li><a href="#">About</a></li>
               <li><a href="contact.html">Contact</a></li>
           </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>Type Of Future Technology</h2>
            </div>
        </div>
        <table border="1">
    <tr>
        <th>No</th>
        <th>AI Technology </th>
        <th>Automotive Technology </th>
      

    </tr>
    <?php 
   
   $conn = mysqli_connect("localhost", "root", "", "kabel");
   $sql = "SELECT * FROM benang";
   $result = $conn->query($sql);

   if($result->num_rows > 0) {
    while ($row = $result-> fetch_assoc()){
        echo "<tr><th>" . $row["id"] . "</th></th>" . "<th><th>" . $row["AI_Technology"] . "</th></th>" . "<th><th>" . $row["Automotive_Technology"] . "</th></th>";
    }
   }
   else{
   echo "No Results";
   }
   $conn->close();

   ?>
        </table>
   
    </section>
</body>
</html>