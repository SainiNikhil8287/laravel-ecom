<!-- Nav tabs -->
<?php  ($active) ?? $active=""; ?>
<?php //echo $test_data; ?>
<ul class="nav nav-tabs" id="navId">
    
    <li class="nav-item">
        <a href="/" class="nav-link <?php echo ($active == 'welcome')?'active':''; ?>">Welcome</a>
    </li>

    <!-- <li class="nav-item">   
        <a href="/home/Nikhil" class="nav-link <?php echo ($active == 'home')?'active':''; ?>">Home</a>
    </li>    -->
<!-- 
    <li class="nav-item">
        <a href="/about" class="nav-link <?php echo ($active == 'about')?'active':''; ?>" >About</a>
    </li> -->

    <!-- <li class="nav-item">
        <a href="/register" class="nav-link <?php echo ($active == 'register')?'active':''; ?>">Register</a>
    </li> -->

    <li class="nav-item">
        <a href="{{ url()->previous() }}" class="nav-link " >Back</a>
    </li>

    <li class="nav-item">
        <div class="search-container">
        <form action="{{ route('search')}}" method="get">
        @csrf
        <input type="text" placeholder="Search.." name="query">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        </div>
    </li>
    
</ul>