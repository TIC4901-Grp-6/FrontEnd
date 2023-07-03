<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
class DB {
	
	
	public $tableName = 'videos';
	
	function __construct(){
		// Database configuration
		$dbHost = 'localhost';
		$dbUsername = 'root';
		$dbPassword = 'mysql';
		$dbName = 'youtube_video';
		
		// Connect database
		$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
		if($conn->connect_error){
			die("Failed to connect with MySQL: " . $conn->connect_error);
		}else{
			$this->db = $conn;
		}
	}
	
	function getLastRow(){
		$sql = "SELECT * FROM $this->tableName ORDER BY video_id DESC LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->fetch_assoc();
		if($result){
			return $result;
		}else{
			return false;
		}
	}
	
	function insert($AgentRegistrationNo, $videoTitle, $videoDesc, $videoTags, $videoFilePath){
		$sql = "INSERT INTO $this->tableName (AgentRegistrationNo, video_title, video_description, video_tags, video_path) 
				VALUES('".$AgentRegistrationNo."','".$videoTitle."','".$videoDesc."','".$videoTags."','".$videoFilePath."')";
		if($this->db->query($sql)){
			return $this->db->insert_id;
		}else{
			return $this->db->error;
		}
	}
	
	function update($video_id,$youtube_video_id){
		$sql = "UPDATE  $this->tableName SET youtube_video_id = '".$youtube_video_id."' WHERE video_id = ".$video_id;
		$this->db->query($sql);
		return true;
	}
}
?>