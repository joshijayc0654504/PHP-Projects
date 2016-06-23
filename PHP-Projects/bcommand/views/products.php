<?php 

//$this->load->Model('product_model');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url()?>/img/flowercat.png" type="image/png" sizes="16x16">
<link href="/css/lightbox.css" rel="stylesheet">
<script src="/js/lightbox.js"></script>
<style>

.flowers {
    float: left;
    margin: 5px;
    padding: 15px;
    width: 300px;
    height: 300px;
    border: 1px solid black;
} 
.picture {
  margin-left:200px;
  margin-right:350px;
  position:absolute;
  padding:0px;
  text-align:center;
  border:4px solid #CCC;
  border-radius:25px;
  font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
  font-size:14px;
  padding-bottom:20px;
  display:block;
  
  }
  .img{
    
    border-image:round 1px;
    /*padding-right:50px;*/
    border-radius:25px;
    float: left;
    }
    
.data {
    -webkit-column-count: 2; /* Chrome, Safari, Opera */
    -moz-column-count: 2; /* Firefox */
    column-count: 2;
  
  -webkit-column-gap: 40px; /* Chrome, Safari, Opera */
    -moz-column-gap: 40px; /* Firefox */
    column-gap: 40px;
}

.data p{
  font-size:18px;
  
  }
  
  .font{
    font-family: 'Kaushan Script', cursive;
    
    }


.col1{
  background-color: #A0522D ;
   border:hidden;
    color:white;
}
.colo1{
      background-color:#CD853F;
      border:hidden;
       color:white;
}

.col2{
    background-color: #DC7633;
    border:hidden;
    color:white;
}
.colo2{
    background-color:#EB984E;
    border:hidden;
     color:white;

}


.col3{
    background-color: #2980B9;
    border:hidden;
    color:white;
}
.colo3{
    background-color:#3498DB;
    border:hidden;
     color:white;

}




</style>




<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" />  
<link rel="stylesheet" href="css/orange.css" />
<!-- REVOLUTION BANNER CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
<link rel="stylesheet" type="text/css" href="rs-plugin/css/revolution.css" media="screen" />
<link rel="stylesheet" href="style-switcher/styleSwitcher.css" media="screen" />
<link rel="stylesheet" href="css/jquery.bxslider.css">

<!--bootstrap for responsive-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        


        

<title>Bloom Command - Smart Online Support</title>
</head>

<body>

 <!-- style switcher start -->
       <div class="container">
     <center>
        <a href="<?php echo base_url().'index.php/welcome/index' ?>">
                        <img src="<?php base_url()?>/img/logo.png" class="img-responsive" alt="logo" width="" />
                    </a>
           </center><br />
<!--<pre>-->

        <div  style="border:#CCC 4px solid;border-radius:25px;padding:20px;">
            <h4 align="center"><b>Product Details</b></h4>
    <hr />


<?php 
      
      foreach($products as $row){
        
      }
        ?>

 <ul class="nav nav-tabs responsive" id="myTab">
  <li class="active"><a href="#standard" data-toggle="tab">Standard</a></li>
  <li><a href="#deluxe" data-toggle="tab">Deluxe</a></li>
  <li><a href="#premuim" data-toggle="tab">Premuim</a></li>
</ul>
 
