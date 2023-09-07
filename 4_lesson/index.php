<?php

class User
{
  public $username;
  public $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->username just added a new friend";
  }
}

$userOne = new User('imhilla', 'imhilla@gmail.com');
$userTwo = new User('clement', 'clement@gmail.com');

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend();

echo $userTwo->username . '<br>';
echo $userTwo->email . '<br>';
echo $userTwo->addFriend();

?>
<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>