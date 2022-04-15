<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FLIPKART</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<style>
#border1 {
display: inline-block;
width: 300px;
height: 150px;
margin: 6px;
color:yellow;
}


.border{
display: inline-block;
width: 300px;
height: 90px;
margin: 6px;
}
</style>
<body>
  <!---header--->
  <div class="flex-container-fluid">    
      <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <img class="text-center" src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/flipkart-plus_8d85f4.png" height="50" width="75" style="margin-left:30px; padding-top: 2px;">
        <a class="navbar-brand" href="#"  style="margin-left:30px; padding-top: 2px;">Explore Plus<img src="/image/plus_aef861.png" height="15" width="10" class="text-center"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <form class="form-inline mt-xxl-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="Search For Product" aria-label="Search" style="height:45px; width: 600px; margin-left: 10px; padding-top: 2px;" >
      <button class="btn my-2 my-sm-0" type="submit">
        <i class="bi bi-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
</button>
    </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="width: 80px;">
      <li class="nav-item dropdown text-link" style="margin-right:10px; padding-top: 2px;  ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Login 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
          <a class="dropdown-item" href="{{url('dashboard')}}" style=" padding-top: 2px;"><i class="bi bi-person" style="margin-bottom: 20px;" >logout</i></a>
          
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-person" viewBox="0 0 16 16"   >
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg>
          <a class="dropdown-item" href="#"  >Gift Card</a></span>
          <i class="bi bi-gift" style="margin-top:10px;"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="blue" class="bi bi-gift" viewBox="0 0 16 16">
  <path d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z"/>
</svg>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"> whislist <i class="bi bi-suit-heart-fill"></i>
</a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-suit-heart-fill" viewBox="0 0 16 16">
  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
</svg></div></li>
         <li class="nav-item">
       <a class="nav-link col-2" href="{{url('admin')}}" style="margin-right:10px;padding-right: 2px; ">Admin</a></li> 
    <li class="nav-item active">  
   
       <a class="nav-link col-2" href="#" style="height:5px; width:25px; margin-bottom:2px; padding-bottom: 2px; margin-left: 10px;"> Card</a><i class="bi bi-cart" style="margin-bottom: 5px;"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-cart" viewBox="0 0 16 16" style="margin-bottom: 20px;" >
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg> 
        </li>
  
    </ul>

   </nav>
</div>
<!---second-->
<div class="flex-container-fluid">
  <div class="row" style="height: 150px;">
         <div class="col" style="background-color: white;">
      <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/22fddf3c7da4c4f4.png?" style="max-height: 100px; max-width: 100px">
      <button class="btn btn-inline-primary" style="text-center">Mobiles</button>
    </div>
    <div class="col" style="background-color:white;">
      <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/82b3ca5fb2301045.png?" style="max-height: 100px; max-width: 100px">
      <div class="dropdown">
  <button class="btn btn-inline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Fashion
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Men's Top Wear</a>
    <a class="dropdown-item" href="#">Women Ethnic</a>
    <a class="dropdown-item" href="#">Women Western</a>
    <a class="dropdown-item" href="#">Men Footwear</a>
    <a class="dropdown-item" href="#">Kids</a>
    <a class="dropdown-item" href="#">Women Footwear</a>
      </div>
</div>
    </div>
    <div class="col" style="background-color: white;">
     <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/69c6589653afdb9a.png?" style="max-height: 100px; max-width: 100px">
      <div class="dropdown" style="margin-right:15px;">
  <button class="btn btn-inline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Electronics
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Lapton Accessories</a>
    <a class="dropdown-item" href="#">Mobile Accessory</a>
    <a class="dropdown-item" href="#">Gaming</a>
    <a class="dropdown-item" href="#">power Bank</a>
    <a class="dropdown-item" href="#">Health & PersonalCare</a>
    <a class="dropdown-item" href="#">Laptop</a>
      </div>
</div>
    </div>
    <div class="col" style="background-color: white;">
    <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/ab7e2b022a4587dd.jpg?" style="max-height: 100px; max-width: 100px">
      <div class="dropdown">
  <button class="btn btn-inline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Homes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Home Furnishings</a>
    <a class="dropdown-item" href="#">Living Room</a>
    <a class="dropdown-item" href="#">Kitchen & Diningn </a>
    <a class="dropdown-item" href="#">Home Decor</a>
    <a class="dropdown-item" href="#">Tool & Utility</a>
    <a class="dropdown-item" href="#">Space Saving</a>
      </div>
</div>
    </div>
    <div class="col" style="background-color: white;">
   <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/0ff199d1bd27eb98.png?" style="max-height: 100px; max-width: 100px">
      <div class="dropdown">
  <button class="btn btn-inline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Appliances
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Washing Machines</a>
    <a class="dropdown-item" href="#">Air Conditioners</a>
    <a class="dropdown-item" href="#">Refrigerators </a>
    <a class="dropdown-item" href="#">Home Appliances</a>
    <a class="dropdown-item" href="#">Seasonal Appliances</a>
    <a class="dropdown-item" href="#">Premium Appliances</a>
      </div>
</div>
    </div>
    <div class="col" style="background-color: white;">
      <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/71050627a56b4693.png?" style="max-height: 100px; max-width: 100px">
      <button class="btn btn-inline-primary" style="text-center">Travel</button>
  
    </div>
    <div class="col 1" style="background-color: white;">
      <img class="text-center" src="https://rukminim2.flixcart.com/flap/128/128/image/dff3f7adcf3a90c6.png?" style="max-height: 100px; max-width: 100px">
      <div class="dropdown">
  <button class="btn btn-inline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Beauty,Toys & More
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Baby Care</a>
    <a class="dropdown-item" href="#">Food & Drinks</a>
    <a class="dropdown-item" href="#">Men's Grooming </a>
    <a class="dropdown-item" href="#">Sports & Fitness</a>
    <a class="dropdown-item" href="#">Books & music</a>
    
      </div>
</div>
    </div>
    
 </div>
</div>
<div class="flex-container-fluid">

<div id="mySlideshow" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
<li data-target="#mySlideshow" data-slide-to="0" class="active"></li>
<li data-target="#mySlideshow" data-slide-to="1"></li>
<li data-target="#mySlideshow" data-slide-to="2"></li>
</ul>

<!-- Slideshow -->
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="https://th.bing.com/th/id/OIP.WxAsLyQYNoXrFevuUVAuTgHaCE?" alt="Slide 1" height="200">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://th.bing.com/th/id/OIP.wuLax0XW2YJKsD1prUdmGAHaBd?" alt="Slide 2" height="200">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="https://rukminim2.flixcart.com/flap/844/140/image/badcbd83f1ee65a8.jpg?" alt="Slide 3" height="200">
</div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#mySlideshow" data-slide="prev">
<span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#mySlideshow" data-slide="next">
<span class="carousel-control-next-icon"></span>
</a>