<div class="tab-content responsive">
  <div class="tab-pane active responsive" id="standard">

    <?php 
      
        
          if($row>0){
        
      ?>

        <center>
                      <?php echo "<br><h4><b>Product Name: </b>".$row->product_name."</h4>";?>

                      <?php echo "<h4><b>Product Code:</b>".$row->product_code."</h4><br>";?>
                       
                       <?php
                            foreach($picture1 as $pic1){

                        }
                      if($pic1->option_picture=='' && $pic1->price_val =='X')
                        {?>
                          <a href="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture;?>"><img src ="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>" alt="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>"  class="img-rounded img-responsive"  /></a>
                  <?php }

                        elseif($pic1->price_val !='X'){
                        echo'<span class="bg-danger text-danger" style="padding:20px;">No Standard Product Found</span>';

                      }
                        else{
                  ?>
                      
                     <a href="<?php echo $pic1->website_address;?>/productres/<?php echo $pic1->option_picture;?>"><img src ="<?php echo $pic1->website_address;?>/productres/<?php echo $pic1->option_picture ;?>" alt="No Picture"  class="img-rounded img-responsive"  /></a>
                     <?php
                       }?>
                     </center>

               <br><br>

              <div class="table-responsive">
              <table class="table" style="font-size:16px;">

            <thead class="responsive">
            <?php if($pic1->price_val !=''){?>
              <th class="colo3 responsive"><center>Qty</center></th>
              <th class="col3 responsive"><center>Item</center></th>
              
              <?php }
             else
              {?>
                 <th style="align:right;" class="bg-danger text-danger"><center>No Standard Recipe Found</center></th>
                           
              <?php }?>
            </thead>
              <tbody class="responsive">
              
                  
                      
                    <?php 
                      foreach($prod1 as $rows) :
                      ?>
                    <tr>  
                    <td style="margin-right:20px;" class="colo3 responsive"><center><?php echo $rows->quantity;?></center></td>

                    <?php $item = strtoupper($rows->item_name);?>
                    <td class="col3 responsive"><center><?php echo $item;?></center></td>
                    </tr> 
                    <?php endforeach; ?>
              </tbody>

          </table>
        </div>


          <?php 
          }
          else
          {
            
              echo'<br><br><center><span class="bg-danger text-danger" style="padding:20px;font-size:16px;">No Standard Product Found</span></center><br>';

          }
  
        ?>
  

  </div>
  <div class="tab-pane responsive" id="deluxe">

      <?php 
        
        
        if($row>0){
      ?>
                      <center>
                      <?php echo "<br><h4><b>Product Name: </b>".$row->product_name."</h4>";?>

                      <?php echo "<h4><b>Product Code:</b>".$row->product_code."</h4><br>";?>
                       
                       <?php
                            foreach($picture2 as $pic2){

                        }
                      if($pic2->option_picture =='' && $pic2->price_val =='XX')
                        {?>

                      <a href="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture;?>"><img src ="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>" alt="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>" class="img-rounded img-responsive"  /></a>
                        
                          
                  <?php }
                      elseif($pic2->price_val !='XX'){
                        echo'<span class="bg-danger text-danger" style="padding:20px;">No Deluxe Product Found</span>';

                      }
                        else{
                  ?>
                            <a href="<?php echo $pic2->website_address;?>/productres/<?php echo $pic2->option_picture;?>"><img src ="<?php echo $pic2->website_address;?>/productres/<?php echo $pic2->option_picture ;?>" alt="No Picture" class="img-rounded img-responsive"  /></a>
                     
                     <?php
                       }?>
                     </center>

               <br><br>

              <div class="table-responsive">
              <table class="table" style="font-size:16px;">

            <thead class="responsive">
             <?php if($pic2->price_val =='XX'){?>
              <th class="colo3 responsive"><center>Qty</center></th>
              <th class="col3 responsive"><center>Item</center></th>
              
              <?php }
             else
              {?>
                 <th style="align:right;" class="bg-danger text-danger"><center>No Deluxe Recipe Found</center></th>
                           
              <?php }?>

            </thead>
              <tbody class="responsive">
              
                  
                      
                    <?php 
                      foreach($prod2 as $rec2) :
                      ?>
                    <tr>  
                    <td style="margin-right:20px;" class="colo3"><center><?php echo $rec2->quantity;?></center></td>

                    <?php $item = strtoupper($rec2->item_name);?>
                    <td class="col3"><center><?php echo $item;?></center></td>
                    </tr> 
                    <?php endforeach; ?>
              </tbody>

          </table>
        </div>


          <?php 
          }
          else
          {
            
              echo'<br><br><center><span class="bg-danger text-danger" style="padding:20px;font-size:16px;">No Deluxe Product Found</span></center><br>';
          }
  
        ?>

  </div>
  <div class="tab-pane responsive" id="premuim">

      <?php 
       
          if($row>0){
      ?>
   
        
        <center>
                      <?php echo "<br><h4><b>Product Name: </b>".$row->product_name."</h4>";?>

                      <?php echo "<h4><b>Product Code:</b>".$row->product_code."</h4><br>";?>
                       
                       <?php
                            foreach($picture3 as $pic3){

                        }
                      if($pic3->option_picture=='' && $pic3->price_val =='XXX')
                        {?>
                          <a href="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture;?>"><img src ="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>" alt="<?php echo $row->website_address;?>/productres/<?php echo $row->product_picture ;?>" class="img-rounded img-responsive"  /></a>
                  <?php }

                      elseif($pic3->price_val !='XXX'){

                        echo'<span class="bg-danger text-danger" style="padding:20px;">No Premium Product Found</span>';

                      }
                        else{
                  ?>
                      
                     <a href="<?php echo $pic3->website_address;?>/productres/<?php echo $pic3->option_picture;?>"><img src ="<?php echo $pic3->website_address;?>/productres/<?php echo $pic3->option_picture ;?>" alt="No Picture" class="img-rounded img-responsive"  /></a>
                     <?php
                       }?>
                     </center>

               <br><br>

              <div class="table-responsive">
              <table class="table" style="font-size:16px;padding:0px;">

            <thead class="responsive">
             
              <?php if($pic3->price_val =='XXX'){?>
              <th class="colo3 responsive"><center>Qty</center></th>
              <th class="col3 responsive"><center>Item</center></th>
              
              <?php }
              else
              {?>
                 <th style="align:right;" class="bg-danger text-danger"><center>No Premium Recipe Found</center></th>
                           
              <?php }?>
              

            </thead>
              <tbody class="responsive">
              
                  
                      
                    <?php 
                      foreach($prod3 as $rec3) :
                      ?>
                    <tr>  
                    <td style="margin-right:20px;" class="colo3"><center><?php echo $rec3->quantity;?></center></td>

                    <?php $item = strtoupper($rec3->item_name);?>
                    <td class="col3"><center><?php echo $item;?></center></td>
                    </tr> 
                    <?php endforeach; ?>
              </tbody>

          </table>
        </div>


          <?php 
          }
          else
          {
            
             echo'<br><br><center><span class="bg-danger text-danger" style="padding:20px;font-size:16px;">No Premium Product Found</span></center><br>';
          }
  
        ?>


  </div>
