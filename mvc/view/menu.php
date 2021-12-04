<?php
    include '../model/menu.php';
?>        
        
<ul class="menu nav">
    <li class="nav-item">
        <a class="home nav-link" href="<?php echo $href.$menu[0]?>"><?php echo $menu[0]?></a>
    </li>
    <li class="nav-item">
        <a class="links nav-link" href="<?php echo $href.$menu[1]?>"><?php echo $menu[1]?></a>
    </li>
    <li class="nav-item">
        <a class="contacts nav-link" href="<?php echo $href.$menu[2]?>"><?php echo $menu[2]?></a>
    </li>
</ul>