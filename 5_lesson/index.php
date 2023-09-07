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
    return "$this->username just added a friend";
  }
}

$userOne = new User('imhilla', 'imhilla@gmail.com');
$userTwo = new User('clement', 'clement@gmail.com');

echo $userOne->email;
echo $userTwo->email;

?>
<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>