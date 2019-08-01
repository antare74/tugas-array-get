<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PT. SunTech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
      .row li{
        font-size: 30px;
      }
      .imageprofile{
        margin-left: 70px;
        
      }
      .imageprofile:hover{
        transition: all 1s;
        transform: rotate(360deg);
        border-radius: 50%;
        padding: 15px;
        border : 2px solid grey;
      }
    </style>
  </head>
  <body>
    <div class="header text-center">
      <h1>Detail <?= $_GET['nama'] ?> Profile</h1>
    </div><br>

<div class="container">
<div class="row px-auto">
  <div class="col-md-5 border"><img class="imageprofile" src=" <?= $_GET['image'] ?> " alt="<?= $_GET['nama'] ?>" style="width:300px;height:300px" > </div>
  <div class="col-md-7 border p-5">
    <ul> 
      <li>Nama Lengkap: <?= $_GET['nama'] ?></li>
      <li>NIK : <?= $_GET['nik'] ?> </li>
      <li>email: <?= $_GET['email'] ?></li>
      <li>Bagian: <?= $_GET['bagian'] ?></li>
    </ul>
  </div>
</div>
<br><br>
<a href="latihan.php"><button type="button" class="btn btn-primary btn-sm" >Back To Home</button></a>
</div>


  </body>
</html>
