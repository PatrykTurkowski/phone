<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Phone</title>

    <script src="xhr.js" defer></script>
</head>
<body>

        <div class="container">
            <div class = "screen"> <input type="text" id = "date"></div>
                <div class = "buttons">
                    <div class = "row">
                        <button onclick="total(1)" >1 </button>
                        <button onclick="total(2)" >2 <br> ABC</button>
                        <button onclick="total(3)" >3 <br> DEF</button>
                    </div>
                    <div class = "row">
                        <button onclick="total(4)" >4 <br> GHI</button>
                        <button onclick="total(5)" >5 <br> JKL</button>
                        <button onclick="total(6)" >6 <br> MNO</button>
                    </div>
                    <div class = "row">
                        <button onclick="total(7)" >7 <br> PQRS</button>
                        <button onclick="total(8)" >8 <br> TUV</button>
                        <button onclick="total(9)" >9 <br> WXYZ</button>
                    </div>
                    <div class = "row">
                        <button onclick="total('*')" >*  </button>
                        <button onclick="total(0)" >0  </button>
                        <button onclick="total('#')" >#  </button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
