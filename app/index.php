<?php

$dbh = new PDO(
  "mysql:host=db; dbname=yoga_email; charset=utf8", 
  "root",
  "root",
   [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
   ]
);
echo 'hello yoga_email db';


class Form{
  public string $name;
  public string $surname;
  public string $email;



  /**
   * Get the value of name
   *
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @param string $name
   *
   * @return self
   */
  public function setName(string $name): self
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of surname
   *
   * @return string
   */
  public function getSurname(): string
  {
    return $this->surname;
  }

  /**
   * Set the value of surname
   *
   * @param string $surname
   *
   * @return self
   */
  public function setSurname(string $surname): self
  {
    $this->surname = $surname;

    return $this;
  }

  /**
   * Get the value of email
   *
   * @return string
   */
  public function getEmail(): string
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @param string $email
   *
   * @return self
   */
  public function setEmail(string $email): self
  {
    $this->email = $email;

    return $this;
  }
};

//yoga_email = db
//form = table
//name, surname, email = columns

$sth = $dbh->prepare("SELECT * FROM form");

//Exécuter la requete
$sth ->execute();



//lIRE PLUSIEURS LIGNES pour le tableau de personnes
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
for ($i=0; $i < count ($result) ; $i++) { 
    $a = new Form;
    $results[$i]=$a->setName($result[$i]['name'])
                -> setSurname($result[$i]['surname'])
                -> setEmail($result[$i]['email']);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yoga_email_db</title>
</head>

<body>
    <?php foreach($result as $value) : ?>
   <p>name : <b><?= $value['name'] ?></b></p>
   <p>surname : <b><?= $value["surname"] ?></b></p>
   <p>email : <b><?= $value["email"] ?></b></p>
   <?php endforeach; ?>
</body>
</html>