</div>

</div>
<!---trending-->
<div class=" flex-container-fluid">
  <span class="border" style="height:60px; width: 1400px;"  >
   <ul class="nav flex-row">
    <li class="nav-item p-2"><h  style="font-size: 25px;padding-top: -10px; margin-bottom: -30px;">Trending Offers</h></li>
    <li class="nav-item justify-content-between ">
      
         <button class="btn btn-primary btn-md " style="margin-left: 880px;margin-bottom: -30px; width:150px;  padding-top: 3px;">ViewAll</button>
    </li>
  </ul>
  </span>
  <div class="d-flex p-3 bg-light text-white" > 
  
    <div class="row">
      <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px;">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kzrbiq80/t-shirt/r/w/f/l-bwmrn-z31-blive-original-imagbzzgwhg2n6ng.jpeg?"></div>
            <button class="btn btn-inline-primary" style="text-left" >T-Short</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>199</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up to 55% Off</a>
       </div> </div>
       <div class="row">
      <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/l12h1u80/mobile-skin/e/t/6/appleairpodspro-skins-stickers-ultra-thin-3d-slim-perfect-fit-original-imagcpx3wzpfj4ph.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">Apple Airpodspro</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>1000</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up to 60% Off</a>
    </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kyhlfgw0/screen-guard/edge-to-edge-screen-guard/o/k/u/ngt-noisefit-pro-3-watch-raptag-original-imagapjfuqwztcjr.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Raptas Watch</button><br>
    <a class="text-center text-success"  href="#" style="margin-left:18px;" >From&nbsp;<span>&#8377;</span>700</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up to 55% Off</a>
  </div></div>
    <div class="row">
     <div class="col">
 
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kuvkcy80/headphone/7/7/c/air-tune-buds-true-wireless-bluetooth-headset-avlokan-original-imag7wfdyg39hg2v.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Bluetooth Headset</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>200</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Mi,Sony & More</a>
  </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kyhlfgw0/sari/e/e/q/free-1694s128-1770s401-1694s127-samah-unstitched-original-imagapezfrmyfsye.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Printed Saree</button><br>
 <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>450</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up To 70% Off</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kmxsakw0/watch/8/e/v/stylis-men-s-all-new-looks-sports-design-nester-original-imagfq9ybfkzeyry.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Wrist Watch</button><br>
<a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>700</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up to 70% Off</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; "><img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kcw9w280/hand-messenger-bag/k/v/a/beige-blue-h-bag-beige-blue-messenger-bag-dowet-original-imaftx9jghqxw7ht.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Hand Bag</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>200</a><br>
      <a class="text-center text-black-50" href="#" style="margin-left:10px;">Up to 65% Off</a>
  </div>
</div>
  </div>


</div>
<!--footwear-->
<div class=" flex-container-fluid">
  <span class="border" style="height:60px; width: 1400px;">
   <ul class="nav flex-row">
    <li class="nav-item"><h style="font-size: 25px; padding-top: -10px; margin-bottom: -30px;">Men's Footwear</h></li>
    <li class="nav-item justify-content-between ">
      
         <button class="btn btn-primary btn-md " style="margin-left: 900px; width:150px; padding-top: -10px; margin-bottom: -30px; padding-top: 3px;">ViewAll</button>
    </li>
  </ul>
</span>
  <div class="d-flex p-3 bg-light text-white">  
    <div class="row">
      <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">

      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kg15ocw0-0/shoe/5/w/8/51747-wildcraft-navy-original-imafwczkg92nagqb.jpeg?"></div>
            <button class="btn btn-inline-primary" style="text-center">Jack & Son</button>
            <br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Upto 80% Off<br>
      <a class="text-center text-black-50" href="#">Never Before Prices</a>
       </div> </div>
       <div class="row">
      <div class="col 1">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">

      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/k6mibgw0/shoe/u/v/2/4330908-41-nike-black-original-imafpferdrygemuc.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">Nike,ASICS</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Upto 80% Off</a><br>
      <a class="text-center text-black-50" href="#">Sport Shoes & More</a>
    </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/k66sh3k0/shoe/h/z/z/wht-blk-chn-rd-6-fila-wht-blk-chn-rd-original-imafzp5pdxwzs2zv.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Puma,FILA,Lotto</button><br>
    <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>400</a><br>
      <a class="text-center text-black-50" href="#">Casual Shoes & More</a>
  </div></div>
    <div class="row">
     <div class="col">
 
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/k6xxua80/shoe/6/p/z/982-10-creattoes-blue-original-imafp9wytbdhyzgm.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Best Selling Footwear</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Upto 60% Off<br>
      <a class="text-center text-black-50" href="#">Canvas Shoes For Men</a>
  </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/krxtrww0/shoe/3/b/o/10-sx0677g-sparx-turkeyblueblack-original-imag5mcfzuvssh8y.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Season's Best Seller</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>199</a><br>
      <a class="text-center text-black-50" href="#">Shoes, Sandals & More</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kjhgzgw0-0/shoe/4/0/c/cj0291-100nike-10-nike-white-black-flash-crimson-oracle-aqua-original-imafzfg4srdt4s5y.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Nike,ADIDS,Puma</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>300</a><br>
      <a class="text-center text-black-50" href="#">Running Shoes & More</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/ks0onm80/shoe/b/w/n/9-sp7212-kraasa-white-original-imag5zgz26cjwjn6.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Sparx,Kraasa</button><br>
  <a class="text-center text-success"  href="#"style="margin-left:18px;">From&nbsp;<span>&#8377;</span>199</a><br>
      <a class="text-center text-black-50" href="#">Up to 65% Off</a>
  </div>
</div>
    
  </div>


</div>

<!--beauty product-->
<div class=" flex-container-fluid">
  <span class="border"  style="height:60px; width: 1400px;">
   <ul class="nav flex-row">
    <li class="nav-item"><h style="font-size: 25px; padding-top: -10px; margin-bottom: -30px;">Beauty Product</h></li>
    <li class="nav-item justify-content-between ">
      
         <button class="btn btn-primary btn-md " style="margin-left: 910px; width:150px; padding-top: -10px; margin-bottom: -30px; padding-top: 3px;">ViewAll</button>
         
    </li>
  </ul>
</span>
  <div class="d-flex p-3 bg-light text-white">  
    <div class="row">
      <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
