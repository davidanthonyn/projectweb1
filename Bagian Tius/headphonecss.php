<?php header("Content-type: text/css; charset: UTF-8"); ?>

.categories{
   content: "";
display:flex;
    clear: both;
   
}
.col-1{
     float: left;
    width: 33.33%;
    padding: px;
}
.col-1 img{
    width: 100%;
}


.horizontal{
    display: flex;
}
.horizontal2{
    display: flex;
}
.small-container{
      max-width: 1080px;
    margin: auto;
    padding-left;25px;
    padding-right: 250px;
}

.col-2{
    float: left;
    width: 400%;
   flex-basis: 25%;
    padding-right: 200px;
    margin-bottom: 50px;
    transition: transform 0.5;
 
}

.produktl{
    color:black;
}

.produktl::after{
  content: '';
    background: #ff523b;
    width: 193px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 30%;
    left: 6.3%;
    transform: translateX(-50);
}

h4{
    color: black;
    font-weight: normal;
}
.col-2 p{
    font-size: 14px;
    color: black;
}

.rating .fa{
    color: #ff523b;
}

.col-2:hover{
    transform: translateY(-6px);
}