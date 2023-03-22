<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Col_gestion_employees</title>
</head>
   <!-- font aweasome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <!-- cusom css link  -->
    <link rel="stylesheet" href="css/style.css">
<body>


        <div class="container">
            <aside>
                <div class="top">
                    <div class="logo"><img src="../images/facebook.png" alt=""></div>
                        <h1 >Col<span class="danger">Entreprise</span></h1>
                        
                    <div class="ferme" id="close-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                </div>
                    <div class="sidebar">
                        <a href="">
                            <i class="fa-solid fa-grid-2"></i>
                            <h2 class="">Dashboard</h2>
                        </a>
                         <a href="" class="active">
                        <i class="fa-solid fa-gauge-high"></i>
                            <h2>Dashboard</h2>
                        </a>
                        <a href="">
                            <i class="fa-solid fa-chart-pie"></i>
                            <h2>Analyse</h2>
                        </a>
                        <a href="">
                        <i class="fa-regular fa-message"></i>
                            <h2>Messages</h2>
                            <span class="message-count">26</span>
                        </a>
                        <a href="">
                        <i class="fa-sharp fa-solid fa-magnifying-glass-chart"></i>
                            <h2>Rapports</h2>
                        </a>
                        <a href="">
                        <i class="fa-solid fa-wrench"></i>
                            <h2>Parametre</h2>
                        </a>
                        <a href="add-employee.php">
                            <i class="fa-solid fa-user-plus"></i>
                            <h2>Ajouter employee</h2>
                        </a><a href="">
                            <i class="fa-solid fa-circle-xmark"></i>
                            <h2>Exit</h2>
                        </a>
                    </div>
               
            </aside>

            <!--  END OF ASIDE  AND GO TO MAIN -->
            <main id="main-dashboard">
                <h1 class="bord" >Tableau de Bord</h1>

                <div class="date">
                    <input type="date" name="" id="">
                </div>
                <div class="insights">
                    <div class="sales">
                    <i class="fa-solid fa-timeline"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Temps d'employee</h3>
                            <h1>stat's</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy = '38' r = '35'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Pendant 24Heures</small>
                    </div>
                    <!-- END THE STAST'S ------>
                    <div class="expenses">
                    <i class="fa-solid fa-chalkboard-user"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Temps d'employee</h3>
                            <h1>stat's</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy = '38' r = '35'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Pendant 24Heures</small>
                    </div>
                    <!-- END THE STAST'S ------>
                    <div class="income">
                    <i class="fa-solid fa-phone-missed"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Temps d'employee</h3>
                            <h1>stat's</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy = '38' r = '35'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Pendant 24Heures</small>
                    </div>
                    <!-- END THE STAST'S ------>

                    <!-- END THE MAAIN-INS ------>
                </div>
                <div class="recent-order">
                        <h2>Activité Recente</h2>
                        <table>
                            <thead>
                                <tr>
                                    <th>Person Name</th>
                                    <th>Person Number</th>
                                    <th>Payement Status</th>
                                    <th>status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            <tr>
                                    <td>Chris le conquerant</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td>Payement Validé</td>
                                    <td class="warring">Administrateur</td>
                                    <td class="primary">Details</td>
                                </tr>
                                <tr>
                                    <td>Chris le conquerant</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td>Payement Validé</td>
                                    <td class="warring">Administrateur</td>
                                    <td class="primary">Details</td>
                                </tr>
                                <tr>
                                    <td>Chris le conquerant</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td>Payement Validé</td>
                                    <td class="warring">Administrateur</td>
                                    <td class="primary">Details</td>
                                </tr>
                                <tr>
                                    <td>Chris le conquerant</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td>Payement Validé</td>
                                    <td class="warring">Administrateur</td>
                                    <td class="primary">Details</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="">Click</a>
                    </div>
                    
            </main>

            <!-- END OF MAIN -->

                <div class="right">
                    <div class="top">
                        <button id="menu-btn">
                            <i class="fa-sharp fa-solid fa-bars">
                            </i></button>
                    
                   <div class="theme-toggler">
                   <i class="fa-solid fa-sun active"></i>
                   <i class="fa-solid fa-moon"> </i>
                   </div>
                   <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Chris Lorng</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                        <div class="photo-profile">
                            <img src="../images/person1.webp" alt="">
                        </div>
                   </div>
                   </div>
                    <!--- END RIGHT ----- -->
                <div class="recent-update">
                    <h2>Messages Recent</h2>
                    <div class="updates">
                        <div class="update">
                            <div class="photo-profile">
                                <img src="../images/person3.jpg" alt="">
                            </div>
                            <div class="message">
                                <p><b>Chris Lorng</b> Vous avez eu à 
                            Modifier le  Status d'un Employee</p>
                            <small class="text-muted">il y'a 2min </small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="photo-profile">
                                <img src="../images/person1.webp" alt="">
                            </div>
                            <div class="message">
                                <p><b>Chris Lorng</b> Vous avez eu à 
                            Modifier le  Status d'un Employee</p>
                            <small class="text-muted">il y'a 2min </small>
                            </div>
                        </div>

                        <div class="update">
                            <div class="photo-profile">
                                <img src="../images/person2.webp" alt="">
                            </div>
                            <div class="message">
                                <p><b>Chris Lorng</b> Vous avez eu à 
                            Modifier le  Status d'un Employee</p>
                            <small class="text-muted">il y'a 2min </small>
                            </div>
                        </div>
                    </div>
                    </div>

                    <!---  AJOUT PESON --->

                    <div class="sales-analytics">
                        <h2>Employee Ajouter Recemment</h2>
                        <div class="item online">
                                <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="right">
                                    <div class="info">
                                        <h3>Personne online</h3>
                                        <small class="text-muted">Pendant 24 Heures</small>
                                    </div>
                                    <h5 class="success">+</h5>
                                    <h3>status</h3>
                                </div>
                        </div>

                        <div class="item online">
                                <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="right">
                                    <div class="info">
                                        <h3>Personne online</h3>
                                        <small class="text-muted">Pendant 24 Heures</small>
                                    </div>
                                    <h5 class="success">+</h5>
                                    <h3>status</h3>
                                </div>
                        </div>

                        <div class="item online">
                                <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="right">
                                    <div class="info">
                                        <h3>Personne online</h3>
                                        <small class="text-muted">Pendant 24 Heures</small>
                                    </div>
                                    <h5 class="success">+</h5>
                                    <h3>status</h3>
                                </div>
                        </div>
                        <div class="item add-product">
                            <div>
                            <i class="fa-solid fa-plus"></i>
                            <h3> Add Person</h3>
                            </div>
                        </div>
                    </div>

                </div>
           
        </div>

        <script src="js/js-dashboard.js"></script>
</body>
</html>