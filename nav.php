<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name"><h1><a href="#">My Site</a></h1></li>
        <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
    </ul>
    <section class="top-bar-section">
        <ul class="left">
            
        </ul>
    </section>
    <section class="top-bar-section">
        <ul class="right">
            <?php if($_SESSION['logged']==1) { ?>
            <li class="has-dropdown"><a href="#">Recipes</a>
                <ul class="dropdown">
                    <li><a href="recipes.php">View All Recipe</a></li>
                    <li><a href="addrecipe.php">Add New Recipe</a></li>
                </ul>
            </li>
            <li class="has-dropdown"><a href="profile.php?user=<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['name']; ?></a>
                <ul class="dropdown">
                    <li><a href="addrecipe.php">View Profile</a></li>
                    <li><a href="savedrecipes.php">Favorite Recipes</a></li>
                </ul>
            </li>
            <li><a href="logout.php">Log Out</a></li>
            <?php } else { ?>
            <li><a href="login.php">Login/Register</a></li>
            <?php } ?>
        </ul>
    </section>
</nav>