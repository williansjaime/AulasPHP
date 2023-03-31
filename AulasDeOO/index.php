<?php
    class Post
    {
        public int $like = 0;
        public array $comments = [];
        private string $autor;

        public function aumentarLikes(){
            $this->like++;
        }
        public function setAutor($n){
            $this->autor = ucfirst($n);
        }
        public function getAutor(){
            return $this->autor ?? 'Visitante';
        }
    }

    $post =  new Post();
    $post->aumentarLikes();
    $post->setAutor('willians jaime');
    $post2 = new Post();
    $post2->aumentarLikes();
    

    echo "POST 1:".$post->like." -likes- ".$post->getAutor()."<br>";
    echo "POST 2:".$post2->like."<br>";
?>