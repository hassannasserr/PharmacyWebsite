<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">    
    <style>
        /* Main section styles */
main {
    padding: 20px;
}

.mission,
.values,
.team {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
}

.mission h2,
.values h2,
.team h2 {
    color: #167475;
    margin-bottom: 10px;
}

.values ul {
    list-style: none;
}

.values li {
    margin-bottom: 5px;
}

.team p {
    margin: 0;
}
.team-members {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.team-member {
    position: relative;
    text-align: center;
    width: 30%;
    transition: transform 0.3s ease-in-out; /* Add this line */
}
.team-member:hover {
    transform: scale(1.1); /* Add this line */
}
.team-member img {
    width: 60%; /* Decrease this value to make the images smaller */
    height: auto;
    display: block; /* Add this to center the image */
    margin: 0 auto; /
}

.team-member h3 {
    margin-top: 10px;
    color: var(--maincolor);
}
.social-icons {
    display: none;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.team-member:hover .social-icons {
    display: block;
}
    </style>
    <title>Phrmasico</title>
</head>
<body>

    <?php
    session_start(); 
    include 'header.php'; ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <main>
            <section class="mission">
                <h2>Our Mission</h2>
                <p>Availability of all medications and rapid delivery to any place</p>
            </section>
            <section class="values">
                <h2>Our Values</h2>
                <ul>
                    <li>Customer Satisfaction</li>
                    <li>Quality Products</li>
                    <li>Integrity</li>
                    <li>Continuous Improvement</li>
                    <li>Community Engagement</li>
                </ul>
            </section>
            <section class="team">
                <h2>Our Team</h2>    
                 <div class="team-members">
             <div class="team-member">
                <img src="Hassan.jpeg" alt="Hassan">
                <h3>Hassan Nasser</h3>
                <div class="social-icons">
                <a href="https://www.instagram.com/hassanellkashef?igsh=MTYzdzN3aHZpY2c2eQ=="><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/hassan-nasser-710582249/"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/hassannasserr"><i class="fab fa-github"></i></a>
              </div>
             </div>
            <div class="team-member">
                <img src="Sherry.jpeg" alt="Sherry">
                <h3>Sherry Ezz</h3>
                <div class="social-icons">
                     <a href="https://www.instagram.com/sherryezzyacoub?igsh=MTk3dHZreHo4bWlycQ=="><i class="fab fa-instagram"></i></a>
                     <a href="https://www.linkedin.com/in/sherry-ezz-2687ba256/"><i class="fab fa-linkedin"></i></>
                     <a href="https://github.com/SherryEZZ"><i class="fab fa-github"></i></a>
                    </div>
            </div>
            <div class="team-member">
                <img src="Esraa.jpeg" alt="Esraa">
                <h3>Esraa Yousry</h3>
                <div class="social-icons">
                 <a href="https://www.instagram.com/esraayouseri24?igsh=MXN5MDQ5Nmdqcmp0aw=="><i class="fab fa-instagram"></i></a>
                 <a href="https://www.linkedin.com/in/esraa-yosrei-86813b289/"><i class="fab fa-linkedin"></i></a>
                 <a href="https://github.com/esraayousriii"><i class="fab fa-github"></i></a>
                </div>
             </div>
            </div>
        </section>
        </main>
        <footer class="footer" id="footer">
            <div class="container">
                <div class="about-us">
                    <p>&copy; 2024 Phrmasico. All rights reserved</p>
                </div>
            </div>
        </footer>
        <script src="scrypt.js"></script>

        <script>
    $(document).ready(function() {
        $(".team-member").hover(
            function() { // On hover
                $(this).find(".social-icons").show();
            }, function() { // On hover out
                $(this).find(".social-icons").hide();
            }
        );
    });
    </script>
</body>
</html>