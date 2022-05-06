<?php 
  /**
   * Classe per definire le specifiche di ogni singolo movie
   */
  class Movie {
    public $title;
    public $overview;
    public $originalLanguage;
    public $year;
    public $genres;
    public $casts;    
    public $pathImage;

    public function __construct($_title, $_overview, $_originalLanguage, $_year, $_genres, $_casts, $_pathImage = null){
      $this->title = $_title;
      $this->overview = $_overview;
      $this->originalLanguage = $_originalLanguage;
      $this->year = $_year;
      $this->genres = $_genres;
      $this->casts = $_casts;
      $this->pathImage = $_pathImage;
    }

    /**
     * Metodo public che restituisce un array contenente tutte le info del movie
     */
    public function movieInfo(){
      return $movie = [
        $this->title,
        $this->overview,
        $this->originalLanguage,
        $this->year,
        $this->genres,
        $this->casts,
        $this->pathImage
      ];
    }
  }

  // Istanza dell'oggetto 'Movie'
  $movie = new Movie('Natale in India', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis cum nam temporibus inventore animi maxime accusamus natus beatae voluptates aliquid. Dolores, laborum beatae? Inventore similique, facilis illo alias exercitationem consequuntur.', 'it_IT', 2003, 'Commedia', 'questo è il cast', 'https://pad.mymovies.it/filmclub/2003/12/015/locandina.jpg');

  // Seconda istanza dell'oggetto 'Movie'
  $movieTwo = new Movie('Back to the Future', 'Eighties teenager Marty …Brown - return to 1985.', 'en_EN', 1985, 'Avventura, Fantascienza, Action', 'questo è il cast', 'https://www.salani.it/libri/ritorno-al-futuro-9788893675666/image_preview');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <!-- Stampo le proprietà dell'oggetto '$movie' -->
    <div class="movie-card">
      <img src="<?= $movie->pathImage ?>" alt="<?= $movie->title ?>" class="movie-img">
      <h3 class="movie-title"><?= $movie->title ?></h3>
      <p class="movie-description"><?= $movie->overview ?></p>
      <span class="movie-year"><?= $movie->year ?></span>
      <span class="movie-region"><?= $movie->originalLanguage ?></span>
      <span class="movie-genres"><?= $movie->genres ?></span>
      <pre class="movie-cast"><?= $movie->casts ?></pre>
    </div>
    <!-- Stampo le proprietà dell'oggetto '$movieTwo' -->
    <div class="movie-card">
      <img src="<?= $movieTwo->pathImage ?>" alt="<?= $movieTwo->title ?>" class="movie-img">
      <h3 class="movie-title"><?= $movieTwo->title ?></h3>
      <p class="movie-description"><?= $movieTwo->overview ?></p>
      <span class="movie-year"><?= $movieTwo->year ?></span>
      <span class="movie-region"><?= $movieTwo->originalLanguage ?></span>
      <span class="movie-genres"><?= $movieTwo->genres ?></span>
      <pre class="movie-cast"><?= $movieTwo->casts ?></pre>
    </div>
  </div>
</body>
</html>