<img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kh0vonk0/nail-polish/a/u/j/5-nail-pops-nail-color-153-elle18-original-imafx4rhnruf3fnp.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">Kajal,Nailpaints & more</button>
            <br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>200</a><br>
      <a class="text-center text-black-50" href="#">Elle18,ADS & More</a>
       </div> </div>
       <div class="row">
      <div class="col 1">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
  
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kj0bp8w0/menstrual-cup/n/f/q/large-fsp259-sirona-original-imafyzfggr8hkxga.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">Best Of Personal Care</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>499</a><br>
      <a class="text-center text-black-50" href="#">Joy,Bio Care,Sirona.</a>
    </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
            <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/jr9iwsw0/concealer/z/n/h/liquid-sand-sable-swiss-beauty-original-imafd3kxgfrg5ggj.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Kajal,Nailpaints & more</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>400</a><br>
      <a class="text-center text-black-50" href="#">Up to 30% Off Now</a>
  </div></div>
    <div class="row">
     <div class="col">
 
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/krce64w0/kajal/o/i/z/139-call-me-colossal-kit-colossal-waterproof-mascara-colossal-original-imag55g5f2szhhhp.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Makeup Essentials</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">Upto 60% Off<br>
      <a class="text-center text-black-50" href="#">Renee, Sugar cosmetics</a>
  </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kosxzm80/perfume/o/b/d/amalfi-bleu-eau-de-parfum-skinn-by-titan-women-original-imag36mjyezqgsgd.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Best of Fagrance</button><br>
    <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>999</a><br>
      <a class="text-center text-black-50" href="#">Davidoff,Skinn By Titan</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kbpeoi80/combo-kit/v/u/d/men-s-grooming-kit-tmc-web-822-the-man-company-original-imafsz5gfngyamq7.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Fragrances</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>699</a><br>
      <a class="text-center text-black-50" href="#">The Man Company,One8..</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kvjuufk0/lipstick/i/v/t/7-5-creamy-matte-5-in-1-fabulous-lipsticks-5in1-teayason-original-imag8f86md3uhq7z.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Kajal,Nail Paints,&More</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>200</a><br>
      <a class="text-center text-black-50" href="#">Elle 18 & Beautyleander..</a>
  </div>
</div>
  </div>

</div>
<!---household-->
<div class=" flex-container-fluid">
  <span class="border" style="height:60px; width: 1400px;">
   <ul class="nav flex-row">
     <li class="nav-item"><h style="font-size: 25px; padding-top: -10px; margin-bottom: -30px;">Household</h></li>
    <li class="nav-item justify-content-between ">
      
         <button class="btn btn-primary btn-md "  style="margin-left: 950px; width:150px; padding-top: -10px; margin-bottom: -30px; padding-top: 3px;" >ViewAll</button>
    </li>
  </ul>
</span>
  <div class="d-flex p-3 bg-light text-white">  
    <div class="row">
      <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
     <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/l13whow0/bottle/z/n/x/1000-thermosteel-flip-lid-1000-1-ctmsfis133stpc0001-milton-original-imagcqzgph9ysuyk.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">&nbsp;&nbsp;&nbsp;Flask</button>
            <br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>399</a><br>
      <a class="text-center text-black-50" href="#">Cell & More</a>
       </div> </div>
       <div class="row">
      <div class="col 1">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kgb5rbk0/plier/9/a/p/6-150mm-wire-stripper-cutter-wire-cutter-buku-original-imafwk6yfzkgzag8.jpeg?"></div>
      <button class="btn btn-inline-primary" style="text-center">&nbsp;&nbsp;&nbsp;Pliers</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>99</a><br>
      <a class="text-center text-black-50" href="#">Best Selling Range</a>
    </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kzx1a4w0/faucet/9/9/k/single-handle-installation-type-360-degree-rotating-water-saving-original-imagbthetzcaahag.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Fauctes</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>99</a><br>
      <a class="text-center text-black-50" href="#">Best Selling Range</a>
  </div></div>
    <div class="row">
     <div class="col">
 
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/k5lcvbk0/cleaning-glove/n/c/x/te-012-trend-original-imafnxfrypzfdagx.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Cleaning Gloves</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>39</a><br>
      <a class="text-center text-black-50" href="#">Scotch Brite & More</a>
  </div></div>
    <div class="row">
 <div class="col">
    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kz3118w0/bottle/x/x/y/1000-crystal-clear-water-bottle-for-fridge-for-home-office-gym-original-imagb6fkk3rk3n5c.jpeg?"></div>
    <button class="btn btn-inline-primary text-center">Water Bottles</button><br>
      <a class="text-center text-success"  href="#"style="margin-left:18px;">From&nbsp;<span>&#8377;</span>119</a><br>
      <a class="text-center text-black-50" href="#">Cello & More</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/ka492fk0/lunch-box/v/g/y/set-of-3-klip-n-store-microwavable-containers-with-lunch-bag-original-imafrrbpkgyfzxmx.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">Lunch Boxes</button><br>
     <a class="text-center text-success"  href="#" style="margin-left:18px;">From&nbsp;<span>&#8377;</span>119</a><br>
      <a class="text-center text-black-50" href="#">Borosil,Milton & More</a>
  </div></div>
    <div class="row">
     <div class="col">

    <div class="d-flex align-items-center p-1" style="height: 200px; width: 200px; ">
      <img class="text-center" src="https://rukminim2.flixcart.com/image/150/150/kkbh8cw0/power-drill/8/v/n/2-in-1-fan-bearing-puller-heavy-lever-tool-type-6200-6201-14-cm-original-imafzzw59awdzeda.jpeg?"></div>
     <button class="btn btn-inline-primary text-center">PowerDill</button><br>
      <a class="text-center text-success"  href="#" style="margin-left:18px;">Under&nbsp;<span>&#8377;</span>200</a><br>
      <a class="text-center text-black-50" href="#">Best Selling Range</a>
  </div>
</div>
  </div>

</div>
<!-- prodcut list-->
<div class="container-fluid" style="min-width: 978px; border-top: 1px solid #ddd;margin-top: 25px;">
  <div class="row" >
    <div class="col-md-12">
          </div>
        </div>
     <div class="row" >
    <div class="col-md-12">
          </div>
   </div>
   <div class="row" >
