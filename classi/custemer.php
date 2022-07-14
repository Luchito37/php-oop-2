<?php
class Customer
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $email;
    protected $registred;


    function __construct($_name, $_lastName, $_age, $_email, $_registred)
    {
        $this->setName($_name);
        $this->setLastName($_lastName);
        $this->setAge($_age);
        $this->setEmail($_email);
        $this->setRegistred($_registred);
    }
    /**
     * Get the value of name
     */
    public function getName()
    {

        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        if (strlen($this->name) < 3) {
            $this->name = "not enough longer";
        } else {
            $this->name = $name;
        }


        return $this->name = $name;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */
    public function setLastName($lastName)
    {
        if (strlen($this->lastName) < 3) {
            $this->lastName = "not enough longer";
        } else {
            $this->lastName = $lastName;
        }

        return $this->lastName = $lastName;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */
    private function setAge($age)
    {

        if (!is_numeric($this->age)) {
            $this->age = "pls insert a number";
        } else {
            $this->age = $age;
        }

        return $this->age = $age;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $chiocciola = strstr($email, "@");

        $punto = strstr($email, ".");

        if (!$chiocciola || !$punto) {
            return "Pls checked you email";
        } else {
            $this->email = $email;
        };


        return $this;
    }

    /**
     * Get the value of registred
     */
    public function getRegistred()
    {
        return $this->registred;
    }

    /**
     * Set the value of registred
     *
     * @return  self
     */
    public function setRegistred($registred)
    {

        $this->registred = $registred;

        return $this;
    }

    public function getFullName()
    {
        return  "UTENTE:" .  $this->name . " " . $this->lastName;
    }

    public function getFullCaratteristic()
    {
        return "<h2>Box Office :</h2> " . $this->boxOffice . "<h2>Data d'uscita:</h2>" . $this->dataUscita . " <h2>Durata :</h2>" . $this->durata;
    }

    public function printCard()
    {
        $nome = $this->getFullName();
        $eta = $this->getAge();
        $email = $this->getEmail();
        $registrazione = $this->registred;

?>

        <div class="container mt-5">
            <div class="row ">
                <div class="col mb-5 text-center d-flex justify-content-around">
                    <div class="card bg-danger" style="width: 30rem;">
                        <div class="card-header">
                            <h1><?php echo $nome  ?></h1>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item ">
                                <div>
                                    <h2 class="d-inline-block">ETA' : </h2>
                                    <h4 class="d-inline-block"> <?php echo $eta  ?></h4>
                                </div>
                                <div>
                                    <h2 class="d-inline-block">EMAIL : </h2>
                                    <h4 class="d-inline-block"><?php echo $email  ?></h4>
                                </div>
                                <div>
                                    <h2 class="d-inline-block">STATUS : </h2>
                                    <h4 class="d-inline-block"><?php echo $registrazione  ?></h4>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>

<?php
    }
}
