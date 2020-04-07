<html>
	<head>
     <title>Benim Github Projelerim - v4r1able</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <style>
	 @import url('https://fonts.googleapis.com/css?family=Sen&display=swap');
	 @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
	 * {
     font-family:Sen;
	 }
	 
     .ninjanetwork {
	 color:#d32f2f;
	 font-size:25px;
     font-family:Muli;
	 text-decoration:none;
	 }
     </style>
     </head>
<body>
<?php
//v4r1able - obir.ninja
$github_id = ("v4r1able");
$ch = curl_init("https://github.com/".$github_id."");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64; rv:74.0) Gecko/20100101 Firefox/74.0");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$index = curl_exec($ch);

preg_match_all('@<a href="(.*?)" class="text-bold flex-auto min-width-0">@', $index, $cikti_link);
preg_match_all('@<p class="pinned-item-desc text-gray text-small d-block mt-2 mb-3">
            (.*?)
          </p>@', $index, $cikti_isim);
preg_match_all('@<span itemprop="programmingLanguage">(.*?)</span>@', $index, $cikti_tur);
preg_match_all('@<span class="p-nickname vcard-username d-block" itemprop="additionalName">(.*?)</span>@', $index, $cikti_nick);
preg_match_all('@<img class="rounded-1" height="32" width="32" alt="(.*?)" src="(.*?)"@', $index, $cikti_resim);
$bol = explode("?", $cikti_resim[2][0]);
?>
<center>
	<img src="<?php echo $bol[0]; ?>" height="200"><br>
	<h3><a href="https://github.com/<?php echo $cikti_nick[1][0]; ?>"><font color="2196f3"><?php echo $cikti_nick[1][0]; ?></font></a> Popüler 6 Projem.</h3>
	<br>
<table class="table" style="padding:1px 1px;">
  <thead>
    <tr>
      <th scope="col">Proje Adı</th>
      <th scope="col">Tür</th>
      <th scope="col">İncele</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $cikti_isim[1][0]; ?></td>
      <td><?php echo $cikti_tur[1][0]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][0]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
    <tr>
      <td><?php echo $cikti_isim[1][1]; ?></td>
      <td><?php echo $cikti_tur[1][1]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][2]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
    <tr>
      <td><?php echo $cikti_isim[1][2]; ?></td>
      <td><?php echo $cikti_tur[1][2]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][2]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
    <tr>
      <td><?php echo $cikti_isim[1][3]; ?></td>
      <td><?php echo $cikti_tur[1][3]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][3]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
    <tr>
      <td><?php echo $cikti_isim[1][4]; ?></td>
      <td><?php echo $cikti_tur[1][4]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][4]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
    <tr>
      <td><?php echo $cikti_isim[1][5]; ?></td>
      <td><?php echo $cikti_tur[1][5]; ?></td>
      <td><a href="https://github.com<?php echo $cikti_link[1][5]; ?>"><img src="https://cdn0.iconfinder.com/data/icons/e-commerce-mini-icons/32/Commerce_Mini_Icons-12-512.png" height="30"></a></td>
    </tr>
  </tbody>
</table>
<a href="https://obir.ninja"><div class="ninjanetwork">NinjaNetwork</a>  - v4r1able</div>
</body>
</html>
