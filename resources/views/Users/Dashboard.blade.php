<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac/RegisterPage</title>
    <link href="{{asset('css/dashboard.css')}}"  rel="stylesheet" >
    <link href="{{asset('css/footer.css')}}" rel="stylesheet">
    <style>
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

.login-main{
    width:80%;
    min-height:400px;
    margin:30px auto;
    padding:40px 0px;
    text-align: center;
    background-color: rgb(206, 211, 211);
}
.login-main h1{
    font-size: 3rem;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    margin:20px 0px;
}
.login-main h2{
    margin:20px 0px
}
.login-main p,span{
    margin: 20px 0px;
    font-family: cursive;
    font-size: 18px;
}

/* responsive css  */


@media only screen and (max-width:568px){
    .navbox button{
        padding:10px;
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
    .login-main{
        width:95%;
        min-height:400px;
        margin:30px auto;
        padding:40px 0px;
        text-align: center;
        background-color: rgb(206, 211, 211);
    }
    .navbar h1{
        font-size: 1.4rem;
    }
    .login-main h1{
        font-size: 2rem;
    }
    .login-main p,span{
        margin: 20px 0px;
        font-size: 16px;
    }
    
}
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
    </style>
</head>
<body>
    <div class="navbar">
        <div>
            <h1>
               Welcome To ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('home')}}">HOME</a></button>
            <button><a href="{{route('logout')}}">Logout</a></button>

        </div>
    </div>
    <div class="login-main">
        <h1>Hello {{$data->name}}</h1>
        <p>Photo Counter</p>
        <h2>Displayed:{{$data->views}}</h2>
        <h2>Selected:{{$data->hits}}</h2>
        <h2>Diselected:{{$data->dislikes}}<h2>
         
        <p>You are 
            @if($new)
                yet to be liked
            @else
                {{($data->hits/$data->views)*100}}   % popular in your college</p>
            @endif
          
        <span>!!Hot Girl/Boy!!</span>

        <p>Share it on instagram and facebook and show them how popular you are</p>
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






