<html>
<head>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    table th{
         float: left;
     }
  </style>
</head>
<body>
<center>
<h1> Details of Animal</h1>
<form action="animals.php" method="post" enctype="multipart/form-data">
 <table border="0">
   <tr>
     <th> Name of animal: <input type="text" name="name" style="margin-left:110px"></th>
   </tr>
   <tr>
     <th><br>
        Select category: <input type="radio" name="r1" value="herbivores" style="margin-left:110px">Herbivores
                         <input type="radio" name="r1" value="omnivores">Omnivores
                         <input type="radio" name="r1" value="carnivores">Carnivores
     </th>
   </tr>
   <tr>
     <th><br>
        Select image: <input type="file" name="img" accept="image/*" style="margin-left:130px">
     </th>
   </tr>
   <tr>
     <th><br>
        Description: <textarea name="txtarea"style="margin-left:135px"></textarea>
     </th>
   </tr>
   <tr>
     <th><br>
        Select life expectancy: <input type="radio" name="l1"  value="0-1 year" style="margin-left:65px">0-1 year
                         <input type="radio" name="l1" value="1-5 years">1-5 years
                         <input type="radio" name="l1" value="5-10 years">5-10 years
                         <input type="radio" name="l1" value="10+ years">10+ years
     </th>
   </tr>
   <tr>
     <th><br>
        <div class="g-recaptcha" data-sitekey="6LfTB_YdAAAAAL945Kf4vJ9jM1ZhVq4ecNVnTi8o"></div>
     </th>
   </tr>
   <tr>
     <th><br>
        <input type="submit" name="submit">
     </th>
   </tr>
</table>
</form>
</center>
</body>
</html>