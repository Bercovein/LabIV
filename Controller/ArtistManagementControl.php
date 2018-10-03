<?php 
namespace Controller;

require_once("Config/Autoload.php");
use Model\Artist as Artist;
use DAO\DAOArtist as DAOArtist;

class ArtistManagementControl{

	private $daoArtist;
	protected $message;

	public function __construct ()
        {
           $this->daoArtist= DAOArtist::getInstance();
        }

	public function index()
    {
        if(!empty($this->message))
            echo '<script language="javascript">alert("' . $this->message . '");</script>'; 
               
        require(ROOT.'Vista/ArtistManagement.php');
    }

    public function newArtist($artisticName){

		$artist = new Artist();
		$artist->setArtisticName($artisticName);
		$this->daoArtist->add($artist);

		$this->index();
	}

	public function deleteArtist($name){
		if(isset($this->daoArtist)){
			
			$artist= new Artist();
			$artist->setArtisticName($name);
			$this->daoArtist->delete($artist);
		}
		else echo 'no hay artistas';
	}

	public function updateArtist(){

	}

}

?>

<!--
	if($_POST){

		session_start();

		if(!isset($_SESSION["ArtistManagement"])){
			$DAOArtist = new DAOArtist();
		}else
			$DAOArtist = $_SESSION["ArtistManagement"];

		$value = $_POST;
		$message = "";

		$name = isset($value["artistName"]) ? $value["artistName"] : "";

		$artist = new Artist();
		$artist->setArtisticName($name);

		$DAOArtist->add($artist);

		$_SESSION["ArtistManagement"] = $DAOArtist;

		$DAOArtist->getAll();

		$message = "Artist succesfully added.";
		echo $message;
	}
	else if ($_GET)
		$message=isset($_GET['message'])? $_GET['message'] : "";
	else
		echo "Ha ocurrido un error al procesar el artista";
-->

<!--
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<a href="../../Vista/ArtistManagement.php"><button>Regresar</button></a>
	</body>
</html>

-->