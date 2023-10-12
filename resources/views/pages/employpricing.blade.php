@extends('layouts.master')
@section('content')
    
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.wrapper{
    max-width: 1090px;
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    margin: auto;
    justify-content: center;
     gap: 60px;
    margin-top: 100px;
}

.wrapper .table{
    background: #fff;
    width: calc(33% - 20px);
    padding: 30px 30px;
    position: relative;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}

@media (max-width: 1020px){
    .wrapper .table{
        width: calc(50% - 20px);
        margin-bottom: 40px;
    }
}

@media (max-width: 698px){
    .wrapper .table{
        width: 100%;
    }
}

.table .price-section{
   display: flex;
   justify-content: center;
}

.price-section .price-area{
    height: 120px;
    width: 120px;
    background: #ffd861;
    border-radius: 50%;
    padding: 2px;
}

.price-section .price-area .inner-area{
    height: 100%;
    width: 100%;
    border-radius: 50%;
    border: 3px solid #fff;
    color: #fff;
    line-height: 117px;
    text-align: center;
    position: relative;
}

.price-area .inner-area .text{
    font-size: 25px;
    font-weight: 400;
    position: absolute;
    top: -26px;
    left: 49px;
}

.price-area .inner-area .price{
    font-size: 37px;
    font-weight: 500;
}

.table .package-name{
    width: 100%;
    height: 2px;
    background: #ffecb3;
    margin: 35px 0;
    position: relative;
}

.table .package-name::before{
    position: absolute;
    content: "Basic";
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    font-size: 25px;
    padding: 0 10px;
    font-weight: bolder;
}

.table .features li{
    list-style: none;
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}

.features li .list-name{
    font-size: 17px;
    font-weight: 400;
}

.features li .icon{
    font-size: 15px;
}

.features li .icon.check{
    color: #2db94d;
}

.features li .icon.cross{
    color: #cd3241;
}

.table .btn{
    display: flex;
    justify-content: center;
    margin-top: 35px;
}

.table .btn button ,.table .btn a{
    width: 80%;
    height: 50px;
    font-weight: 700;
    color: #fff;
    font-size: 20px;
    border: none;
    outline: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.basic .price-area,
.basic .inner-area{
    background: #ffd861;
}

.basic .btn button{
    background: #fff;
    color: #ffd861;
    border: 2px solid #ffd861;
}

.basic .btn button:hover{
    border-radius: 6px;
    background: #ffd861;
    color: #fff;
}

.Premium .price-area,
.Premium .inner-area{
    background: #a26bfa;
}

.Premium .btn button ,.Premium .btn a{
    background: #fff;
    color: #a26bfa;
    border: 2px solid #a26bfa;
}

.Premium .btn button:hover ,.Premium .btn a:hover{
    border-radius: 6px;
    background: #a26bfa;
    color: #fff;
}

.Ultimate .price-area,
.Ultimate .inner-area{
    background: #43ef8b;
}

.Ultimate .btn button,.Ultimate .btn a{
    background: #fff;
    color: #43ef8b;
    border: 2px solid #43ef8b;
}

.Ultimate .btn button:hover,.Ultimate .btn a:hover{
    border-radius: 6px;
    background: #43ef8b;
    color: #fff;
}

.basic .package-name{
    background: #ffecb3;
}

.Premium .package-name{
    background: #a26bfa;
}

.Ultimate .package-name{
    background: #43ef8b;
}

.basic .package-name::before{
    content: "Basic";
}

.Premium .package-name::before{
    content: "Premium";
}

.Ultimate .package-name::before{
    content: "Ultimate";
}

.basic ::selection,
.basic .price-area,
.basic .inner-area{
    background: #ffd861;
}

.Premium ::selection,
.Premium .price-area,
.Premium .inner-area{
    background: #a26bfa;
}

.Ultimate ::selection,
.Ultimate .price-area,
.Ultimate .inner-area{
    background: #43ef8b;
}
    </style>
    <link rel="stylesheet" href="./pricing.css">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>
<body>
   <div class="wrapper">
       <div class="table basic">
           <div class="price-section">
               <div class="price-area">
                   <div class="inner-area">
                       <span class="text">
                         &#8377;
                       </span>
                       <span class="price">19.99</span>
                   </div>
               </div>
           </div>
           <div class="package-name">
    
           </div>
           <div class="features">
               <li>
                   <span class="list-name">5 Meals</span>
                   <span class="icon check"><i class="fas fa-check-circle"></i></span>
               </li>
               {{-- <li>
                   <span class="list-name"></span>
                   <span class="icon check"><i class="fas fa-check-circle"></i></span>
               </li> --}}
               <li>
                   <span class="list-name">Free Delivery</span>
                                    <span class="icon check"><i class="fas fa-check-circle"></i></span>

               </li>
               <li>
                   <span class="list-name">Free meal</span>
                   <span class="icon cross"><i class="far fa-times-circle"></i></span>
               </li>
               <form action="{{ route('afterselect') }}/3" method="get">
                <div class="btn"><button>Purchase</button></div>
               </form>
           </div>
       </div>
       <div class="table Premium">
           <div class="price-section">
               <div class="price-area">
                   <div class="inner-area">
                       <span class="text">
                         &#8377;
                       </span>
                       <span class="price">59.99</span>
                   </div>
               </div>
           </div>
           <div class="package-name">
            
           </div>
           <div class="features">
               <li>
                   <span class="list-name">20 Meals</span>
                   <span class="icon check"><i class="fas fa-check-circle"></i></span>
               </li>
               <li>
                   <span class="list-name">Free Delivery</span>
                   <span class="icon check"><i class="fas fa-check-circle"></i></span>
               </li>
               {{-- <li>
                   <span class="list-name">Credit Remove Permission</span>
                   <span class="icon check"><i class="fas fa-check-circle"></i></span>
               </li> --}}
               <li>
                   <span class="list-name">Free meal</span>
                                   <span class="icon check"><i class="fas fa-check-circle"></i></span>

               </li>
            <form action="{{ route('afterselect') }}/4" method="get">
                <div class="btn"><button>Purchase</button></div>
               </form>
           </div>
       </div>
       
   </div>
   
</body>
</html>

@endsection