<div class="col-md-12" style="width:20px; height:40px ;">
  <span class="text-muted ">Top stories :</span>
  <a class="col-md-12 text-dark "  href="#">Brand Director</a>
  </div>
   </div>
   <div class="row"  >
    <div class="col-xl-12  ">
    <span class="text-muted ">SEARCHED FOR ON FLIPKART :</span>
    <a class="text-muted" style="font-size: 12px" href="#"> Oppo A16k |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Vivo Y33T |</a>
     <a class="text-muted" style="font-size: 12px" href="#">OPPO Reno7 5G |</a>
      <a class="text-muted" style="font-size: 12px" href="#">OPPO Reno7 Pro 5G |</a>
       <a class="text-muted"style="font-size: 12px" href="#">iPhone 13 |</a>
     <a class="text-muted" style="font-size: 12px" href="#">iPhone 13 Pro Max |</a>
      <a class="text-muted" style="font-size: 12px" href="#">iPhone 13 Mini |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Flipkart Quick |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Books |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Flipkart Help Centre |</a>
          <a class="text-muted" style="font-size: 12px" href="#">Flipkart Track Orders |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Flipkart Manage Orders |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Flipkart Return Orders |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Flipkart Gift Cards Store |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Flipkart Axix Bank Credit Card |</a>
               <a class="text-muted" style="font-size: 12px" href="#">Flipkart Pay Later</a>
     </div>
   </div>
   <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted">MOBILES :</span>
    <a class="text-muted" style="font-size: 12px" href="#">iPone 12 64GB |</a>
    <a class="text-muted" style="font-size: 12px" href="#">iPhone 12 Pro 512GB |</a>
     <a class="text-muted" style="font-size: 12px" href="#">iPhone 12 128GB |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Vivo Y91i |</a>
       <a class="text-muted" style="font-size: 12px" href="#"> Vivo Y11 |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Vivo Y11 |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Vivo Y15 |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Vivo Y50 |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Vivo Y12 |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Reno2 F |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Oppo A12 |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Oppo F15 |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Oppo A31 |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Samsung A71 |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Samsung A51  |</a>
               <a class="text-muted" style="font-size: 12px"  href="#">Samsung A31 |</a>
                <a class="text-muted" style="font-size: 12px" href="#">Realme X2 |</a>
                  <a class="text-muted" style="font-size: 12px"  href="#">iPhone 11 |</a>
               <a class="text-muted" style="font-size: 12px" href="#">iPhone 11 Pro |</a>   
                  <a class="text-muted" style="font-size: 12px" href="#">iPhone 11 Pro Max |</a>  
                     <a class="text-muted" style="font-size: 12px" href="#">Mobile Offers |</a>
                 <a class="text-muted" style="font-size: 12px" href="#">iPhone x |</a>
                  <a class="text-muted" style="font-size: 12px" href="#">4G Mobile |</a>
                   <a class="text-muted" style="font-size: 12px" href="#">Nokia Mobile |</a>
                    <a class="text-muted" style="font-size: 12px" href="#">Samsung Mobile |</a> 
                     <a class="text-muted" style="font-size: 12px" href="#">iPhone |</a> 
                      <a class="text-muted" style="font-size: 12px" href="#">Oppo Mobile |</a> 
                       <a class="text-muted" style="font-size: 12px" href="#">Vivo Mobile </a>       
       </div>
     </div>
    <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted">CAMERA :</span>
    <a class="text-muted" style="font-size: 12px" href="#">GoPro Action Camera |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Nikon Camera |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Canon Camera |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Sony Camera |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Canon DSLR |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Nikon DSLR </a>
      </div>
      </div>
     <div class="row"  >
    <div class="col-md-12 ">
    <span class="text-muted">LAPTOPS :</span>
    <a class="text-muted" style="font-size: 12px" href="#">Microsoft Surface Go Pentium Gold 64GB |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Microsoft Surface Go Pentium Gold 128GB |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Branded Laptops |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Apple Laptops |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Acer Laptops |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Lenovo Laptops |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Dell Laptops |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Asus Laptops |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Gaming Laptops |</a>
         <a class="text-muted" style="font-size: 12px" href="#">2 in i Laptops |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Business Laptops</a>
            </div>
            </div>
<div class="row"  >
    <div class="col-md-12">
    <span class="text-muted ">TVS :</span>
    <a class="text-muted" style="font-size: 12px" href="#"> Nokia TV |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Panasonic TV |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Thomson TV |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Vu TV |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Realme TV |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Motorola TV |</a>
      <a class="text-muted" style="font-size: 12px" href="#">OnePlus TV |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">LG TV |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Sony TV |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Samsung TV |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Android Television |</a>
           <a class="text-muted" style="font-size: 12px" href="#">IffaIcon TV |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Mi TV </a>
             </div>
  </div>
  <div class="row"  >
    <div class="col-md-12 ">
    <span class="text-muted ">LARGE APPLIANCES :</span>
    <a class="text-muted" style="font-size: 12px" href="#"> Washing Machines |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Refrigerators |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Air Conditioners |</a>
      <a class="text-muted" style="font-size: 12px" href="#"> Electric Cookers |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Electric Jug(Heater)/Travel Kettles |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Induction Cooktops |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Inverters/ Stabilizer |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Irons / Iron Box |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Mixer Grinder Juicer |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Wet Grinders |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Chimneys |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Microwave Ovens |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Vacuum Cleaners |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Water Purifier |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Fan  </a>
            </div>
</div>

 <div class="row"  >
    <div class="col-md-12 ">
    <span class="text-muted ">CLOTHING :</span>
    <a class="text-muted" style="font-size: 12px" href="#"> Men Shirts |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Kurta Pajama |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Kurtas |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Men T-Shirts |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Jeans |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Saree |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Dresses |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Kid Dresses |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Designer Salwar Suits |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Bra |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Designer Kurtis |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Track Pant |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Men Kurtas |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Gym Wear |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Party Dresses |</a>
               <a class="text-muted" style="font-size: 12px"  href="#">Palazzo Suits |</a>
                <a class="text-muted" style="font-size: 12px" href="#">Boys Clothing |</a>
                  <a class="text-muted" style="font-size: 12px"  href="#">Gloves |</a>
               <a class="text-muted" style="font-size: 12px" href="#">Nighty |</a>  
                  <a class="text-muted" style="font-size: 12px" href="#">maxi Dresses |</a>
                     <a class="text-muted" style="font-size: 12px" href="#">Anarkali |</a>
                 <a class="text-muted" style="font-size: 12px" href="#">Gowns |</a>
                  <a class="text-muted" style="font-size: 12px" href="#">Culottes |</a>
                   <a class="text-muted" style="font-size: 12px" href="#">Salwar Suits |</a>
                    <a class="text-muted" style="font-size: 12px" href="#">Kurtis |</a> 
                     <a class="text-muted" style="font-size: 12px" href="#">Designer Sarees |</a> 
                      <a class="text-muted" style="font-size: 12px" href="#">Leggings |</a> 
                       <a class="text-muted" style="font-size: 12px" href="#"> Shorts | </a>
                        <a class="text-muted" style="font-size: 12px" href="#">Georgette Sarees |</a> 
                     <a class="text-muted" style="font-size: 12px" href="#">Ethnic Wear |</a> 
                      <a class="text-muted" style="font-size: 12px" href="#">Briefs & Trunks </a> 
                                
       </div> 
       </div>

 <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted ">FOOTWEAR :</span>
    <a class="text-muted" style="font-size: 12px" href="#">Shoes |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Adidas Shoes |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Reebok Shoes |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Nike Shoes |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Puma Shoes |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Boots |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Bata Shoes |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Woodland Shoes |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Skechers Shoes |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Sneakers |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Womens  Boots |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Sports Shoes |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Loafers |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Sandals |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Lotto Sports Shoes |</a>
               <a class="text-muted" style="font-size: 12px"  href="#">Casual Shoes |</a>
                <a class="text-muted" style="font-size: 12px" href="#">Womens Skechers Shoes |</a>
                  <a class="text-muted" style="font-size: 12px"  href="#">Asics Sports Shoes |</a>
               <a class="text-muted" style="font-size: 12px" href="#">Formal Shoes |</a>  
               <a class="text-muted" style="font-size: 12px" href="#">School Shoes </a>  
               </div> 
