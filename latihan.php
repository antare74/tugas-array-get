<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PT. SunTech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="header text-center">
      <h1>Data Karyawan PT. SunTech</h1>
    </div><br>

<div class="container">
  <div class="data">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">NRP</th>
      <th scope="col">BIO</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $karyawan = [
        ['Mark Abdullah','46345323','mark.abdullah@gmail.com','Fullstack Web Developer','https://nowtoronto.com/downloads/34411/download/sachabaroncohen_468.jpg?cb=051cbcb557c3199b4e61d0989fccef2c'],
        ['John Cenah','32343423','john.cenah@gmail.com','Backend Developer','https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/John_Cena_interview_2018.jpg/220px-John_Cena_interview_2018.jpg'],
        ['Komedian Kondang','345452823','kotakan.sawah@gmail.com','Frontend Developer','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpVqMBoFZaP4bKdpFlbn-vpiAGKmPFh13q14anOb0umFukFGPi'],
        ['Tsubatsa Amami','17283462353','tsubatsa.amami@gmail.com','Digital Marketing','https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/fa/fa939b6c0d1ebf1d90d5e3d619dc25ae4b46979f_full.jpg'], 
        ['Wakabayatsu sugiono', '9458739424','wakawakaee@gmail.com','Analisis Data','https://www.anime-planet.com/images/characters/genzo-wakabayashi-2717.jpg?t=1530173674']
    ];
      $no = 1;
      foreach ($karyawan as list($nama, $nik, $email, $bagian, $image)) {
        echo '<tr>';
        echo '<th scope="row">'.$no.'</th>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$nik.'</td>';
        echo "<td><a class='btn btn-primary btn-sm' href='pej.php?nama=$nama&nik=$nik&email=$email&bagian=$bagian&image=$image' role='button'>Detail</a></td>";
        $no++;
        echo '</tr>';
    }
    ?>

  </tbody>
  </table>
  </div>
</div>

  </body>
</html>
