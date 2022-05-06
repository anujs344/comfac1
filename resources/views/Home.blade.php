<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comfac</title>
    <link href="{{asset('css/index.css')}}"  rel="stylesheet" >
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
.navbox{
    display: flex;
    justify-content: end;
}
.navbox button{
    padding:10px;
    font-size:18px;
    margin:0px 10px;
    border:none;
    border-radius: 50px;
    transition:1s;
    cursor: pointer;
}
.navbox button:hover{
    background-color:#000000;
    color:white;
}
.navbox button:hover a{
    color:white;
}
.navbar a {
    text-decoration: none;
    color:black;
}
.main{
    width:80%;
    min-height:400px;
    background-color: rgb(206, 211, 211);
    margin:50px auto;
    padding: 20px;
}
.main-head p{
    font-size: 30px;
    margin:20px 0px;
    text-align: center;
}
.main-head h2{
    text-align: center;
}
.photo-body{
    display: flex;
    margin-top:30px;
    flex-wrap: wrap;
    justify-content:center;
    
}

.photo-body h1{
    margin: 70px 30px;
}

.photo-body p{
    margin: 10px;
}

#choose{
    text-align: center;
    margin-top: 30px;
}
/* responsive css    */

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
    .main{
        min-height:500px;
        margin:20px auto;
        padding: 20px 10px;
    }
    .main-head p{
        font-size: 20px;
        line-height:35px;
        margin:20px 0px;
    }
    .photo1 img{
        height:30px;
        width:30px;
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
                ComFac
            </h1>
        </div>
        <div class="navbox">
            <button><a href="{{route('getregister')}}">Register</a></button>
            <button><a href="{{route('getlogin')}}">LOGIN</a></button>
        </div>
    </div>
    <div class="main">
        <div class="main-head">
            <p>
                Were we let in our looks? No we will be judged on them? Yes
            </p>
            <h2>Who is Hotter?Tulites</h2><p> Register yourself to see how much popular you are in Tulas!<br></p><h2>Click To Choose!</h2>
        </div>
        <div class="main-body">
               <div class="photo-body">
                   <div class="box photo1">
                       
                            <a href="/haayouselected/{{$leftimageid->id}}/{{$rightimageid->id}}"> <img src="{{$leftimageid->imagepath}}" style="width:200px;height:200px;border: 3px solid red;"></a>
                            <p>Name- {{$leftimageid->name}}  <br>Total hits- {{$leftimageid->hits}} peoples
                            <br>Total dislikes - {{$leftimageid->dislikes}}
                            </p>    
                      
                       
                   </div>
                   <h1>OR</h1>
                   <div class="box photo1">
                    <a href="/haayouselected/{{$rightimageid->id}}/{{$leftimageid->id}}"> <img src="{{$rightimageid->imagepath}}"  style="width:200px;height:200px;border: 3px solid red;"></a>
                    <p>Name- {{$rightimageid->name}}  <br>Total hits- {{$rightimageid->hits}} peoples
                        <br>Total dislikes - {{$rightimageid->dislikes}}
                    </p>
                  </div>
                  
               </div>

               <marquee behavior="scroll" direction="left" scrollamount="15"><h1 id="choose">!!Choose the one who look hotter!!</h1></marquee>
        </div>
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