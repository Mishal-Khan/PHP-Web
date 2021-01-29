<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Topnav with sidebar</title> 
  
    <!-- Import bootstrap cdn -->
    <link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity= 
"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
        crossorigin="anonymous" /> 
  
    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity= 
"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"> 
    </script> 
      
    <!-- Import popper.js cdn -->
    <script src= 
"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity= 
"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"> 
    </script> 
      
    <!-- Import javascript cdn -->
    <script src= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity= 
"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"> 
    </script> 
      
    <!-- CSS stylesheet -->
    <style type="text/css"> 
        html, 
        body { 
            height: 100%; 
        } 
  
        #green { 
            height: 100%; 
            background: white;
            text-align: center; 
            color: black; 
            padding: 15px; 
        } 
    </style> 
</head> 
  
<body> 
    <!-- h-100 takes the full height of the body-->
    <div class="container-fluid h-100"> 
  
        <!-- h-100 takes the full height  
                 of the container-->
        <div class="row h-100"> 

            <div class="col-2" id="green"> 
                <h4 style="background-color: white"><img style="background-color: white; width: 150px; 
                height: 150px;" src="images/logo.jpeg"></h4>
                <div style="background-color: darkblue; padding:25px ; border-radius: 20px;">

  
                <!-- Navigation links in sidebar-->
                <a href="#">Link 1</a><br /> 
                <br /> 
                <a href="#">Link 2</a><br /> 
                <br /> 
                <a href="#">Link 3</a><br /> 
                <br /> 
                <a href="#">Link 4</a><br /> 
                <br /> 
            </div>
            </div> 
            <div class="col-10" style="padding: 0;"> 
  
                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg  
                                navbar-light bg-primary"> 
                    <a class="navbar-brand" href="#">Navbar</a> 
                    <!-- Hamburger button that toggles the navbar-->
                    <button class="navbar-toggler" 
                        type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" 
                        aria-controls="navbarNavAltMarkup" 
                        aria-expanded="false"
                        aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span> 
                    </button> 
                    <!-- navbar links -->
                    <div class="collapse navbar-collapse" 
                        id="navbarNavAltMarkup"> 
                        <div class="navbar-nav"> 
                            <a class="nav-item nav-link  
                                active" href="#">Home</a> 
                            <a class="nav-item nav-link" 
                                href="#">Features</a> 
                            <a class="nav-item nav-link" 
                                href="#">Price</a> 
                            <a class="nav-item nav-link" 
                                href="#">About</a> 
                        </div> 
                    </div> 
                </nav> 
  
                <!-- Contains the main content of the webpage-->
                <p style="padding: 15px; text-align: justify;"> 
                    Bootstrap is a free and open-source 
                    tool collection for creating responsive 
                    websites and web applications. 
                    It is the most popular HTML, CSS, and 
                    JavaScript framework for developing 
                    responsive, mobile-first web sites. 
                </p> 
            </div> 
        </div> 
    </div> 
</body> 
  
</html>