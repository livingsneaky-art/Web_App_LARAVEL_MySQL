<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Reservations</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Princess+Sofia&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d18cd545e2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
       
    <!-- Styles -->
        
    <style>
        .text-danger{
            font-family: 'Princess Sofia', cursive;
            color: #e5904d!important;
            text-shadow: 1px 1px black;
        }

        #s1_header{background: #1e1109} 
        #s2_about{background: #f0e9d7} 
        #s3_hobbies{background:  #fefaf7} 
        #s4_learn{background:#26221f } 

        /*---s1_header---*/
        #s1_header{
            background: url("uploads/building.jpg");
            background-position: center bottom;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    </style>

    </head>
    <body id="top" class="bg-dark">
    <!--NAVBAR-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-danger" href="/">Hotel Reservation</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="ToggleNavigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-items"><a href="/login" class="nav-link">Login</a></li>
                    <li class="nav-items"><a href="/register" class="nav-link">Register</a></li>
                </ul>
            </div>

        </div>
    </nav>

    <section id="s1_header">
            <aside class="container">
                <h1 class="text-danger display-4">Hotels Reservation</h1>
                <h5 class="text-white">5-227 Soccoro Village · Pagsabungan, (032) 384-2337 · 20300001@usc.edu.ph</h5> 
            </aside>
    </section>

    <style>
        #s1_header{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(4,1fr);
        }
        #s1_header aside{
            text-align: center;
            grid-column: 2/4;
            grid-row: 4/5;
        }
        @media (max-width: 992px) {
            #s1_header {height: 50vh;}
            #s1_header .display-4{font-size: 28px;}
            #s1_header h5{font-size: 12px;}
        }
    </style>

    <section id="s5_copyright" class="text-white bg-dark small my-5 text-center">
        <p>&copy;<script>document.write(new Date().getFullYear());</script>
        Whatever. All rights reserved.</p>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  

    </body>
</html>
