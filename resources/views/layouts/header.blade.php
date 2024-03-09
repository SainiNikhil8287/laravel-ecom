<!-- Nav tabs -->
<?php  ($active) ?? $active=""; ?>
<?php //echo $test_data; ?>
<ul class="nav nav-tabs" id="navId">
    
    <li class="nav-item">
        <a href="/" class="nav-link <?php echo ($active == 'welcome')?'active':''; ?>">Welcome</a>
    </li>

    <li class="nav-item">   
        <a href="/home/Nikhil" class="nav-link <?php echo ($active == 'home')?'active':''; ?>">Home</a>
    </li>   

    <li class="nav-item">
        <a href="/about" class="nav-link <?php echo ($active == 'about')?'active':''; ?>" >About</a>
    </li>

    <li class="nav-item">
        <a href="/register" class="nav-link <?php echo ($active == 'register')?'active':''; ?>">Register</a>
    </li>

</ul>