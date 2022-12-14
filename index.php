<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(img.jpeg);
    background-size: cover;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 500px;
    padding: 50px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 20px 25px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #23237D;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #23237D;
    letter-spacing: 1px;
    margin-bottom: 35px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #23237D;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #23237D;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }

  </style>
  <title>Register</title>
</head>
<body>
  <div class="box">
    <h2>Login</h2>
    <form action="config.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Username</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="tel" name="phonenumber"  autocomplete="off" required>
        <label for="">Phone number</label>
      </div>
      <div class="input-box">
        <input type="text" name="adress"  autocomplete="off" required>
        <label for="">Adress</label>
      </div>
      <div class="input-box">
        <input type="text" name="gender"  autocomplete="off" required>
        <label for="">Gender</label>
      </div>
      <div class="input-box">
        <input type="password" name="password"  autocomplete="off" required>
        <label for="">Password</label>
      </div>
        <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
