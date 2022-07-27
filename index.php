
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

    $terminator = new Movie('Terminator', 'Action', 'Unrestricted');
    $terminator->likes = 8888;
    $terminator->setAccessibility();

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

    <h1> <?php echo $terminator->title?> </h1>
    <div> <?php echo $terminator->getAccessibility() ?> </div>
    
</body>
</html>