</div>



 <div class="row"  >
    <div class="col-md-12 ">
    <span class="text-muted">GROCERIES :</span>
    <a class="text-muted" style="font-size: 12px" href="#">PhonePe Grocery Voucher |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Hand Wash |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Soap |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Cashew Nuts |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Sunflower Oil |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Eggs |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Toilet Cleaner |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Harpic Toilet Cleaner |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Dettol Soap |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Mustard Oil |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Biscuits |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Cheese |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Patanjali Atta |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Fortune Oil |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Cheese |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Aashirvaad Atta |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Tea </a>
             </div> 
             </div>

             <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted ">BEST SELLING ON FLIPKART :</span>
    <a class="text-muted" style="font-size: 12px" href="#">Bags |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Samung GalaxyTab S7+ |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Books |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Toys |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Candles |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Helmets |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Wall Clocks |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Baby Food |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Chocolates |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Cycles |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Calculators |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Lipsticks|</a>
            <a class="text-muted" style="font-size: 12px" href="#">Mask |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Fastrack Watches |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Wallets |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Earrings |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Gold Coins | </a>
             <a class="text-muted" style="font-size: 12px" href="#">Handbags</a>
             </div> 
             </div>
             <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted">FURNITURE :</span>
    <a class="text-muted" style="font-size: 12px" href="#">Grand Furniture Sale |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Furniture |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Sofas |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Beds |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Dining sets |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Wardrobes |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Mattresses |</a>
       <a class="text-muted"   style="font-size: 12px" href="#">Tv Units |</a>
        <a class="text-muted" style="font-size: 12px" href="#">Tables |</a>
         <a class="text-muted" style="font-size: 12px" href="#">Chairs |</a>
          <a class="text-muted"  style="font-size: 12px" href="#">Shelves |</a>
           <a class="text-muted" style="font-size: 12px" href="#">Bean Bags|</a>
            <a class="text-muted" style="font-size: 12px" href="#">Office Chairs |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Computer Table |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Office Tables |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Red Sofa |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Wakefit Beds | </a>
             <a class="text-muted" style="font-size: 12px" href="#">White Sofa |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Wakefit Matteress |</a>
             <a class="text-muted" style="font-size: 12px" href="#">Green Sofa |</a>
              <a class="text-muted" style="font-size: 12px" href="#">Black Sofa |</a>
            <a class="text-muted" style="font-size: 12px" href="#">Brown Sofa </a>
           
             </div>
             </div>

                       <div class="row"  >
    <div class="col-md-12">
    <span class="text-muted ">BGMH :</span>
    <a class="text-muted" style="font-size: 12px" href="#">Toys Store |</a>
    <a class="text-muted" style="font-size: 12px" href="#">Books Store |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Musical Instrument Store |</a>
      <a class="text-muted" style="font-size: 12px" href="#">Energy Drinks |</a>
       <a class="text-muted" style="font-size: 12px" href="#">Milk Drink Mixes |</a>
     <a class="text-muted" style="font-size: 12px" href="#">Protein Supplements </a>
      
</div>
          </div>
        </div>

 <!-- document-->  
 <div class="container-fluid" >
  <div class="row" >
    <div class="col-md-12">
          </div>
        </div>
     <div class="row" >
    <div class="col-md-12">
          </div>
   </div>
     <div class="row "   >
    <div class="col-md-12" >
    <span class="text-darkgray p-1">Flipkart: The One-stop Shopping Destination :</span>
    <p class="text-muted p-1" style="font-size:12px; text-align: justify;">
      E-commerce is revolutionizing the way we all shop in India. Why do you want to hop from one store to another in search of the latest phone when you can find it on the Internet in a single click? Not only mobiles. Flipkart houses everything you can possibly imagine, from trending electronics like laptops, tablets, smartphones, and mobile accessories to in-vogue fashion staples like shoes, clothing and lifestyle accessories; from modern furniture like sofa sets, dining tables, and wardrobes to appliances that make your life easy like washing machines, TVs, ACs, mixer grinder juicers and other time-saving kitchen and small appliances; from home furnishings like cushion covers, mattresses and bedsheets to toys and musical instruments, we got them all covered. You name it, and you can stay assured about finding them all here. For those of you with erratic working hours, Flipkart is your best bet. Shop in your PJs, at night or in the wee hours of the morning. This e-commerce never shuts down.<br>
      <br>

     What's more, with our year-round shopping festivals and events, our prices are irresistible. We're sure you'll find yourself picking up more than what you had in mind. If you are wondering why you should shop from Flipkart when there are multiple options available to you, well, the below will answer your question.</p>
   </div></div>
   <div class="row" >
       <div class="col-md-12" >
    <span class="text-darkgray p-1" >Flipkart Plus :</span>
    <p class="text-muted p-1" style="font-size:12px; text-align:justify;">
    A world of limitless possibilities awaits you - Flipkart Plus was kickstarted as a loyalty reward programme for all its regular customers at zero subscription fee. All you need is 500 supercoins to be a part of this service. For every 100 rupees spent on Flipkart order, Plus members earns 4 supercoins & non-plus members earn 2 supercoins. Free delivery, early access during sales and shopping festivals, exchange offers and priority customer service are the top benefits to a Flipkart Plus member. In short, earn more when you shop more!<br>

