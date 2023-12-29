<!DOCTYPE html>
<html>
<head>
    <title>Animated About Us Page Using HTML & CSS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    



    </head>
    <style>*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: "Arial", sans-serif;
}
.hero{
    background-color: #f8f8f8;
    overflow: hidden;
}
.heading h1{
    color: #ff6347;
    font-size: 55px;
    text-align: center;
    margin-top: 35px; 
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 90%;
    margin: 65px auto;
}
.hero content{
    flex:1;
    width: 600px;
    margin: 0px 25px;
    animation: fadeInUp 2s ease;
}
.hero content h2{
    font-size: 1;
    margin-bottom: 20px;
    color: #333;
}
.hero content p{
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 40px;
    color: #666;
}
.hero content button{
    display: inline-block;
    background-color: #ff4500;
    color: #fff;
    padding: 12px 24px;
    font-size: 20px;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
}
.hero content button:hover{
    background-color: #ff6347;
    transform: scale(1.1);
}
.hero-image{
    flex: 1;
    width: 600px;
    margin: auto;
    animation: fadeInRight 2s ease;
}
img{
    width: 100%;
    height: auto;
    border-radius: 10px; 
}
@media screen and (max-width: 728){
    .heading h1{
        font-size: 45px;
        margin-top: 30px;
    }
    .hero{
        margin: 0px;
    }
    container{
        width: 100px;
        flex-direction: column;
        margin: 0px;
        padding: 0px 40px;
    }
    .hero content{
        width: 100%;
        margin: 35px 0px; 
    }
    .hero content h2{
        font-size: 30px;
    }
    .hero content p{
        font-size: 18px;
        margin-bottom: 20px;    
    }
    .hero content button{
        font-size: 16px;
        padding: 8px 16px;
    }
    .hero-image{
        width: 100%;    
    }
}
@keyframes fadeInUp{
    0%
        opacity: 0;
        transform: translateY(50px);
    }
     100%{
        opacity: 1;
        transform: translateY(0px);
     }
    @keyframes fadeInRight{
    0%
        opacity: 0;
        transform: translateX(-50px);
    }
     100%{
        opacity: 1;
        transform: translateX(0px);
     }
</style>
    <body>
    
    
        <section class="hero">
            <div class="heading">
                <h1>About Us</h1>
            </div>
            <div class="container">
                <div class="hero content">
                <h2>Welcome To Our Website</h2>
                <p>Discover the latest trends and innovations in technology, design,and nore. Our team of experts brings you the best content and insights to help you stay ahead of the curve</p>
               <button onclick="window.location.href = 'index.php'" class="cta-button">Go Back</button>

            </div>
             <div class="hero-image">
                <img src="assets/img/realmainlogoblack.png"> 
                </div>   
            </div>
        </section>     
        
</body>
</html>