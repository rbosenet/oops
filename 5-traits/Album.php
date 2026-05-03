<?php 
require_once "Printable.php";
class Album implements SongHolder {
    use Printable; // use the trait
    private $songs = [];
    public function addSong(Song $song ):void{
        $this->songs[] = $song;
    }
    public function getSongs():array{
        return $this->songs;
    }
}




?>