<br>
What's more, you can even use the Flipkart supercoins for a number of exciting services, like:
<br>
An annual Zomato Gold membership
<br>
An annual Hotstar Premium membership
<br>
6 months Gaana plus subscription
<br>
Rupees 550 instant discount on flights on ixigo
<br>
Check out https://www.flipkart.com/plus/all-offers for the entire list. Terms and conditions apply.</p>
   
 </div>
  </div>
 <div class="row" >
       <div class="col-md-12" >
    <span class="text-darkgray p-1" >No Cost EMI :</span>
    <p class="text-muted p-1" style="font-size:12px; text-align:justify;">
    In an attempt to make high-end products accessible to all, our No Cost EMI plan enables you to shop with us under EMI, without shelling out any processing fee. Applicable on select mobiles, laptops, large and small appliances, furniture, electronics and watches, you can now shop without burning a hole in your pocket. If you've been eyeing a product for a long time, chances are it may be up for a no cost EMI. Take a look ASAP! Terms and conditions apply.</p></div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <span class="text-darkgray p-1" >EMI on Debit Cards :</span>
      <p class="text-muted p-1" style="font-size:12px; text-align:justify">
        Get an instant discount on the phone that you have been eyeing on. Exchange your old mobile for a new one after the Flipkart experts calculate the value of your old phone, provided it is in a working condition without damage to the screen. If a phone is applicable for an exchange offer, you will see the 'Buy with Exchange' option on the product description of the phone. So, be smart, always opt for an exchange wherever possible. Terms and conditions apply.
      </p>
      </div>
    </div>
<div class="row">
  <div class="col-md-12">
    <span class="text-darkgray p-1">What Can You Buy From Flipkart?</span><br>
    <span class="text-darkgray p-1">Mobile Phones</span>
    <p class="text-muted p-2" style="font-size:12px; text-align:justify">
    From budget phones to state-of-the-art smartphones, we have a mobile for everybody out there. Whether you're looking for larger, fuller screens, power-packed batteries, blazing-fast processors, beautification apps, high-tech selfie cameras or just large internal space, we take care of all the essentials. Shop from top brands in the country like Samsung, Apple, Oppo, Xiaomi, Realme, Vivo, and Honor to name a few. Rest assured, you're buying from only the most reliable names in the market. What's more, with Flipkart's Complete Mobile Protection Plan, you will never again find the need to run around service centres. This plan entails you to a number of post-purchase solutions, starting at as low as Rupees 99 only! Broken screens, liquid damage to phone, hardware and software glitches, and replacements - the Flipkart Complete Mobile Protection covers a comprehensive range of post-purchase problems, with door-to-door services.</p>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Electronic Devices and Accessories</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
 When it comes to laptops, we are not far behind. Filter among dozens of super-fast operating systems, hard disk capacity, RAM, lifestyle, screen size and many other criterias for personalized results in a flash. All you students out there, confused about what laptop to get? Our Back To College Store segregates laptops purpose wise (gaming, browsing and research, project work, entertainment, design, multitasking) with recommendations from top brands and industry experts, facilitating a shopping experience that is quicker and simpler.
 <br>
<br>
Photography lovers, you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever reliable point-and-shoot cameras, millennial favourite instant cameras or action cameras for adventure junkies: our range of cameras is as much for beginners as it is for professionals. Canon, Nikon, GoPro, Sony, and Fujifilm are some big names you'll find in our store. Photography lovers, you couldn't land at a better page than ours. Cutting-edge DSLR cameras, ever reliable point-and-shoot cameras, millennial favourite instant cameras or action cameras for adventure junkies: our range of cameras is as much for beginners as it is for professionals. Canon, Nikon, GoPro, Sony, and Fujifilm are some big names you'll find in our store.
<br>
<br>
Turn your home into a theatre with a stunning surround sound system. Choose from our elaborate range of Sony home theatres, JBL soundbars and Philips tower speakers for an experience to remember.
<br>
<br>
How about jazzing up your phone with our quirky designer cases and covers? Our wide-ranging mobile accessories starting from headphones, power banks, memory cards, mobile chargers, to selfie sticks can prove to be ideal travel companions for you and your phone; never again worry about running out of charge or memory on your next vacation. 
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Large Appliances</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
Sleek TVs, power-saving refrigerators, rapid-cooling ACs, resourceful washing machines - discover everything you need to run a house under one roof. Our Dependable TV and Appliance Store ensures zero transit damage, with a replacement guarantee if anything goes wrong; delivery and installation as per your convenience and a double warranty (Official Brand Warranty along with an extended Flipkart Warranty) - rest assured, value for money is what is promised and delivered. Shop from market leaders in the country like Samsung, LG, Whirlpool, Midea, Mi, Vu, Panasonic, Godrej, Sony, Daikin, and Hitachi among many others.</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Small Home Appliances</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
  Find handy and practical home appliances designed to make your life simpler: electric kettles, OTGs, microwave ovens, sandwich makers, hand blenders, coffee makers, and many more other time-saving appliances that are truly crafted for a quicker lifestyle. Live life king size with these appliances at home.
</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Lifestyle</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
  Flipkart, 'India ka Fashion Capital', is your one-stop fashion destination for anything and everything you need to look good. Our exhaustive range of Western and Indian wear, summer and winter clothing, formal and casual footwear, bridal and artificial jewellery, long-lasting make-up, grooming tools and accessories are sure to sweep you off your feet. Shop from crowd favourites like Vero Moda, Forever 21, Only, Arrow, Woodland, Nike, Puma, Revlon, Mac, and Sephora among dozens of other top-of-the-ladder names. From summer staple maxi dresses, no-nonsense cigarette pants, traditional Bandhani kurtis to street-smart biker jackets, you can rely on us for a wardrobe that is up to date. Explore our in-house brands like Metronaut, Anmi, and Denizen, to name a few, for carefully curated designs that are the talk of the town. Get ready to be spoiled for choice.Festivals, office get-togethers, weddings, brunches, or nightwear - Flipkart will have your back each time.
</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Home and Furniture</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
  Moving to a new place is never easy, especially if you're buying new furniture. Beds, sofa sets, dining tables, wardrobes, and TV units - it's not easy to set up everything again. With the hundreds of options thrown at you, the ride could be overwhelming. What place is reliable, what furniture will stand the test of time? These are questions you must ask before you choose a store. Well, our Durability Certified Furniture Store has not only curated a range of furniture keeping in mind the modern Indian consumer but furniture that comes with a lab certification, ensuring they last you for up to 10 years. Yes, all our furniture has gone through 35 stability and load tests so that you receive only the best-quality furniture. Be FurniSure, always. Names to look out for are Nilkamal, Godrej Interio, Urban Ladder, HomeTown, Durian and Perfect Homes.<br>

