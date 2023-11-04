<?php
if (isset($_GET['month'])) {
    $month = $_GET['month'];
} else {
    $month = date('m');
}

switch ($month) {
    case "01":
        $Bg = "bg01.jpg";
        break;
    case "02":
        $Bg = "bg02.jpg";
        break;
    case "03":
        $Bg = "bg03.jpg";
        break;
    case "04":
        $Bg = "bg04.jpg";
        break;
    case "05":
        $Bg = "bg05.jpg";
        break;
    case "06":
        $Bg = "bg06.jpg";
        break;
    case "07":
        $Bg = "bg07.jpg";
        break;
    case "08":
        $Bg = "bg08.jpg";
        break;
    case "09":
        $Bg = "bg09.jpg";
        break;
    case "10":
        $Bg = "bg10.jpg";
        break;
    case "11":
        $Bg = "bg11.jpg";
        break;
    case "12":
        $Bg = "bg12.jpg";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        body {
            background-image: url(./imgs/<?php echo $Bg; ?>);
            background-size: cover;
        }
.h1-1{
    background-color: white;
            opacity: 0.7;
            width: 300px;
            margin: auto;
            border-radius: 30px;
}
        header {
            background-color: white;
            opacity: 0.7;
            width: 300px;
            margin: auto;
            border-radius: 30px;
        }

        h1 {
            text-align: center;
            font-size: 35px;
            /* border: 1px solid black; */
            font-weight: bold;
            margin-bottom: 10px;


        }

        a {
            display: inline-block;
            width: 100px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            text-decoration: none;
            border: 5px solid lightslategray;
            border-radius: 20px;
            margin-bottom: 20px;
            font-size: large;
            background-color: white;
            opacity: 0.6;
            font-weight: bold;
            font-family: "標楷體";

        }

        a:hover {
            background-color: lightsalmon;

        }

        .container {
            display: flex;
            margin: auto;
            justify-content: space-between;
            width: 350px;
        }


        table,
        th,
        td {
            border-collapse: collapse;
            border: 5px solid black;
            margin: auto;
            text-align: center;

        }


        th,
        td {
            background-color: white;
            opacity: 0.6;
            font-weight: bold;
            font-family: "標楷體";
            font-size: 20px;
        }

        td {
            width: 100px;
            height: 100px;
            font-size: 30px;


        }

        td:hover {
            background-color: lightsalmon;
        }
        .box{
            display: flex;
            justify-content: space-around;
width: 100%;
height: 80vh;
        }
        .box1{
            display: flex;
            justify-content: center;
            align-items: center;
            width: 25%;
            /* background-color: white; */
            height: 60vh;
    
        }
        .box1-1{
            color:aqua;
            font-size:20px ;
            font-family: "標楷體";
            font-weight: bold;
           width: 100%;
            height: 200px;
            /* background-color: gray; */
           
        }
        .box2{
           width: 50%;
           /* background-color: lightseagreen; */
        }
        .box3{
            font-size:20px ;
            font-family: "標楷體";
            font-weight: bold;
       color:aqua;
            width: 25%;
            height: 650px;
            /* background-color: lightcoral; */
        }
    </style>
</head>

<body>
<h1 class="h1-1">萬年曆</h1>  
    <?php

    if (isset($_GET['month']) && isset($_GET['year'])) {
        $month = $_GET['month'];
        $year = $_GET['year'];
    } else {
        $month = date('m');
        $year = date("Y");
    }
    echo "<header>";
    echo "<h1>";
    echo date("西元{$year}年{$month}月");
    echo "</h1>";
    echo "</header>";
    $thisFirstDay = date("{$year}-{$month}-1");
    $thisFirstDate = date('w', strtotime($thisFirstDay));
    $thisMonthDays = date("t");
    $thisLastDay = date("{$year}-{$month}-$thisMonthDays");
    $weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
    $firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
    ?>
    <div class="container">
        <?php
        $nextYear = $year;
        $prevYear = $year;
        if (($month + 1) > 12) {
            $next = 1;
            $nextYear = $year + 1;
        } else {
            $next = $month + 1;
        }

        if (($month - 1) < 1) {
            $prev = 12;
            $prevYear = $year - 1;
        } else {
            $prev = $month - 1;
        }

        ?>
        <a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>">上一個月</a>
        <a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>">下一個月</a>
    </div>
    <div class="box">
        <div class="box1">
            <div class="box1-1">
        <marquee behavior="" direction="right" ScrollAmount="10">
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="26">龍</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="24">之</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="22">中</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="20">人</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="16">拳</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="18">神</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="14">斗</marquee>
            <marquee behavior="Alternate" direction="up" width="40" height="200" ScrollAmount="12">北</marquee>
        </marquee>
        </div>
        </div>
        <div class="box2">
    <table>
        <tr>
            <th>日</th>
            <th>一</th>
            <th>二</th>
            <th>三</td>
            <th>四</td>
            <th>五</th>
            <th>六</th>
        </tr>
        <?php
        for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $addDays = 7 * $i + $j;
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    echo "<td style='color:red'>";
                } else {
                    echo "<td>";
                }
                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    echo date("j", $thisCellDate);
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>
        </div>
        <div class="box3">
        <!-- 這一行會bug直接調出去範圍 -->
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="24">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="5">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="16">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="20">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="8">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="18">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="9">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="10">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        <marquee behavior="" direction="down" width="40" height="650" ScrollAmount="16">雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨<br><br><br><br><br><br><br>雨</marquee>
        </div>
 </div>

</body>

</html>