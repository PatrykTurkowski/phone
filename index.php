<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone</title>

    <script src="xhr.js" defer></script>
</head>
<body>
    <style>
        button{
            height: 100px;
            width: 100px;
            margin: 5px;
        }
    </style>
    <?php $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_NUMBER_INT);?>

        <div style ="border: 1px solid #000; width:200px; height:25px;"> <span id = "date"></span></div>

        <br><br>
        <button onclick="total(1)" >1 <br>    </button>
        <button onclick="total(2)" >2 <br> ABC</button>
        <button onclick="total(3)" >3 <br> DEF</button>
        <br>
        <button onclick="total(4)" >4 <br> GHI</button>
        <button onclick="total(5)" >5 <br> JKL</button>
        <button onclick="total(6)" >6 <br> MNO</button>
        <br>
        <button onclick="total(7)" >7 <br> PQRS</button>
        <button onclick="total(8)" >8 <br> TUV</button>
        <button onclick="total(9)" >9 <br> WXYZ</button>
        <br>
        <button onclick="total('*')" >* <br> </button>
        <button onclick="total(0)" >0 <br> </button>
        <button onclick="total('#')" ># <br> </button>





</body>
</html>