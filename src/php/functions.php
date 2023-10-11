<?php


function nav_item(string $link, string $name, string $active){
    return <<<HTML
    <li class="nav-item "><a href="$link" class="nav-link  $active" >$name</a></li>
HTML;
}

function is_nav_active($link){
    $script_name = $_SERVER['SCRIPT_NAME'];
   return  ($link === $script_name) ? 'active' : '';
}

function is_header() : bool{//si l'utilisateur est dasn la navigation 'book'
    $script_name = $_SERVER['SCRIPT_NAME'];
    return ($script_name === '/index.php') ? true : false;
}

function get_email(){
    if (!empty($_POST['subscriber_email'])){
        setcookie('subscriber_email', $_POST['subscriber_email']);
        return $_COOKIE['subscriber_email'];
    }
}

function book_flight(array $datas, string $index ){
  
    if (!empty($index)){
        foreach ($datas as $k => $data){

            if ((int)$index === (int)$k + 1){ //si l'utilisateur clique sur le x boutton
                $datas[$k]['booked'] = true;
                save_index($index);
            }
        }
        return $datas;
    }
    return $datas;

}

function save_index($index){//enregistrer l'index dasn un fichier 
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'index_data';
    file_put_contents($file, $index);
}

function load_last_index(){//charger le dernier index dans le fichier 
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'index_data';
    return file_get_contents($file);
}

function set_index(int $index){
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'index_data';
    file_put_contents($file, $index);
}


function render_booked_list(array $datas){//affiche la liste des reservations de l'utilisateur
    if (!empty($datas)){
        foreach($datas as $data){
            if ($data['booked']){
                return $data;
            }
        }
    }
    return false;
}


function save_user_info($email, $name, $password){
    $user_info = $email . ' '.$name . ' '. $password;
    echo dump($user_info);
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'user_info';
    file_put_contents($file, $user_info);
}

function load_user_info(){
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'user_info';
    return explode(' ',file_get_contents($file));//on met les info dans un tableau explode(' ', ..)

}

function delete_user_info(){
    $file = dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . 'data'. DIRECTORY_SEPARATOR .'user_info';
    file_put_contents($file, '');
}

function dump($var){
    echo "<pre>";
    echo var_dump($var);
    echo "</pre>";
}