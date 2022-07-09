<html>
<head>
   <title>MSMS/Admin Form</title>
</head>
<body>
<div class="chat-container-one, center" >
        <p><h1 align="center">Medical Store Management System</h1></p>
        <p><h2 align="center">Admin Form</h2></p>
         <input type="text" id="username" name="username"class="input" placeholder="UserName"><br>
         <input type="password" id="password" name="password" class="input" placeholder="Password"><br>
       </form>
      <form action="./adminhome.php" method="post">
       <div class="button1">
       <a href = "./adminhome.php"> <input class="b3"type="submit" class="button1" value="Log In"></a>
      </div>
    </form>
       
    <style>
        body {
    background-image: url('./Medical-Wallpapers-HD-Free-download.jpg');
  }
  
  .chat-container-one {
      background-color:palevioletred;
      border-radius: 3%;
      max-width: 30%;
      height: 40%;
      text-align: center;
  }
 
  .center {
    margin: auto;
    width: 30%;
    height: 60%;
    border-radius: 5%;
    border: 1px solid white;
    background-color:whitesmoke;
    padding: 10px;
  }
  .input[type=text] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  .input[type=password] {
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
  }
  .button {
    border: 1em;
    border-radius: 0.3em;
    background-color: #ff1ac6;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 6em;
    margin: 4px 2px;
    
  }
  .b3[type=submit]{
    width: 18%;
    height: 4%;
    margin: auto;
    background-color: whitesmoke;
    position: absolute;
    top: 45%;
    left: 40%;
  }
</style>
</body>
</html>