You may have your furniture all set up, but they could end up looking flat and incomplete without complementary decor. Curtains, cushion covers, bed sheets, wall shelves, paintings, floor lamps - find everything that turns a house to an inviting home under one roof at Flipkart.</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Baby and Kids</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
Your kids deserve only the best. From bodysuits, booties, diapers to strollers, if you're an expecting mother or a new mother, you will find everything you need to set sail on a smooth parenting journey with the help of our baby care collection. When it comes to safety, hygiene and comfort, you can rely on us without a second thought. Huggies, Pampers, MamyPoko, and Johnson & Johnson: we host only the most-trusted names in the business for your baby.</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Books, Sports and Games</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
Work hard and no play? We don't believe in that. Get access to best-selling fiction and non-fiction books by your favourite authors, thrilling English and Indian blockbusters, most-wanted gaming consoles, and a tempting range of fitness and sports gadgets and equipment bound to inspire you to get moving.</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
<span class="text-darkgray p-1">Grocery/Supermart</span>
<p class="text-muted p-1" style="font-size:12px; text-align:justify">
Launching into the grocery vertical, Flipkart introduces Supermart that is out to bring everyday essentials close to you. From pulses, spices, dairy, personal and sanitary care, breakfast essentials, health drinks, spreads, ready to cook, grooming to cleaning agents, we are happy to present everything you need to run a house. Now buy Grocery products for as low as 1 Rupee only - our 1 Rupee Store presents new products every day for a nominal price of 1 Rupee only. Terms and conditions apply.</p>
</div>
</div>
</div>
<!-- Footer Start -->
  <div class="footer" >
            <div class="container-fluid " style=" position: relative; padding-top: 30px; background:#212121; height: 200%; ">
                <div class="row">
                   
                    <!--Footer About-->
                    <div class="col-md-2 ">
                      <div class="footer-links">
                            <span class="text-muted">ABOUT</span><br>
                            <a class="text-light" href="" style="font-size:12px;" >Contact Us</a><br>
                            <a class="text-light" href=""  style="font-size:12px;" >About Us</a><br>
                            <a  class="text-light"href="" style="font-size:12px;">Careers</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Flipkart Stories</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Press</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Flipkart Wholesale</a><br>
                            <a class="text-light"href="" style="font-size:12px;" >corporate Information</a>
                        </div>
                          </div>
                        <!----help-->  
                        <div class="col-md-2">
                          <div class="footer-links">
                            <span class="text-muted">HELP</span><br>
                            <a class="text-light" href="" style="font-size:12px;">Payments</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Shipping</a><br>
                            <a  class="text-light"href="" style="font-size:12px;">Cancelleation & Return</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >FAQ</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Report Infringement</a>
                        </div>
                        </div>
                        <!----policy--> 
                                 <div class="col-md-2">
                                  <div class="footer-links">
                            <span class="text-muted">POLICY</span><br>
                           <a class="text-light" href="" style="font-size:12px;" >Return Policy</a><br>
                            <a class="text-light" href=""  style="font-size:12px;" >Terms Of Use</a><br>
                            <a  class="text-light"href="" style="font-size:12px;">Security</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Privacy</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Sitemap</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >EPR Compliance</a><br>
                            
                        </div>
                         </div>
                         <!----social-->
                                 <div class="col-md-1 ">
                                  <div class="footer-links">
                            <span class="text-muted">SOCIAL</span><br>
                            <a  class="text-light"href="" style="font-size:12px;">Facebook</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >Twitter</a><br>
                            <a class="text-light" href="" style="font-size:12px;" >YouTube</a>
                                                 
                        </div>
                                 </div>
                                   <!----Mailus-->
                                 <div class="col-md-2">
                                  <div class="footer-links">
                            <span class="text-muted">Mail Us:</span><br>
                           <span class="text-light" href="" style="font-size:12px;" >Flipkart Internet Private Limited,</span><br>
                            <span class="text-light" href=""  style="font-size:12px;" >Buildings Alyssa,Begonia &</span><br>
                            <span  class="text-light"href="" style="font-size:12px;">Clove Embassy Tech Village,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Outer Ring Road,Devarabeesanahalli Village,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Bengaluru,560103,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Karnataka,India</span><br>
                            
                        </div>
                                 </div>
                                  <!----register-->
                                 <div class="col-md-3">
                                  <div class="footer-links">
                            <span class="text-muted">Registered Office Address:</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Flipkart Internet Private Limited,</span><br>
                            <span class="text-light" href=""  style="font-size:12px;" >Buildings Alyssa, Begonia &</span><br>
                            <span  class="text-light"href="" style="font-size:12px;">Clove Embassy Tech Village,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Outer Ring Road, Devarabeesanahalli Village,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Bengaluru, 560103,</span><br>
                            <span class="text-light" href="" style="font-size:12px;" >Karnataka, India</span><br>
                            <span class="text-light"href="" style="font-size:12px;" >CIN : U51109KA2012PTC066107</span><br>
                             <span class="text-light"href="" style="font-size:12px;" >Telephone: 1800 202 9898</span>
                        </div>
                                 </div>
                               </div>
                             </div>

     <!-- copyright -->  
      <div class="copyright">
                <div class="container-fluid" style=" position: relative; padding-top: 30px; background:#212121;">
                    <div class="row align-items-center">
                        
                      <!--Copy Right-->

                    <div class="col-md-2">
                        <img class="text-center" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDE2IDE1Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjAlIiB4Mj0iODYuODc2JSIgeTE9IjAlIiB5Mj0iODAuMjAyJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkQ4MDAiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjRkZBRjAwIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTS0yLTJoMjB2MjBILTJ6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0idXJsKCNhKSIgZmlsbC1ydWxlPSJub256ZXJvIiBkPSJNMTUuOTMgNS42MTRoLTIuOTQ4VjQuMTRjMC0uODE4LS42NTUtMS40NzMtMS40NzMtMS40NzNIOC41NmMtLjgxNyAwLTEuNDczLjY1NS0xLjQ3MyAxLjQ3M3YxLjQ3NEg0LjE0Yy0uODE4IDAtMS40NjYuNjU2LTEuNDY2IDEuNDc0bC0uMDA3IDguMTA1YzAgLjgxOC42NTUgMS40NzQgMS40NzMgMS40NzRoMTEuNzljLjgxOCAwIDEuNDc0LS42NTYgMS40NzQtMS40NzRWNy4wODhjMC0uODE4LS42NTYtMS40NzQtMS40NzQtMS40NzR6bS00LjQyMSAwSDguNTZWNC4xNGgyLjk0OHYxLjQ3NHoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0yIC0yKSIvPgogICAgPC9nPgo8L3N2Zz4K">
                        <span class="text-light" style="font-size: 12px;">Sell On Flipkart</span>
                        </div>
                        <div class="col-md-2">
                            <img class="text-center" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDE1IDE1Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjAlIiB4Mj0iODYuODc2JSIgeTE9IjAlIiB5Mj0iODAuMjAyJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkQ4MDAiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjRkZBRjAwIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTS0zLTNoMjB2MjBILTN6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0idXJsKCNhKSIgZmlsbC1ydWxlPSJub256ZXJvIiBkPSJNMTAuNDkyIDNDNi4zNTMgMyAzIDYuMzYgMyAxMC41YzAgNC4xNCAzLjM1MyA3LjUgNy40OTIgNy41QzE0LjY0IDE4IDE4IDE0LjY0IDE4IDEwLjUgMTggNi4zNiAxNC42NCAzIDEwLjQ5MiAzem0zLjE4IDEyTDEwLjUgMTMuMDg4IDcuMzI3IDE1bC44NC0zLjYwN0w1LjM3IDguOTdsMy42OS0uMzE1TDEwLjUgNS4yNWwxLjQ0IDMuMzk4IDMuNjkuMzE1LTIuNzk4IDIuNDIyLjg0IDMuNjE1eiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMgLTMpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=">
                            <span class="text-light" style="font-size: 12px;">Advertise</span>
                        </div>
                        <div class="col-md-2">
                            <img class="text-center" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOCIgaGVpZ2h0PSIxNyIgdmlld0JveD0iMCAwIDE4IDE3Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjAlIiB4Mj0iODYuODc2JSIgeTE9IjAlIiB5Mj0iODAuMjAyJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkQ4MDAiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjRkZBRjAwIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTS0xLTFoMjB2MjBILTF6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0idXJsKCNhKSIgZmlsbC1ydWxlPSJub256ZXJvIiBkPSJNMTYuNjY3IDVIMTQuODVjLjA5Mi0uMjU4LjE1LS41NDIuMTUtLjgzM2EyLjQ5NyAyLjQ5NyAwIDAgMC00LjU4My0xLjM3NUwxMCAzLjM1bC0uNDE3LS41NjdBMi41MSAyLjUxIDAgMCAwIDcuNSAxLjY2N2EyLjQ5NyAyLjQ5NyAwIDAgMC0yLjUgMi41YzAgLjI5MS4wNTguNTc1LjE1LjgzM0gzLjMzM2MtLjkyNSAwLTEuNjU4Ljc0Mi0xLjY1OCAxLjY2N2wtLjAwOCA5LjE2NkExLjY2IDEuNjYgMCAwIDAgMy4zMzMgMTcuNWgxMy4zMzRhMS42NiAxLjY2IDAgMCAwIDEuNjY2LTEuNjY3VjYuNjY3QTEuNjYgMS42NiAwIDAgMCAxNi42NjcgNXptMCA2LjY2N0gzLjMzM3YtNWg0LjIzNEw1LjgzMyA5LjAyNWwxLjM1Ljk3NSAxLjk4NC0yLjdMMTAgNi4xNjdsLjgzMyAxLjEzMyAxLjk4NCAyLjcgMS4zNS0uOTc1LTEuNzM0LTIuMzU4aDQuMjM0djV6IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtMSAtMSkiLz4KICAgIDwvZz4KPC9zdmc+Cg==">
                            <span class="text-light" style="font-size: 12px;">Gift Cards</span>
                        </div>
