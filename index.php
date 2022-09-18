<!DOCTYPE php>
<?php 
error_reporting(null);
$city = $_POST['get'];
$Url = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=73c340f4df1ee2a07dca01d0ce48bf48");
$data=json_decode($Url,true);
// echo "<pre>";
// print_r($data);


$dataurl=file_get_contents("https://pixabay.com/api/?key=29428143-1b7675892c7e12c1f8fdd4157&q=".$_POST['get']."&image_type=photo");
$test=json_decode($dataurl,true);
// echo "<pre>";
// print_r($test);
$flag='flag';
$back=$test['hits'][rand(1,19)]['largeImageURL'];



// echo "<pre>";
// print_r($test);
// $lon=$data['coord']['lon'];
// $lat=$data['coord']['lat'];
// $newtest=file_get_contents('https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lon.'&appid=73c340f4df1ee2a07dca01d0ce48bf48');
// $test1=json_decode($newtest,true);
$weatherAPI="a595f443b58d4c97962234220222208";
$Weatherlink=file_get_contents('http://api.weatherapi.com/v1/current.json?key='.$weatherAPI.'&q='.$city.'');
$getdata=json_decode($Weatherlink,true);

//   echo "<pre>";
// print_r($getdata);
$cnt=$getdata['location']['country'];
$ctname="a595f443b58d4c97962234220222208";
$getct=file_get_contents("http://api.weatherapi.com/v1/current.json?key=".$ctname."&q=".$_POST['get']);
$gvdata=json_decode($getct,true);
$loc=$gvdata["location"]["country"];
$imurl=$gvdata['current']['condition']['icon'];

// echo "<pre>";
// print_r($dta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://kit.fontawesome.com/3ade12e83a.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Weather</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DynaPuff&display=swap');

       .material-symbols-outlined {
         font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD'0,
        'opsz' 48
}
       .button{
        padding: 10px;
        float: right;
        width: 100px;
        border: none;
        border-radius: 10px;
        background-color: #038cfc;
        color: white;
       }   
       .button:hover{
        background-color: #055ca3;
       }  

       .wmain{
        width:100%;
        display: flex;
        flex-direction: column;
            
            align-items: center;
            justify-content: center;
       }
        body{
           
            padding: 5%;
            font-family: 'DynaPuff', cursive;
            overflow:scroll;
          
        }
      .backg{
        margin: 0%;
        padding: 0%;
        position: absolute;
        width: 100%;
        height: 200%;
        z-index: -1;
        left:0%;
        top: 0%;
      }
      .show{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 30px;
      }
      #box{
        display: flex;
        width: 100px;
        height: 100px;
        backdrop-filter: blur(50px);
        border-radius:15px;
        box-shadow: 1px 1px 10px black;
        color: white;
        align-items: center;
        justify-content: center;

      }
      .ico{
        display: flex;
        width: 200px;
        height: 200px;
        backdrop-filter: blur(50px);
        border-radius:15px;
        box-shadow: 1px 1px 10px black;
        color: white;
        align-items: center;
        justify-content: center;
        margin: 30px;
        flex-direction: column;

      }
      .search{
        border: none;
        border-radius: 30px;
        padding: 10px;
      }
      .sbar{
         border: none;
        border-radius: 30px;
        padding: 10px;
        width: 300px;

      }
      .heade{
        width: 200px;
        height:200px;
        backdrop-filter:blur(50px);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
    </style>
</head>
<img class="backg" src="<?=$back ?>">
<body>
    <div class="nav">
      <a href="signup.php">
      <button name="bt" class="button">
        Source Code
      </button>
      </a>
    </div>
    <div class="wmain">

        <form method="POST">
        <div class="search"><input class="sbar" name="get" value="india" type="search"></div>
        </form>
<div class="heade" style="box-shadow:1px 1px 50px black;">
        <div class="name"><h1 style="color: white;"><?=$_POST['get'];?></h1></div>
            <img width="50px" src="https://countryflagsapi.com/png/<?=$cnt?>">
            </div>
       <div class="ico">
       <img  src="<?=$imurl?>" >
        <div class="ne"><h1><?= $data['weather']['0']['main']?></h1></div>

          <div id="bo" class="temp"><i style="color: yellow;" class="fa-solid fa-temperature-full"></i>&nbsp<?=round($data['main']['temp']) ?>deg</div>
        </div>
        <div class="show">
     
            <div id="box" class="hum"><span style="color: skyblue;" class="material-symbols-outlined">
humidity_high
</span><?=$data['main']['humidity'] ?></div>
            <div id="box" class="press"><span style="color: orange;" class="material-symbols-outlined">
compress
</span><?=$data['main']['pressure'] ?></div>
            <div id="box" class="min"><span style="color: green;" class="material-symbols-outlined">
thermometer
</span><?=$data['main']['temp_min'] ?></div>
            <div id="box" class="max"><span style="color: red;" class="material-symbols-outlined">
thermometer
</span><?=$data['main']['temp_max'] ?></div>
            <div id="box" class="wind"><i style="color: green;"  class="fa-solid fa-wind"></i>&nbsp<?=$data['wind']['speed'] ?></div>
        </div>
        
    </div>
    <a href="/ind.php">form</a>
</body>

</html>

