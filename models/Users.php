<?php

class Users extends model 
{
	public function insertUser($url, $name, $email, $password)
	{		
		$stmt = $this->conn->prepare("INSERT INTO users(url, name, email, password) VALUES(:URL, :NAME, :EMAIL, :PASSWORD)");
		$stmt->bindParam(":URL", $url);
		$stmt->bindParam(":NAME", $name);
		$stmt->bindParam(":EMAIL", $email);
		$stmt->bindParam(":PASSWORD", $password);
		$stmt->execute();
		return $this->conn->lastInsertId();
	} 

	public function userInfo($id_user)
	{
		$array = [];
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE id = :ID");
		$stmt->bindParam(":ID", $id_user);
		$stmt->execute();

		if ($stmt->rowCount() > 0) {
			$array = $stmt->fetchAll();
		}

		return $array;
	}
}
