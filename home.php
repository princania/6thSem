<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php include_once 'reuse/font.php' ?>
    <title>Home</title>
</head>

<body class="background lrm rubik">
    <div class="c c1"></div>
    <?php include_once 'reuse/navbar.php' ?>
    <div class="p1">
        <div class="p1text">
            <p class="heading bold white">Welcome to <span class="pink">StudInfo</span></p><br>
            <p class="white normal fifty">StudInfo is a webapp built for students specifically, to better manage their resources such as time and money.</p>
            <br><br><br><br>
            <div class="buttons">
                <button class="login white normal bold rubik"><a href="localhost/6thSem/login.php">Login</a></button>
                <button class="register white normal bold rubik">Register</button>
            </div>
        </div>
        <div class="p1img">
            <img src="pictures/main.png" alt="image">
        </div>
    </div>
    <div class="c c2"></div>
    <div class="catalog">
        <img src="pictures/money.png" alt="money">
        <img src="pictures/time2.png" alt="time">
        <img src="pictures/resource.png" alt="resource">
    </div>
    <div class="description">
        <div class="money des">
            <div class="img">
                <div class="c c3"></div><img class="img1" src="pictures/money2.png">
            </div>
            <div class="description">
                <div class="heading rubik money_color">Money Manager</div><br><br>
                <div class="body white rubik normal">Record Income, Track expenses, View all transactions, See your expenses as a graph, you got it all here. Managing finances is one of the many problems a student faces when he moves out of his home, so we are here to help.</div>
                <button class="money_background try_me bold rubik">Try Now</button>
            </div>
        </div>
        <div class="time des">
            <div class="description">
                <div class="heading rubik time_color">Time Manager</div><br><br>
                <div class="body white rubik normal">Important Dates, Upcoming events, College time-table, syllabus progress and many other upcoming features necessary for students.</div>
                <button class="time_background try_me bold rubik">Try Now</button>
            </div>
            <div class="img">
                <div class="c c4"></div>
                <img src="pictures/time.png" class="img1">
            </div>
        </div>
        <div class="resources des">
            <div class="img">
                <div class="c c5"></div><img class="img1" src="pictures/resource2.png">
            </div>
            <div class="description">
                <div class="heading rubik resource_color">Resource Manager</div><br><br>
                <div class="body white rubik normal">Books, PDF’s, Images, Diagrams, Important notices, it’s like a digital store room for digital documents, so that you can retrieve them whenever required.</div>
                <button class="resource_background try_me bold rubik">Try Now</button>
            </div>
        </div>
    </div>
    <div class="foot"></div>
</body>

</html>