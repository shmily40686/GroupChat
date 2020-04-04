<?php 
class user {
  private $UserId,$UserName,$UserMail,$UserPassword;
  
  public function getUserId() {
    return $this["UserId"];
  }
  public function setUserId($UserId) {
      $this["UserId"] = $UserId;
  }

  public function getUserName() {
    return $this["UserName"];
  }
  public function setUserName($UserName) {
      $this["UserName"] = $UserName;
  }

  public function getUserMail() {
    return $this["UserMail"];
  }
  public function setUserMail($UserMail) {
      $this["UserMail"] = $UserMail;
  }

  public function getUserPassword() {
    return $this["UserPassword"];
  }
  public function setUserPassword($UserPassword) {
      $this["UserPassword"] = $UserPassword;
  }

  public function InsertUser() {
      include "connect.php";
      $req=$bdd->prepare("INSERT INTO users(username,email,password) VALUES($UserName,$UserMail,$UserPassword)");
      $req->execute(array(
          "UserName" =>$this->getUserName(),
          "UserMail" =>$this->getUserMail(),
          "UserPassword" =>$this->getUserPassword()
      ));
  }
}
?>