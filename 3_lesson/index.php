<?php

class User
{
  public $username = 'ryu';
  public $email = 'ryu@thenetninja.co.uk';

  public function addFriend()
  {
    return "$this->username just added a new friend";
  }
}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br>';
echo $userOne->email . '<br>';
echo $userOne->addFriend() . '<br>';

$userTwo->username = 'Hillary kiptoo';
$userTwo->email = 'kiptoo@gmail.com';

echo $userTwo->email . '<br>';
echo $userTwo->addFriend() . '<br>';
echo $userTwo->username . '<br>';

print_r(get_class_methods('User'))
  ?>
<html lang="en">

<head>
  <title>PHP OOP</title>
</head>

<body>

</body>

</html>