<?PHP
if (isset($_COOKIE['appname_theme'])) {
            unset($_COOKIE['yes']);
            unset($_COOKIE['yes']);
            setcookie('appname_theme', null, -1, '/');
            setcookie('appStore_', null, -1, '/');
            return true;
        } else {
            return false;
        }
?>