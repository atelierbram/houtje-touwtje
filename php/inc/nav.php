     <nav class="main-navigation">

      <ul>
         <li <?php if ($thisPage=="homepage") echo "id=\"nav-item--home\" class=\"nav-item nav-item--current\""; else echo "class=\"nav-item\""; ?>><a href="<?php echo $rootUrl;?>" class="nav-link nav-link--home" data-tooltip="home">home</a></li>
         <li <?php if ($thisPage=="lab") echo "id=\"nav-item--lab\" class=\"nav-item nav-item--current\""; else echo "class=\"nav-item\""; ?>><a href="<?php echo $rootUrl;?>lab/" class="nav-link nav-link--lab" data-tooltip="lab">lab</a></li>
         <li <?php if ($thisPage=="about") echo "id=\"nav-item--about\" class=\"nav-item nav-item--current\""; else echo "class=\"nav-item\""; ?>><a href="<?php echo $rootUrl;?>about/" class="nav-link nav-link--about" data-tooltip="about">about</a></li>
         <li <?php if ($thisPage=="contact") echo "id=\"nav-item--contact\" class=\"nav-item nav-item--current\""; else echo "class=\"nav-item\""; ?>><a href="<?php echo $rootUrl;?>contact/" class="nav-link nav-link--contact" data-tooltip="contact">contact</a></li>
</ul>

    </nav>