</div>
 

  
       
  </div>
  
       

<?php
//mysqli_close($conn);

?>
<!--</pre>-->
</div>
  </div>
  </center>

<!--image from site-->

<?php /*if(($product->website_id==1 or $product->website_id==3 or $product->website_id==4 or $product->website_id==5 or $product->website_id==7 or $product->website_id==17) and count($product_prices) > 1){?>
                <div style="overflow:hidden">
                  <?php 
                    foreach($product_prices as $price){ 
                    ?>
                      <div style="float:left;">
                        <div class="fileupload-new thumbnail" style="width:110px; margin-bottom:5px; margin-right:5px;">
                          <?php if(empty($price->option_picture)){ ?>
                            <img src="http://www.placehold.it/340x392/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                          <?php }elseif($product->website_server == ''){ ?>
                            <img src="<?php echo base_url(); ?>productres/<?php echo $product->website_folder; ?>/<?php echo $price->option_picture; ?>" />
                          <?php }else{ ?>
                            <img src="<?php echo $product->website_address; ?>/productres/<?php echo $price->option_picture; ?>" />
                          <?php } ?>
                        </div>
                        <div style="text-align: center;">
                          <?php
                          if(strlen($price->price_name) < 16)
                          {
                            echo $price->price_name;
                          }
                          else
                          {
                            $pricename = substr($price->price_name,0,13);
                            echo $pricename."...";
                          }
                          ?>
                        </div>
                      </div>
                  <?php }?>
                </div>
                <?php }*/?>       

<!--image ends-->

  <div class="container" style="padding:40px;">
  <?php
  $this->load->helper('form');
  
  ?>
  
  
  
   <?php echo form_open('/search');?>

   <center> <h3>Search More Product</h3></center><hr />
   
          
              <div class="form-group" align="center">
                 <label for = "productid"><h4><span class="text-color">* </span>Product Code:</h4></label>
                 <input type="text" class="form-control" id="productid" placeholder="Enter Product Code Here..." name="search" required autofocus="autofocus" style="width:45%;height:40px;"/>
                
                  <!--<input type="hidden"  class="form-control" id ="db_id" name = "id2" value ='<?php //echo $row->product_id;?>'/>-->
                
                  <input type="hidden" id = "product_id" name = "id"/>
                </div>
                 <input type="hidden" name="product_id" id="product_code" value="<?php echo $row->product_id;?>"/>
                       <?php echo form_hidden('product_id', '');?>
                       <?php echo form_hidden('db_id', '');?>
                       
                        <center><button name="Search" type="submit" class="btn btn-primary"  style="font-size:14px;width:35%;height:40px;">Submit</button></center>

                   
                    <?php echo form_close();?><br />

       </div>
       


             <?php include_once('menu.php'); ?>
          
            <br /><br /><br />
            
            <!--
            <div style="clear:both;">-->
           
        
        
  <script>
            /* <![CDATA[ */
            /* REVOLUTION SLIDER */
            jQuery(document).ready(function() {
                
                if (jQuery.fn.cssOriginal!==undefined){
                    // CHECK IF fn.css already extended
                    jQuery.fn.css = jQuery.fn.cssOriginal;
                }   
 
                jQuery('.fullwidthbanner').revolution(
                {    
                    delay:5000,                                                
                    startheight:420,                            
                    startwidth:940,
                            
                    hideThumbs:200,
                            
                    thumbWidth:100,                            
                    thumbHeight:50,
                    thumbAmount:5,
                            
                    navigationType:"none",               
                    navigationArrows:"verticalcentered",      
                    navigationStyle:"round",               
                                                        
                    navigationHAlign:"right",             
                    navigationVAlign:"top",                 
                    navigationHOffset:0,
                    navigationVOffset:20,
                            
                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,
                            
                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,
                    touchenabled:"on",                      
                    onHoverStop:"on",                        
                            
                    navOffsetHorizontal:0,
                    navOffsetVertical:20,
                            
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    hideSliderAtLimit:0,
                            
                    stopAtSlide:-1,
                    stopAfterLoops:-1,
                            
                    shadow:1,
                    fullWidth: "on"                                       
                }); 
            });
            
            /* TWEETSCROLL */
            $('.tweets-list-container').tweetscroll({
                username: 'pixel_industry', 
                limit: 20, 
                replies: true, 
                position: 'append',
                animation: 'fade',
                visible_tweets: 2
            });
            /* ]]> */



            $('.responsive').responsiveTabs({

             accordionOn: ['xs', 'sm'] // xs, sm, md, lg
          });

        </script>



    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.smoothdivscroll-1.3-min.js"></script> 
    <script src="js/jquery.mousewheel.min.js"> </script>
    <script src="js/kinetic.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/main.js"></script>
 <script  src="style-switcher/styleSwitcher.js"></script><!-- Style Switcher plugin -->


 
 


 </div>
</body>
</html>