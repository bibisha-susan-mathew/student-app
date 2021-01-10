<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <H1>STUDENT</H1>
    <table class="table table-borderless">
       <tr>
           <td>NAME</td>
           <td><input id="name" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>ROLL NO</td>
           <td><input id="rn" type="text" class="form-control"></td>
       </tr>
       <tr>
           <td>ADMN NO</td>
           <td><input id="an" class="form-control" type="text"></td>
       </tr>
       <tr>
           <td>COLLEGE</td>
           <td><input id="clg" type="text" class="form-control"></td>
       </tr>
        <tr>
            <td></td>
            <td><Button onclick="skul()" class=" btn btn-info">SUBMIT</Button></td>
        </tr>
    </table>
    </div>
    </div>
    </div>

    <script>
        function skul(){
            var getName=document.getElementById("name").value
            var getRn=document.getElementById("rn").value
            var getAdmnNo=document.getElementById("an").value
            var getClg=document.getElementById("clg").value

           console.log(getName)
           console.log(getRn)
           console.log(getAdmnNo)
           console.log(getClg)
        }
    </script>
</body>
</html>