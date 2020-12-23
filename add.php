<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #912b34;">
        
        <div class="container-fluid">
              <a class="navbar-brand" href="#">ARITHMATIC OPERATIONS</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link" href="add.php">ADD</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="subtract.php">SUBTRACT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="product.php">MULTIPLY</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="division.php">DIVIDE</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col col-6 col-sm-6 col-md-6col-lg-6col-xl-6 col-xxl-6">
                <table class="table table-borderless">
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>FIRST NUMBER</td>
                        <td><input id="num1" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>SECOND NUMBER</td>
                        <td><input id="num2" type="text" class="form-control"></td>
                    </tr>
                   <tr>
                       <td></td>
                       <td><button onclick="mybuttonclick()" class="btn btn-success">ADD</button></td>
                   </tr>
                   <tr>
                  
                    <tr>
                        <td>
                            <p>The SUM is : 
                                <span id = "DisplayResult"></span>
                                </p>
                        </td>
                    </tr>
                 </td>
                </tr>
                </table>
                
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script>
        function mybuttonclick()
        {
              var getFirstNumber=parseInt(document.getElementById("num1").value)
              var getSecondNumber=parseInt(document.getElementById("num2").value)
              var DisplayResult=getFirstNumber+getSecondNumber
              document.getElementById("DisplayResult").innerHTML=DisplayResult
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>