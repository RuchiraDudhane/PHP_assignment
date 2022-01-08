<html>
<body>
<center>
<h1>Animal list</h1>
<table border="1">
<tr>
<th> Name</th>
<th> Category</th>
<th> Image</th>
<th> Description</th>
<th> Life Expectancy</th>
</tr>
<br>
</center>
<?php
  if(isset($_POST['submit']))
  {
  $conn= mysqli_connect("localhost:3308","root","","db2");
  if(! $conn)
  {
     die("error: could not connect." .mysqli_error());
  }
  
     $name=$_POST['name'];
     $category=$_POST['r1'];
     $image=$_FILES['img']['name'];
     $image_path="images/".basename($image);
     $description=$_POST['txtarea'];
     $life_exp=$_POST['l1'];

     $sql= "insert into animal_det (name,category,image,description,life) VALUES('$name','$category','$image','$description','$life_exp')";
     $result=mysqli_query($conn,$sql);
     $store=move_uploaded_file($_FILES['img']['tmp_name'],$image_path);
     
    
     $data=mysqli_query($conn,"select * from animal_det");
     while($result1=mysqli_fetch_array($data))
     {
?>
       <tr>
        <td><?php echo $result1['name']; ?></td>
        <td><?php echo $result1['category']; ?></td>
        <td><?php echo "<img src='images/" .$result1['image']."'/>"; ?></td>
        <td><?php echo $result1['description']; ?></td>
        <td><?php echo $result1['life']; ?></td>
       </tr>

          
<?php
}
mysqli_close($conn);

   }
?>
</table>
</body>
</html>