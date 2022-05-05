<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac/loginpage</title>
    <link href="../css/register.css"  rel="stylesheet" >
    <link href="../css/footer.css" rel="stylesheet">
    <style>
        .footer-div{
    background-color: bisque;
    text-align: center;
    padding:10px 0px;
}
.footer-links{
    display: inline-block;
    margin:0px 10px;
    font-size: 20px;
    font-weight:bolder;
}
.footer-intro{
    margin-top:10px;
}
.footer-intro p{
    margin-top:5px;
    font-size: 20px;
}
*{
    margin:0px;
    padding:0;

}
.navbar{
    height:60px;
    padding:0px 20px;
    background-color: rgb(145, 9, 9);
    color:white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.navbar button{
    padding:10px 20px;
    font-size:18px;
    margin:0px 10px;
    border:none;
    border-radius: 50px;
    transition:1s;
    cursor: pointer;
}
.navbar button:hover{
    background-color:#000000;
    color:white;
}
.navbar a {
    text-decoration: none;
    color:black;
}
.navbox button:hover a{
    color:white;
}
.register-form{
        width: 80%;
        height: 500px;
        margin:50px auto;
        padding:20px;
}
.register-form form{
    display: flex;
    width:30%;
    margin:auto;
    padding:30px;
    flex-direction: column;
    background-color: rgb(206, 211, 211);
}
.register-form form input{
    height: 40px;
    margin: 20px 0px;
    padding:0px 10px;
    border:none;
    border-radius: 50px;

}
input[type="submit"]{
    background-color: rgb(145, 9, 9);
    color:white;
}


@media only screen and (max-width:768px){
    .register-form{
        min-height:400px;
    }
    .navbox button{
        padding:10px 15px;
        font-size:14px;
        margin:0px 5px;
    }
    .navbar h1{
        font-size: 1.6rem;
    }
    .navbox h1{
        font-size:1rem;
    } 
    .navbar{
        padding-left:10px;
    }
    .register-form{
        width:90%;
        min-height: 500px;
        margin:20px auto;
        padding:10px;
}
.register-form form{
    width:60%;
    padding:30px 20px;
    }

}
@media only screen and (max-width:576px){
     .register-form{
        width:90%;
        min-height: 500px;
        margin:50px auto;
        padding:10px;
}
.register-form form{
    width:80%;
    padding:20px;
    }

}
    </style>

</head>
<body>
    <div class="navbar">
        <div>
            <h1>
                ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('home')}}">Home</a></button>
        </div>
    </div>
    <div class="register-form">
        <form action="{{route('postlogin')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <input type="text" placeholder="Username" name="name">
                <input type="password" placeholder="Password" name="password">
                <input type="submit" value="Submit">  
        </form>
    </div>
    <footer>
        <div class="footer-div">
            <a class="footer-links" href="#">About</a>
            <a class="footer-links" href="#">Comfac</a>
            <a class="footer-links" href="#">Top 100</a>
            <div class="footer-intro">
                <p>BWF Production For Tula's Student Only, Dehradun</p>
                <p>&copy Copyright 2022,From BWF with Love!!</p>
            </div>
        </div>
    </footer>
</body>
</html>

