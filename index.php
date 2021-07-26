<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tr>
                        <td>EMAIL ID</td>
                        <td><input type="text" id="id" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" id="pword" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="index()" class="btn btn-danger">LOGIN</button></td>
                    </tr>
                </table>
            </div>


            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <table class="table table-borderless">
                    <tr>
                        <td>NAME</td>
                        <td><input type="text" id="name" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="text" id="dob" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PLACE</td>
                        <td><input type="text" id="place" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>EMAIL ID</td>
                        <td><input type="text" id="mail" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD</td>
                        <td><input type="password" id="pass" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>CONFIRM PASSWORD</td>
                        <td><input type="password" id="conpass" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button onclick="login()" class="btn btn-success">REGISTER</button></td>
                    </tr>




                </table>


            </div>


        </div>


    </div>
    <script>
        function login()
        {
            var name=document.getElementById("name").value
            var dob=document.getElementById("dob").value
            var place=document.getElementById("place").value
            var email=document.getElementById("mail").value

            var password=document.getElementById("pass").value
            var confirm=document.getElementById("conpass").value


            console.log(name)
            console.log(dob)
            console.log(place)
            console.log(email)
            console.log(password)
            console.log(confirm)






        }
        function index()
        {
            var email=document.getElementById("id").value
            var pass=document.getElementById("pword").value


            console.log(email)
            console.log(pass)
        }



    </script>
    
</body>
</html>