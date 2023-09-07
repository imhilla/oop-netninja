<?php
class User
{
  public $username;
  private $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->username just added a new friend";
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($username)
  {
    if (strpos($username, '@') > -1) {
      $this->email = $username;
    }
  }
}

$userOne = new User('imhilla', 'imhilla@gmail.com');
$userTwo = new User('clement', 'clement@gmail.com');

echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';


$userTwo->setEmail('userTwo@gmail.com');
echo $userTwo->getEmail() . '<br>';

?>

<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>