<?php
    //require 'matematica.php';
    require 'vendor/autoload.php';
    
    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    // create a log channel
    
    $log = new Logger('teste');
    $log->pushHandler(new StreamHandler('teste.log', Level::Warning));
    echo 'requered';
    // add records to the log
    $log->warning('Foo');
    $log->error('Bar');

    /*spl_autoload_register(function($class){
        if (file_exists($class.'php')) {
            require $class.'php';
        }
        
    });*/
    /*$m = new Matematica();
    $valor = $m->somar(10, 20);
    echo $valor;
    
    /*class Post{
        private int $id;
        private int $likes = 0;

        public function setId($i){
            $this->id = $i;
        }

        public function getId(){
            return $this->id;
        }

        public function setLikes($n){
            $this->likes = $n;
        }

        public function getlikes(){
            return $this->likes;
        }
    }

    class Foto extends Post{
        private $url;
        
        public function _construct($ids){
            $this->setId($ids);
        }

        public function setUrl($u){
            $this->url = $u;
        }

        public function getUrl(){
            return $this->url;
        }

    }

    $foto = new Foto(20);
    $foto->setLikes(12);  
    $foto->setUrl('abc');

    echo "FOTO: # - ".$foto->getlikes()." Likes - url ".$foto->getUrl();
    */

    /*class Matematica
    {
        public static string $nome = "Willians";
        public static function somar($x1,$x2){
            return $x1 + $x2;
        }
        
    }

    echo Matematica::somar(10,20);
    echo Matematica::$nome;*/
?>