<?php 

session_start();


include ('./searchName.php');


if (isset($_SESSION['firstname'])) {

?>
<!DOCTYPE html>

<html land="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title> login From</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewportport" content="width=device-width,initial-scale=1.0">
            
        <!--Boxicons CSS-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head> 
    <body>
        <div id="naviBar">
            <table border="0">
                <tbody><tr>
                    <th><h2>Pixelmarket</h2></th>
                    <th><a href="index.html">Home</a></th>
                    <th><a href="pages/allApps.html">Explore</a></th>
                    <th><a href="pages/contactUs.html">Contact Us</a></th>
                    <th><a href="index.html">Settings</a></th>
                    <th id="login"><a href="index.html">Login | Register</a></th>  
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="appBanner">
            <div class="appBannerChild">
            <h1>Pixelmarket Online App Store</h1>
            <h2>
                <a href="" class="typewrite" data-period="2000" data-type="[ &quot;Download Photo editors&quot;, &quot;Download Games&quot;, &quot;Download Notepads&quot;, &quot;Download Music Apps&quot; ]">Welcome to our online app store, where you can discover a world of
                incredible applications for all your devices. Our website provides a seamless platform to explore and
                download a wide range of apps that cater to your various needs and interests.
                   <span class="wrap"></span>
                </a>
            </h2>   
        </div>

        <h1>Hello, <?php echo $_SESSION['firstname']; ?></h1>

        <div class="toolbox">
            <form action="">
                <input type="text" class="textFeild3" placeholder="Enter Username here:"> 
                <input type="submit" name="search" value="Search" >
            </form>
        </div>

        <div class="cc__view">
            <table class="table">
                <thead class="tableHeader">
                    <tr class="tableHeader3">
                    <th scope="col" class="tableHeader2">Frist Name</th>
                    <th scope="col" class="tableHeader2">Last Name</th>
                    <th scope="col" class="tableHeader2">Username</th>
                    <th scope="col" class="tableHeader2">Date Of Birth</th>
                    <th scope="col" class="tableHeader2">Gender</th>
                    <th scope="col" class="tableHeader2">Stress address</th>
                    <th scope="col" class="tableHeader2">Stress Address2</th>
                    <th scope="col" class="tableHeader2">City</th>
                    <th scope="col" class="tableHeader2">Country</th>
                    <th scope="col" class="tableHeader2">Email</th>
                    <th scope="col" class="tableHeader2">Phone Number</th>
                    <th scope="col" class="tableHeader2">Password</th>
                    <th scope="col" class="tableHeader2">Confarm Password</th>
                    <th scope="col" class="tableHeader2">Image</th>

                    <th scope="col">Actions</th> <!-- Added Actions column -->
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sql = "SELECT * FROM user_db";

                    $result = mysqli_query($con, $sql);
                    if ($result) 
                    {
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            
                            $firstname = $row["firstname"];
                            $lastname = $row["lastname"];
                            $username = $row["username"];
                            $dateofbirth =$row["dateofbirth"];
                            $gender = $row["gender"];
                            $stressaddress =$row["stressaddress"];
                            $stressaddress2 =$row["stressaddress2"];
                            $city = $row["city"];
                            $country = $row["country"];
                            $email = $row["email"];
                            $phonenumber =$row["phonenumber"];
                            $password = $row["password"];
                            $confirmpassword = $row["confirmpassword"];
                            $image = $row["image"];
                            
                        

                            echo '<tr>
                            <td>' .$firstname . '</td>
                            <td>' . $lastname . '</td>
                            <td>' . $username . '</td>
                            <td>' . $dateofbirth  . '</td>
                            <td>' . $gender . '</td>
                            <td>' .$stressaddress. '</td>
                            <td>' . $stressaddress2 . '</td>
                            <td>' .  $city . '</td>
                            <td>' . $country . '</td>
                            <td>' . $email . '</td>
                            <td>' .  $phonenumber  . '</td>
                            <td>' . $password  . '</td>
                            <td>' .  $confirmpassword . '</td>
                            <td>' . $image . '</td>
                            
                            <td>
                            <button class="btndelete"><a href="deleteuserDetails.php? deletefirstname='.$firstname.'" class="text-light">Delete</a></button>
                            </td>

                            </tr>';
                        }
                    }
                    ?>
                
                </tbody>
                </table>

        </div>
        <footer>
            <table>
                <tbody>
                    <tr>
                        <th><h3>Pixelmarket</h3></th> 
                        <th><h3>Find Us On</h3></th> 
                    </tr>    
                    <tr height="px | %">
                        <th><a class="footertext" href="pages/contactUs.html">Contact Us</a></th>
                    </tr>
                    <tr>
                        <th><a class="footertext" href="pages/contactUs.html">Manage your account</a></th>
                    </tr>
                    <tr>
                        <th><a class="footertext" href="pages/contactUs.html">Newsroom</a></th>
                    </tr>
                    <tr>
                        <th><a class="footertext" href="pages/contactUs.html">Report a bug</a></th>
                    </tr>
                    <tr>
                        <th><a class="footertext" href="pages/contactUs.html">Privacy</a></th>
                    </tr>
                    <tr>
                        <th><a class="footertext" href="pages/contactUs.html">Payment Security</a></th>
                    </tr>
                    
                </tbody>
            </table>
        </footer>

    
    </body>
</html>

<?php 

}else{

     header("Location: login.html");

     exit();

}

 ?>

