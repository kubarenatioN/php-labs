<?php

    if (session_id() === "") {
        session_start();
    }
    // print_r($_SESSION);
    // echo "<br>"; 
    $user = $_SESSION["user"];
    echo "<h3>Здравствуйте, $user</h3>";
    // echo session_id()."<br>";
    // echo "<br>";

    $form = "
    <form action='test-check.php' method='POST'>
        <input 
        required 
        name='name' 
        placeholder='Имя'
        pattern='[\x{0400}-\x{04FF}\w]+' />
        <input 
        required 
        name='surname' 
        placeholder='Фамилия'
        pattern='[\x{0400}-\x{04FF}\w]+' />
        <input 
        required 
        name='email' 
        placeholder='Email'
        pattern='\w+@\w+\.\w+' />
        <input 
        required 
        name='phone' 
        placeholder='Телефон'
        pattern='\d{7}' />

        <h3>Тест \"Насколько хорошо ты знаешь 11-2\"</h3>

        <div class='question'>
            <p>1. Что Глебу нравится больше</p>
            <div>
                <label><input checked name='gleb' type='radio' value='PHP'/>PHP</label><br>
                <label><input name='gleb' type='radio' value='JavaScript'/>JavaScript</label><br>
                <label><input name='gleb' type='radio' value='Web design'/>Web design</label><br>
                <label><input name='gleb' type='radio' value='Motion Design'/>Motion Design</label><br>
            </div>
        </div>
        <div class='question'>
            <p>2. Чем занимается Никита после пар</p>
            <div>
                <label><input name='nikita[]' type='checkbox' value='Моет полы'/>Моет полы</label><br>
                <label><input name='nikita[]' type='checkbox' value='Пьет кофе'/>Пьет кофе</label><br>
                <label><input name='nikita[]' type='checkbox' value='Читает Достоевского'/>Читает Достоевского</label><br>
                <label><input name='nikita[]' type='checkbox' value='Пишет код'/>Пишет код</label><br>
            </div>
        </div>
        <div class='question'>
            <p>3. Какие цветы любит Марина</p>
            <div>
                <select name='flowers[]' multiple size='5'>
                    <option>Гвоздики</option>
                    <option>Розы</option>
                    <option>Пионы</option>
                    <option>Тюльпаны</option>
                    <option>Ромашки</option>
                </select>
            </div>
        </div>
        <div class='question'>
            <p>4. Кто спел песню для Ани</p>
            <div>
                <select name='song'>
                    <option>Slava Marlow</option>
                    <option>Justin Bieber</option>
                    <option>Ed Sheeran</option>
                    <option>MORGENSHTERN</option>
                </select>
            </div>
        </div>
        <div class='question'>
            <p>5. Любимый шрифт Дианы</p>
            <div>
                <input name='font' />
            </div>
        </div>
        <div class='question'>
            <p>6. Имена людей со знаком зодиака \"Близнецы\" (через пробел)</p>
            <div>
                <textarea name='siblings'>

                </textarea>
            </div>
        </div>

        <button type='submit'>Отправить</button>
    </form>
    ";

    echo $form;

?>