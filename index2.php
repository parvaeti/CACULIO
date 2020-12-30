<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CACULIO</title>
</head>
<h1>SUBTRACTION</h1>
<body class="mybackground">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table class="title" class="table">
                    <tr>
                        <td>FIRST NUMBER TO BE SUBTRACTED:</td>
                        <td><input id="fnum" class="form-control" type="text"></td>
                    </tr>
                    <tr>
                    <td>SECOND NUMBER TO BE SUBTRACTED :</td>
                    <td><input id="snum" class="form-control" type="text"></INPUT></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="subtraction()" class="btn btn-dark">SUBTRACT</button></td>
                    </tr>
                    <tr>
                        <td>RESULT ON SUBTRACTION :</td>
                        <td><p id="result"></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
function subtraction()
{
    var getFIRSTNUMBERTOBESUBTRACTED=parseInt(document.getElementById("fnum").value)
    var getSECONDNUMBERTOBESUBTRACTED=parseInt(document.getElementById("snum").value)
   
    var res=getFIRSTNUMBERTOBESUBTRACTED-getSECONDNUMBERTOBESUBTRACTED
    
    document.getElementById("result").innerHTML=res
    console.log(res)
}

    </script>
</body>
</html>