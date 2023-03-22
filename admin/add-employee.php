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
    <link rel="stylesheet" href="css/style-add-employee.css">
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
                <div class="recent-order">
                        <h2>Ajouter Un Employé</h2>
                        <button class="btn" id="myBtn">Add Employee</button>
                        <table class="tableau-responsive">
                            <thead>
                                <tr>
                                    <th class="primary">Nom</th>
                                    <th class="warring" >Prenoms</th>
                                    <th class="primary">Departement</th>
                                    <th class="warring">Numero</th>
                                    <th class="primary">Adresse mail</th>
                                    <th class="warring">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                <tr>
                                    <td  >Lorng</td>
                                    <td  >Chris Onesiphore</td>
                                    <td  > Informatique</td>
                                    <td  >225 07 69 36 28 51</td>
                                    <td  >chrisleconquerant01@gmail.com</td>
                                    <td  ><i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    <i class="fa-solid fa-trash-can"></i></td>
                                </tr>
                                <tr>
                                    <td>Lorng</td>
                                    <td>Chris Onesiphore</td>
                                    <td>Informatique</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td >chrisleconquerant01@gmail.com</td>
                                    <td ><i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    <i class="fa-solid fa-trash-can"></i></td>
                                </tr>
                                <tr>
                                    <td>Lorng</td>
                                    <td>Chris Onesiphore</td>
                                    <td>Informatique</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td >chrisleconquerant01@gmail.com</td>
                                    <td ><i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    <i class="fa-solid fa-trash-can"></i></td>
                                </tr>
                                <tr>
                                    <td>Lorng</td>
                                    <td>Chris Onesiphore</td>
                                    <td>Informatique</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td >chrisleconquerant01@gmail.com</td>
                                    <td ><i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    <i class="fa-solid fa-trash-can"></i></td>
                                </tr>
                                <tr>
                                    <td>Lorng</td>
                                    <td>Chris Onesiphore</td>
                                    <td>Informatique</td>
                                    <td>225 07 69 36 28 51</td>
                                    <td >chrisleconquerant01@gmail.com</td>
                                    <td ><i class="fa-sharp fa-solid fa-pen-to-square"></i>
                                    <i class="fa-solid fa-trash-can"></i></td>
                                </tr>
                               
                            </tbody>
                        </table>
                        <div class="modal" id="myModal">
                        <form action="" method="POST"  enctype="multipart/form-data">
                                    <div class="segment">
                                    <h1>ENREGISTREMENT</h1>
                                    </div>
                                    
                                    <label>
                                    <input type="text" name="nom" placeholder="Votre Nom"/>
                                    </label>
                                    <label>
                                    <input type="text" name="prenom" placeholder="Votre Prenom"/>
                                    </label>
                                    <label>
                                    <input type="email" name="email" placeholder="Adresse Email"/>
                                    </label> <label>
                                    <input type="email" name="email" placeholder="Departement"/>
                                    </label>
                                    <label>
                                    <input type="text" name="Numero" placeholder="Nmero"/>
                                    </label>
                                    <label>
                                    <input type="password" name="password" placeholder="Password"/>
                                    </label>
                                    <button class="red" type="submit" name="send">Enregistrer</button>
                                    </form>

                                    <div class="segment">
                                    <a href="../index.php"><button class="unit" type="button"></button></a>
                                    </div>
                             </div>
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

                <div class="recent-update">
                    
                    </div>

             

                </div>
           
        </div>
            <script src="js/table.js"></script>
        <script src="js/js-dashboard.js"></script>
</body>
</html>