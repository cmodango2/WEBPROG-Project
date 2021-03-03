<!DOCTYPE html>
<html>
    <head>  
        <meta charset="UTF-8">
        <title>FAQ</title>
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/ratedHotels.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type = 'text/javascript' src = "<?php echo base_url(); 
                ?>/assets/js/faq.js"></script> 
        <script src="https://unpkg.com/@popperjs/core@2"></script>      
        <script type = 'text/javascript' src = "<?php echo base_url(); 
                ?>/assets/bootstrap/js/bootstrap.js"></script>  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
              
    </head>
    <body>
        <div class="bannerDiv">
            <h1>THE DISASTER RESILIENCE RATING FOR HOTELS</h1>
        </div>

        <div class="subbannerDiv">
        <p>Because RESILIENCE is everybody's Business.</p>
        </div>

        <div class="breakDiv">
            <div class="text">
                <h3>Disaster Resilience Rated Hotels<h3></div>
        </div>

        <!-- Sort -->
        <div>
        
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" 
        data-bs-toggle="dropdown" aria-expanded="false" style="margin-left:10%">
            Sort
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">A to Z</a></li>
            <li><a class="dropdown-item" href="#">Z to A</a></li>
        </ul>
        </div>
        
        <div  style="padding-left:10%; padding-top:10px;">
        <input class="form-control" type="text" placeholder="Search" aria-label="default input example">
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4" style="padding-left:10%; padding-right:10%; padding-top:2%;">
        <!-- Rated Hotel 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="../../img/shangrila.jpg" class="card-img-top" alt="Shangrila Pool Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">Shangri-La</h2> 
                        <a href="https://www.shangri-la.com/manila/edsashangrila/" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                           
                    </div>
                </div>
            </div>

        <!-- Rated Hotel 2 -->

        <div class="col">
                <div class="card h-100">
                    <img src="../../img/diamond.jpg" class="card-img-top" alt="Diamond Hotel Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">Diamond Hotel Philippines</h2> 
                        <a href="https://www.diamondhotel.com/" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                    </div>
                </div>
            </div>

            <!-- Rated Hotel 3 -->

            <div class="col">
                <div class="card h-100">
                    <img src="../../img/dusit.jpg" class="card-img-top" alt="Dusit Thani Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">Dusit Thani</h2> 
                        <a href="https://www.dusit.com/dusitthani-manila/" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                    </div>
                </div>
            </div>

           <!-- Rated Hotel 4 -->

           <div class="col">
                <div class="card h-100">
                    <img src="../../img/rogers.jpg" class="card-img-top" alt="Rogers Place Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">Rogers Place Hotel</h2> 
                        <a href="#" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                            
                    </div>
                </div>
            </div>

            <!-- Rated Hotel 5 -->

        <div class="col">
                <div class="card h-100">
                    <img src="../../img/nichols.jpg" class="card-img-top" alt="Nichols Airport Hotel Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">Nichols Airport Hotel</h2> 
                        <a href="https://www.nicholsairporthotel.com.ph/" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                           
                    </div>
                </div>
            </div>

            <!-- Rated Hotel 6 -->

            <div class="col">
                <div class="card h-100">
                    <img src="../../img/88.jpg" class="card-img-top" alt="88 Courtyard Hotel Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">88 Courtyard Hotel</h2> 
                        <a href="https://88courtyardhotel.com.ph/" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                       
                            <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">
                            
                    </div>
                </div>
            </div>

           <!-- Rated Hotel 7 -->

           <div class="col">
                <div class="card h-100">
                    <img src="../../img/heritage.jpg" class="card-img-top" alt="The Heritage Hotel Manila Picture" >
                    <div class="card-body">
                        <h2 class="card-title" style="display:inline-block">The Heritage Hotel Manila</h2> 
                        <a href="https://www.millenniumhotels.com/en/manila/the-heritage-hotel-manila/?cid=gplaces-the-heritage-hotel-manila" class="btn btn-outline-primary" style="float:right; display:inline; border-color:#302DB9;">Go to Site</a>
                             <p style="font-size:30px">RR: 
                            <img src="../../img/bamboo2.png" alt="Resilience Rating" class="bamboo">          
                    </div>
                </div>
            </div>
           
        </div>

        <nav aria-label="...">
        <ul class="pagination justify-content-center" style="margin:20px;">
            <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
            <li class="page-item" >
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
        </nav>
    </body>
</html>