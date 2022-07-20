<?php
$error=[];$message;
require "getDataFromDB.php";
if(isset($_POST['btnSubmit'])){
 //print_r($_POST);
  if(empty($_POST['mobile'])){
    $error[] = "<label class='text-danger'>Enter Mobile Number</label>";
  }if (empty($_POST['name'])) {
    $error[] = "<label class='text-danger'>Enter Name</label>"; 
  }
  if(!empty($_POST['mobile']) && !empty($_POST['name'])){
    $data=[];
    $data['con_mobile'] = $_POST['mobile']; 
    $data['con_name'] = $_POST['name'];
    $res = createContactListCampaign($data);
    if($res == 1){
      $message="Thank you - ".$_POST['name']." will connect sortly!";
    }else{
        $error ="Error!";
    }
  }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#007bff">

<title>Life Insurance</title>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Kufam&display=swap" rel="stylesheet">
<style>
    :root {
    --primary: #F6822B;
}
* { font-family: 'Kufam', cursive; }
h1, h2, h3, h4, h5, h6 { font-family: 'Bangers', cursive; }
h2, h5 { color: var(--primary);}
.container-fluid { min-height: 100vh; }
.card {
    border: 0;
    box-shadow: 0 2px 16px rgba(0, 0, 0, 0.08);
}
.btn-primary {
    background: var(--primary);
    border-color: var(--primary);
}
.btn-primary:hover {
    background: #222222;
    border-color: #222222;
}
</style>
</head>
<body>
<div class="container-fluid d-flex justify-content-center align-items-center">
<div class="container py-4">
<div class="row">
<div class="col-md-6 text-md-center">
<h2>Guarantee your loved ones the future they dream at Affordable Cost.</h2>
<p>Buy Term Insurance Now</p>
<img src="./assets/images/hero.jpg" alt="Life Insurance" class="img-fluid mb-3 mb-md-0">
</div>
<div class="col-md-6">
<div class="card">
 <div class="card-body">
    <!-- <form action="https://lms.mdsmedia.co.in/api/insert" name="myForm" method="POST"> -->
    <!-- <form action="https://mdsmedia.co.in/apis/form-submit.php" name="myForm" method="POST"> -->
    <!-- <form action="apis/form-submit.php" name="myForm" method="POST"> -->
    <form method="POST">
     <div class="form-group">
         <label for="textName">Name:</label>
         <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required onkeypress="return /[a-zA-Z]/i.test(event.key);">
     </div>
     <div class="form-group">
         <label for="telMobile">Mobile No:</label>
         <input type="tel" name="mobile" id="mobile" class="form-control" pattern="[6789][0-9]{9}" placeholder="Enter your mobile no" required onkeypress="return event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57">
     </div>
        
<!-- <input type="hidden" name="Res_City" id="res_city" value=""> -->
<input type="hidden" name="utm_source" id="utm_source" value="">
<input type="hidden" name="utm_medium" id="utm_medium" value="">
<input type="hidden" name="campaign" id="campaign" value=""> 
<input type="hidden" name="affiliate" id="affiliate" value=""> 
<input type="hidden" name="utm_content" id="utm_content" value=""> 


<input type="hidden" id="rdir" name="rdir" value="">

<button type="submit" name="btnSubmit" class="btn btn-primary btn-block">Submit</button>
</form>
<h5>Benefits</h5>
<ul>
<li>Get Life Cover up to age of 99yrs*.</li>
<li>Life Insurance of Rs. Rs.50Lacs-1Crore*.</li>
<li>Accidental Death Benefit*.</li>
<li>Cover against 34 Critical Illnesses*.</li>
</ul>
<h5>Terms & Conditions</h5>
<ul>
<li>Minimum Age - 25 Yrs+</li>
<li>Minimum Income - INR 5Lacs+</li>
</ul>
</div>
</div>
</div>
<div class="col-md-12 text-center py-4">
Copyrights &copy; 2020. All Rights Reserved.
</div>
</div>
</div>
</div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="assets/js/main.js"></script> -->
 
    <script>
        
    </script>    
 
 
 <script type="text/javascript">  
//     var url_string=location.href;
    
//     var url = new URL(url_string);
//     var campaign = url.searchParams.get("campaign");
//     var utm_source = url.searchParams.get("utm_source");
//     var utm_medium = url.searchParams.get("utm_medium");
//     var affiliate = url.searchParams.get("affiliate");
//  var utm_content = url.searchParams.get("utm_content");
 
//  if(campaign)
//  {
//  document.getElementById("campaign").value = campaign;
//  }
//  if(utm_source)
//  {
//  document.getElementById("utm_source").value = utm_source;
//  }
//  if(utm_medium)
//  {
//  document.getElementById("utm_medium").value = utm_medium;
//  }
//  if(affiliate)
//  {
//  document.getElementById("affiliate").value = affiliate;
//  }
//  if(utm_content)
//  {
//  document.getElementById("utm_content").value = utm_content;
//  }
 
// document.getElementById("rdir").value = window.location.protocol + "//" + window.location.host + "" + window.location.pathname+ "thank-you.html?affiliate="+affiliate; 
 </script>
 
 
</body>
</html>