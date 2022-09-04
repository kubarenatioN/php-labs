<?php

    $menuItems = [
        "Home" => "home.html",
        "About" => "about.html",
        "Contacts" => "contacts.html"
    ];

    $menu = "<nav class='menu'><ul class='menu__list'>";
    
    foreach ($menuItems as $name => $link) {
        $menu .= "<li class='menu__item'><a 
        href=$link
        class='menu__link'>$name</a></li>";
    }

    $menu .= "</ul></nav>";

    echo $menu;
?>