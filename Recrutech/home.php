<?php
    include 'dbh.php'
?>
<html lang="fr">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
    document.querySelectorAll(".truncated").forEach(function(current) {

current.addEventListener("click", function(e) {
  current.classList.remove("truncated");
}, false);

});
</script>
<div class="content">
</div>
    <head>
        <title> Recrutech | Find Your Tech Future </title>
        <link href="style.css" type="text/css" rel="stylesheet" media="screen">
        <meta charset="UTF-8">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Zilla+Slab+Highlight">
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Lexend">
              <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Open+Sans">    
              <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab+Highlight:wght@700&display=swap" rel="stylesheet">  
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<div class="div1">
<header>
        
        <input type="checkbox" class="checkBtn" />
        <ol>
            <a href="#">
                <li>Job List</li>
            </a>
            <a href="#">
                <li>Publish an Ad</li>
            </a>
            <a href="#">
                <li>Company Reviews</li>
            
            </a>
            <a href="#">
                <li>Login</li>
            </a>
			<a href="#">
                <li class="signup">Sign Up</li>
            </a>
        </ol>
    </div>
</header>
<body>
    <div class="divtitle">
        <h1 class="title2 animate__animated animate__slow animate__bounceInDown"> RECRUTECH. <br></h1>
        <h2 class="title3">Your Tech Future, <span>Simplified.</span></h2>
    </div>
    <article class="card">
        <button class="applybutton"
        type="button">
        Apply
        </button>
        </div>
            <?php
            $sql = "SELECT * FROM annonces";
            $result = mysqli_query($conn, $sql);?>
            <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <h1> <?php echo $row['jobname'];?></h1>
                <h2><?php echo $row['companyname'] ?></h2>
                <h3><?php echo $row['location'];?></h3>
                <p><?php echo $row['descrip1'];?></p>
                <p><?php echo $row['descrip2'];?></p>
            <?php endwhile; ?>
            <?php endif; ?>
    </article>
    <article class="card">
        <button class="applybutton"
        type="button">
        Apply
        </button>
        </div>
            <?php
            $sql = "SELECT * FROM annonces WHERE id='2  '" ;
            $result = mysqli_query($conn, $sql);?>
            <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <h1><?php echo $row['jobname'];?></h1>
                <h2><?php echo $row['companyname'] ?></h2>
                <h3><?php echo $row['location'];?></h3>
                <p><?php echo $row['descrip1'];?></p>
                <p><?php echo $row['descrip2'];?></p>
                <?php endwhile; ?>
                <?php endif; ?>
    </article>
    <article class="card">
        <button class="applybutton"
        type="button">
        Apply
        </button>
        </div>
            <?php
            $sql = "SELECT * FROM annonces WHERE id='3'" ;
            $result = mysqli_query($conn, $sql);?>
            <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <h1><?php echo $row['jobname'];?></h1>
                <h2><?php echo $row['companyname'] ?></h2>
                <h3><?php echo $row['location'];?></h3>
                <p><?php echo $row['descrip1'];?></p>
                <p><?php echo $row['descrip2'];?></p>
                <?php endwhile; ?>
                <?php endif; ?>
    </article>
</body>
<footer>
    <h7>Find Us</h7>
</footer>
</html>
























      <!--  
    <article class = "card">
    <?php
            $sql = "SELECT * FROM annonces WHERE id='1'" ;
            $result = mysqli_query($conn, $sql);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <p><?php echo $row['jobname'] ?></p>
                <p><?php echo $row['companyname'] ?></p>
                <p><?php echo $row['location'] ?></p>
                <p><?php echo $row['salary'] ?></p>
                <p class= "test1"><?php echo $row['descrip1'] ?></p>
                <p><?php echo $row['descrip2'] ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
 <article class = "card">
        <?php
            $sql = "SELECT * FROM annonces WHERE id='2'" ;
            $result = mysqli_query($conn, $sql);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <p><?php echo $row['jobname'] ?></p>
                <p><?php echo $row['companyname'] ?></p>
                <p><?php echo $row['location'] ?></p>
                <p><?php echo $row['salary'] ?></p>
                <p><?php echo $row['descrip1'] ?></p>
                <p><?php echo $row['descrip2'] ?></p>
            <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <article class = "card">
        <?php
            $sql = "SELECT * FROM annonces WHERE id='3'" ;
            $result = mysqli_query($conn, $sql);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <p><?php echo $row['jobname'] ?></p>
                <p><?php echo $row['companyname'] ?></p>
                <p><?php echo $row['location'] ?></p>
                <p><?php echo $row['salary'] ?></p>
                <p><?php $row['descrip1'] ?></p>
                <p><?php echo $row['descrip2'] ?></p>
            <?php endwhile; ?>
        <?php endif; ?>-->