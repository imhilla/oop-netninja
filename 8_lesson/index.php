<?php
class User
{
  public $username;
  private $email;
  public $role = 'member';

  public function __construct($username, $email)
  {
    $this->email = $email;
    $this->username = $username;
  }

  public function addFriend()
  {
    return "$this->username just added a friend";
  }

  public function message()
  {
    return "$this->email sent a message";
  }

  public function getEmail()
  {
    return "$this->email";
  }

  public function setEmail($username)
  {
    if (strpos($username, '@') > -1) {
      $this->email = $username;
    }
  }
}

class AdminUser extends User
{
  public $level;
  public $role = 'admin';

  public function __construct($username, $email, $level)
  {
    parent::__construct($username, $email);
    $this->level = $level;
  }

  public function message()
  {
    return "an admin sent a new message";
  }
}

$userOne = new User('hillary', 'hillary@yahoo.com');
$userTwo = new User('clement', 'clement@yahoo.com');
$userThree = new AdminUser('sly', 'sly@yahoo.com', 5);

echo $userOne->role . "<br>";
echo $userThree->role . "<br>";

echo $userOne->message() . "<br>";
echo $userThree->message() . "<br>";


?>
<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>