<div class="col-md-2">
                            <img class="text-center" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNSIgdmlld0JveD0iMCAwIDE1IDE1Ij4KICAgIDxkZWZzPgogICAgICAgIDxsaW5lYXJHcmFkaWVudCBpZD0iYSIgeDE9IjAlIiB4Mj0iODYuODc2JSIgeTE9IjAlIiB5Mj0iODAuMjAyJSI+CiAgICAgICAgICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiNGRkQ4MDAiLz4KICAgICAgICAgICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjRkZBRjAwIi8+CiAgICAgICAgPC9saW5lYXJHcmFkaWVudD4KICAgIDwvZGVmcz4KICAgIDxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPHBhdGggZD0iTS0yLTNoMjB2MjBILTJ6Ii8+CiAgICAgICAgPHBhdGggZmlsbD0idXJsKCNhKSIgZmlsbC1ydWxlPSJub256ZXJvIiBkPSJNOS41IDNDNS4zNiAzIDIgNi4zNiAyIDEwLjUgMiAxNC42NCA1LjM2IDE4IDkuNSAxOGM0LjE0IDAgNy41LTMuMzYgNy41LTcuNUMxNyA2LjM2IDEzLjY0IDMgOS41IDN6bS43NSAxMi43NWgtMS41di0xLjVoMS41djEuNXptMS41NTMtNS44MTNsLS42NzYuNjljLS41NC41NDgtLjg3Ny45OTgtLjg3NyAyLjEyM2gtMS41di0uMzc1YzAtLjgyNS4zMzgtMS41NzUuODc3LTIuMTIzbC45My0uOTQ1Yy4yNzgtLjI3LjQ0My0uNjQ1LjQ0My0xLjA1NyAwLS44MjUtLjY3NS0xLjUtMS41LTEuNVM4IDcuNDI1IDggOC4yNUg2LjVhMyAzIDAgMSAxIDYgMGMwIC42Ni0uMjcgMS4yNi0uNjk3IDEuNjg4eiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTIgLTMpIi8+CiAgICA8L2c+Cjwvc3ZnPgo=">
                            <span class="text-light" style="font-size: 12px;">Help Center</span>
                        </div>
<div class="col-md-2">
                           <span class="text-light" style="font-size: 12px;">© 2007-2022 Flipkart.com</span>
                        </div>
                        <div class="col-md-2">
                            <img class="text-center" src="\image\mastercard.png" style="height:40px ; width:30px" >
                            <img class="text-center" src="\image\solo.png" style="height:40px ; width:30px" >
                            <img class="text-center" src="\image\paypal.png" style="height:40px ; width:30px" >
                            <img class="text-center" src="\image\westernunion.png" style="height:40px ; width:30px" >
                            <img class="text-center" src="\image\egold.png" style="height:40px ; width:30px" >

                   </div>



            </div>
                </div>
            </div>
        </div>                      

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</head>
</html>