<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href=".\css\style.css">
    <title>Colley Gate Gardening Club - Welcome</title>
</head>
<body>
    <div class="menu-btn">
        <i class="fas fa-bars  fa-2x"></i>
    </div>

    <div class="container">


        <!--Navigation-->
        <?php include "includes/nav.php"; ?>

        <!--Showcase-->
        <header class="showcase">
            <h2>Welcome</h2>
            <p>Colley Gate Gardening Club is based on the outskirts of Halesowen,<br> in the West Midlands in an area known as the Black Country.</p>
        </header>

        <!--Cards for links to other pages-->
        <section class="link-cards">
            <div>
                <img src=".\img\showlink.jpg" alt="flower image">
                <h3>Show</h3>
                <p>The Show is the highlight of the club year, it is staged in September.</p>
                <a href="show.php">Learn More</a>
            </div>
            <div>
                <img src=".\img\meetinga.jpg" alt="meeting">
                <h3>Meetings</h3>
                <p>Meetings are held between February and November.</p>
                <a href="meeting.php">Learn More</a>
            </div>
            <div>
                <img src=".\img\TradingShed.jpg" alt="Trading Shed">
                <h3>Shed</h3>
                <p>The club trading sheds are located at Abbey Road allotments</p>
                <a href="shed.php">Learn More</a>
            </div>
            <div>
                <img src=".\img\Member-link.jpg" alt="Member image">
                <h3>Members</h3>
                <p>The benefits of being a member and social media links</p>
                <a href="member.php">Learn More</a>
            </div>
        </section>
    </div>

    <?php include "includes/footer.php"; ?>
   

</body>
</html>