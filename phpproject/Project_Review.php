 <?php include('Project_Header2.php'); 
 echo'
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<script src="rating.js"></script>
<link rel="stylesheet" href="style.css">

<div class="container">  
 <h3>College Review</h3>';
 
 include_once("db_connect.php");
 $ratingDetails = "SELECT ratingNumber FROM item_rating";
 $rateResult = mysqli_query($conn, $ratingDetails) or die("database error:". mysqli_error($conn));
 $ratingNumber = 0;
 $count = 0;
 $fiveStarRating = 0;
 $fourStarRating = 0;
 $threeStarRating = 0;
 $twoStarRating = 0;
 $oneStarRating = 0;
 while($rate = mysqli_fetch_assoc($rateResult)) {
  $ratingNumber+= $rate['ratingNumber'];
  $count += 1;
  if($rate['ratingNumber'] == 5) {
   $fiveStarRating +=1;
  } else if($rate['ratingNumber'] == 4) {
   $fourStarRating +=1;
  } else if($rate['ratingNumber'] == 3) {
   $threeStarRating +=1;
  } else if($rate['ratingNumber'] == 2) {
   $twoStarRating +=1;
  } else if($rate['ratingNumber'] == 1) {
   $oneStarRating +=1;
  }
 }
 $average = 0;
 if($ratingNumber && $count) {
  $average = $ratingNumber/$count;
 } 
echo' 
 <br>  
 <div id="ratingDetails">   
  <div class="row">   
   <div class="col-sm-3">    
    <h4>Rating and Reviews</h4>
    <h2 class="bold padding-bottom-7">'.printf('%.1f', $average).' <small>/ 5</small></h2>  ';  

    $averageRating = round($average, 0);
    for ($i = 1; $i <= 5; $i++) {
     $ratingClass = "btn-default btn-grey";
     if($i <= $averageRating) {
      $ratingClass = "btn-warning";
     }
   echo'
    <button type="button" class="btn btn-sm '.$ratingClass.'" aria-label="Left Align">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
    </button> ';
  }  
echo'  
   </div>
   <div class="col-sm-3">';
    $fiveStarRatingPercent = round(($fiveStarRating/5)*100);
    $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%'; 
    
    $fourStarRatingPercent = round(($fourStarRating/5)*100);
    $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
    
    $threeStarRatingPercent = round(($threeStarRating/5)*100);
    $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
    
    $twoStarRatingPercent = round(($twoStarRating/5)*100);
    $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
    
    $oneStarRatingPercent = round(($oneStarRating/5)*100);
    $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
  echo'
    <div class="pull-left">
     <div class="pull-left" style="width:35px; line-height:1;">
      <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
     </div>
     <div class="pull-left" style="width:180px;">
      <div class="progress" style="height:9px; margin:8px 0;">
        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: '.$fiveStarRatingPercent.'">
       <span class="sr-only">'.$fiveStarRatingPercent.'</span>
        </div>
      </div>
     </div>
     <div class="pull-right" style="margin-left:10px;">'.$fiveStarRatingPercent.'</div>
    </div>
    
    <div class="pull-left">
     <div class="pull-left" style="width:35px; line-height:1;">
      <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
     </div>
     <div class="pull-left" style="width:180px;">
      <div class="progress" style="height:9px; margin:8px 0;">
        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: '.$fourStarRatingPercent.'">
       <span class="sr-only">'.$fourStarRatingPercent.'</span>
        </div>
      </div>
     </div>
     <div class="pull-right" style="margin-left:10px;">'.$fourStarRatingPercent.'</div>
    </div>
    <div class="pull-left">
     <div class="pull-left" style="width:35px; line-height:1;">
      <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
     </div>
     <div class="pull-left" style="width:180px;">
      <div class="progress" style="height:9px; margin:8px 0;">
        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: '.$threeStarRatingPercent.'">
       <span class="sr-only">'.$threeStarRatingPercent.'</span>
        </div>
      </div>
     </div>
     <div class="pull-right" style="margin-left:10px;">'.$threeStarRatingPercent.'</div>
    </div>
    <div class="pull-left">
     <div class="pull-left" style="width:35px; line-height:1;">
      <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
     </div>
     <div class="pull-left" style="width:180px;">
      <div class="progress" style="height:9px; margin:8px 0;">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: '.$twoStarRatingPercent.'">
       <span class="sr-only">'.$twoStarRatingPercent.'</span>
        </div>
      </div>
     </div>
     <div class="pull-right" style="margin-left:10px;">'.$twoStarRatingPercent.'</div>
    </div>
    <div class="pull-left">
     <div class="pull-left" style="width:35px; line-height:1;">
      <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
     </div>
     <div class="pull-left" style="width:180px;">
      <div class="progress" style="height:9px; margin:8px 0;">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: '.$oneStarRatingPercent.'">
       <span class="sr-only">'.$oneStarRatingPercent.'</span>
        </div>
      </div>
     </div>
     <div class="pull-right" style="margin-left:10px;">'.$oneStarRatingPercent.'</div>
    </div>
   </div>  
   <div class="col-sm-3">
    <button type="button" id="rateProduct" class="btn btn-default">Rate this product</button>
   </div>  
  </div>
  <div class="row">
   <div class="col-sm-7">
    <hr/>
    <div class="review-block">  ';
    $ratinguery = "SELECT ratingId, itemId, userId, ratingNumber, title, comments, created, modified FROM item_rating";
    $ratingResult = mysqli_query($conn, $ratinguery) or die("database error:". mysqli_error($conn));
    while($rating = mysqli_fetch_assoc($ratingResult)){
     $date=date_create($rating['created']);
     $reviewDate = date_format($date,"M d, Y");  
echo'     
     <div class="row">
      <div class="col-sm-3">
       <img src="image/profile.png" class="img-rounded">
       <div class="review-block-date">'.$reviewDate.'</div>
      </div>
      <div class="col-sm-9">
       <div class="review-block-rate">';
	   
        for ($i = 1; $i <= 5; $i++) {
         $ratingClass = "btn-default btn-grey";
         if($i <= $rating['ratingNumber']) {
          $ratingClass = "btn-warning";
         }
        echo'
        <button type="button" class="btn btn-xs '.$ratingClass.'" aria-label="Left Align">
          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        </button>        ';} 
		echo'
       </div>
       <div class="review-block-title">'.$rating['title'].'</div>
       <div class="review-block-description">'.$rating['comments'].'</div>
      </div>
     </div>
     <hr/>  ';}
echo'	 
    </div>
   </div>
  </div> 
 </div>
 <div id="ratingSection" style="display:none;">
  <div class="row">
   <div class="col-sm-12">
    <form id="ratingForm" method="POST">     
     <div class="form-group">
      <h4>Rate this product</h4>
      <button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      </button>
      <input type="hidden" class="form-control" id="rating" name="rating" value="1">
      <input type="hidden" class="form-control" id="itemId" name="itemId" value="12345678">
     </div>  
     <div class="form-group">
      <label for="usr">College*</label>
      <input type="text" class="form-control" id="title" name="title" required>
     </div>
     <div class="form-group">
      <label for="comment">Comment*</label>
      <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
     </div>
     <div class="form-group">
      <button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
     </div>   
    </form>
   </div>
  </div>
 </div>    
</div> ';
include('Project_Footer2.html');