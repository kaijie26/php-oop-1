
<?php
    class Movie {
        public $title;

        public $genre;

        public $likes;

        public $accessibility;

        public $vision;

        public function __construct($_title, $_genre, $_vision){
            $this->title = $_title;
            $this->genre = $_genre;
            $this->vision = $_vision;

        }

        public function setAccessibility() {
            if($this->vision === 'Unrestricted') {
                $this->accessibility = 'Visione aperta a tutti';

            }else{
                $this->accessibility = 'Visione per un pubblico adulto';

            } 
        }

        public function getAccessibility() {
            return $this->accessibility;
        }


    }

    $myMovies = [];

    $terminator = new Movie('Terminator', 'Action', 'Unrestricted');
    $terminator->likes = 8888;
    $terminator->setAccessibility();
    $myMovies[] = $terminator ;

    $armagedon = new Movie('Armagedon', 'Fantasy', 'Restricted');
    $armagedon->likes = 9999;
    $armagedon->setAccessibility();
    $myMovies[] = $armagedon ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>I miei film</h1>

    <?php foreach($myMovies as $movie) { ?>

        <div>
            <h2> <?php echo $movie->title; ?> </h2>
            <div> Genere: <?php echo $movie->genre; ?> </div>
            <div> Likes: <?php echo $movie->likes; ?> </div>
            <div> Visione: <?php echo $movie->vision; ?> </div>
            <div> Accessibilità: <?php echo $movie->getAccessibility(); ?> </div>

        </div>

    <?php }?>
    
</body>
</html>