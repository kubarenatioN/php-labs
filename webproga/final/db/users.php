<?

    function insert_user($name, $surname, $login, $password, $email, $phone, $gender) {
        $salt = mt_rand(100, 999);
        $time = date("Y-m-d H:i:s", time());
        $password = md5(md5($password).$salt);
        $query = "insert into users (name, surname, login, password, salt, email, phone, gender, reg_date, last_act) values ('$name', '$surname', '$login', '$password', '$salt', '$email', '$phone', '$gender', '$time', '$time')";
        return $query;
    }

    function read_user($login) {
        $q = "select * from users where login='$login'";
        return $q;
    }

?>