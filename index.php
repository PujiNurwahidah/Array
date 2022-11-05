<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        <div class="data-array">
        <label for="inputIndex">Masukkan Index</label>
        <input type="text" name="inputIndex" id="inputIndex">
        <button type="submit" name="proses" id="proses">Proses</button>
        </div>
    </form>
    <?php
        if(isset($_POST['proses'])){
            $array = ['P', 'U', 'J', 'I', 'N', 'U', 'R', 'W', 'A', 'H', 'I', 'D', 'A', 'H'];
            $inputIndex = $_POST['inputIndex'];

            if(array_key_exists($inputIndex, $array)){
                echo "Anda berada pada huruf $array[$inputIndex]";
            }else{
                echo "index tidak tersedia";
            }
        }
    ?>  
</body>
</html>