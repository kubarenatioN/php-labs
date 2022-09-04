<?
    if(session_status() != PHP_SESSION_ACTIVE) session_start();
    $user = $_SESSION["user"];
?>

<div class='container'>
    <h2 class='title'>Добро пожаловать, <? echo $user; ?></h2>
    <div class="content">
        <a href="https://www.figma.com/file/sujL3cEALXjIwO187rkADt/Digital-King?node-id=67%3A776" class="content__item" target="blank">
            Digital King. Minimalism.
        </a>
        <a href="https://www.figma.com/file/IB0rebpnQjXQNdS4nxbxeu/DK-Promo?node-id=0%3A1" class="content__item" target="blank">
            Digital King. Promo.
        </a>
        <a href="https://www.figma.com/file/mNfyezkmtxs06O77YKi91w/DK-Retro?node-id=0%3A1" class="content__item" target="blank">
            Digital King. Retro.
        </a>
        <a href="https://www.figma.com/file/JQUtuKzKnc5eAoel23DoXp/DK-Glassmorphism?node-id=0%3A1" class="content__item" target="blank">
            Digital King. Glassmorphism.
        </a>
        <a href="https://www.figma.com/file/dQfv5bFwiCXI6dm7e7xeWu/DK-Metro?node-id=0%3A1" class="content__item" target="blank">
            Digital King. Metro.
        </a>
        <a href="./projects/glass/index.php" class="content__item" target="blank">
            Digital King. Glass.dev.
        </a>
    </div>
</div>