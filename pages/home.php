<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOME</title>
        <link rel="stylesheet" href="<?php echo base_url("/assets/css/home.css"); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url("/assets/bootstrap/css/bootstrap.css"); ?>"/>
        <script src="https://unpkg.com/@popperjs/core@2"></script>      
            <script type = 'text/javascript' src = "<?php echo base_url(); 
                ?>/assets/bootstrap/js/bootstrap.js"></script>
    </head>

    <body>
        
        <div class="bannerDiv">
            <h1>THE DISASTER RESILIENCE RATING FOR HOTELS</h1>
        </div>
        
        <div class="subbannerDiv">
            <p>Because RESILIENCE is everybody's Business.</p>
        </div>
    
        <div class="flexbox-container">
            <div class="framework"> 
                <img src="../../img/VUCAWorld.jpg" width="650px" height="auto">
            </div>
            
            <div class="vuccatext"><h4><br>WE LIVE IN A VUCA WORLD</br>
                <br>where disasters are waiting just around the corner.</br>
                <br>We need to make our institutions resilient.</br>
                <br>And it begins with knowing where we stand? </br>
                <br>Is your hotel resilient?</br></h4></div>
        </div>

        <!--MODAL-->

        <button type="button" class="framebutton btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        WATCH HOW FRAMEWORK WORKS
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">FRAMEWORK</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <video width="100%" controls>
                            <source src="../../img/Hotel_Resilience_Presentation.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <!--END OF MODAL-->
        

        <div class="breakDiv">
            <div class="text">
                <h3>WHY GET YOUR HOTEL RATED?<h3></div>
        </div>

        <div class="flexbox-container2">
            <div class="flexitem1">
                <img src="../../img/assess.jpg" width="400px" height="200px">
            </div>

            <div class="protectdescription">
                <h5>To help you assess your resilience. <br>Find out where you stand.</br></h5>
            </div>
        </div>
        
        <div class="flexbox-container2">
            <div class="flexitem1">
                <img src="../../img/protect.jpg" width="400px" height="200px">
            </div>

            <div class="protectdescription">
                <h5>To help protect your stakeholders<br>Because your success depends on them.</br></h5>
            </div>
        </div>

        <div class="flexbox-container2">
            <div class="flexitem1">
                <img src="../../img/build.jpg" width="400px" height="200px">
            </div>

            <div class="protectdescription">
                <h5>To help build the industry<br>Because when you are resilient,<br>you help the industry become more resilient.</br></h5>
            </div>
        </div>

        <div class="flexbox-container2">
            <div class="flexitem1">
                <img src="../../img/phil.jpg" width="400px" height="200px">
            </div>

            <div class="protectdescription">
                <h5>Because the country needs you to be resilient<br>The whole country benefits from you moving <br>towards a more resilient future.</br></h5>
            </div>
        </div>
        

        <div class="process">
            <div class="rating">
                <h3>THE RATING PROCESS</h3>
            </div>
        
            <div class="imgrow text-center">
                <div class="columnstep">
                    <div class="thumbnail">
                        <img src="../../img/assessment.jpg" width="150px" height="150px" style="border-radius: 50%; border: 5px solid white">
                        <p style="font-size: 20px"><strong>Step One</strong></p>
                        <p style="font-weight: regular; font-size: 15px">Self Assessment</p>
                    </div>
                </div>
                    
            
                <div class="columnstep">
                    <div class="thumbnail">
                        <img src="../../img/audit.jpg" width="150px" height="150px" style="border-radius: 50%; border: 5px solid white">
                        <p style="font-size: 20px"><strong>Step Two</strong></p>
                        <p style="font-weight: regular; font-size: 15px">Third Party Resilience Audit</p>
                    </div>
                 </div>

                
                <div class="columnstep">
                    <div class="thumbnail">
                        <img src="../../img/approval.jpg" width="150px" height="150px" style="border-radius: 50%; border: 5px solid white">
                        <p style="font-size: 20px"><strong>Step Three</strong></p>
                        <p style="font-weight: regular; font-size: 15px">Industry Association validation and Approval</p>
                    </div>
                </div>

                <div class="columnstep">
                    <div class="thumbnail">
                        <img src="../../img/public.jpg" width="150px" height="150px" style="border-radius: 50%; border: 5px solid white">
                        <p style="font-size: 20px"><strong>Step Four</strong></p>
                        <p style="font-weight: regular; font-size: 15px">Publication of Rating</p>
                    </div>
                </div>
            </div>
        
        </div>

     </body>
</html>






