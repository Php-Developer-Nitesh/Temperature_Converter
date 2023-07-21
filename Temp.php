<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;1,100&family=Jost:wght@300&family=Lilita+One&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;
            font-family: 'Jost', sans-serif;
            font-family: 'Lilita One', cursive;
        }

        h1 {
            text-align: center;
            line-height: 20vh;
            color: #6c63ff;
        }

        .main-div {
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .left-side {
            background-color: #dfe6e9;
            border-radius: 30% 70% 71% 29% / 30% 30% 70% 70% ;


        }

        .left-side img {
            width: 400px;
            height: 400px;
            
        }
        .right-side{
            width: 400px;
            height: 300px;
            background-color: #dfe6e9;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border-radius: 1px solid grey;
            border-radius: 5px;

        }
        .selection{
            width: 100%;
            margin: 20px 0;

        }
        .btn{
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: #6c63ff;
            color: white;

        }
        p{
            margin: 20px 0 0 0;

        }

    </style>
</head>

<body>
    <header>
        <h1>Temprature Conversion </h1>
        <div class="main-div">
            <div class="left-side">
                <img src="Nature.png">
            </div>
            <div class="right-side">
                <form action="" method="POST">
                    <input type="text" name="num" placeholder="Enter you Number" class="input1">
                    <div class="selection">
                        <label>Celc</label>
                        <input type="radio" name="units" value="cel">
                        <label>Faren</label>
                        <input type="radio" name="units" value="feh">
                    </div>

                    <input type="submit" name="submit" value="Convert Now" class="btn">

                </form>
                <div>
                    <p >
                        <?php
                        if(isset($_POST['submit'])){
                            $num = $_POST['num'];
                            $temp = $_POST['units'];

                            if($temp =="cel"){
                                $result = $num * 9 / 5 + 32;
                                echo "The Conversion Value of Cel to Faren is ".$result;
                            }else{
                                $result =($num - 32) * 5 / 9;
                                echo "The Conversion Value of Faren  to Cel is ".$result;
                            }
                        }
                        ?>

                    </p>
                </div>
            </div>
        </div>

    </header>
</body>

</html>