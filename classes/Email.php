<?php
// class for holding functions and logic for interactions with table data

class Email extends Database
{
    private $date;
    private $email;
    private $table;
    
    public function setTable($table)
    {
        $this->table = $table;
    }
    public function getTable()
    {
        return $this->table;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getInfo()
    {
        $this->setTable('subscribed');
        $table = $this->getTable();

        $this->setDate('date');
        $date = $this->getDate();

        $sql = "SELECT * FROM " . $table . " ORDER BY " . $date . " ASC";
        $stmt = $this->fetch()->query($sql);
        return $stmt;
    }

    // prepare info and into table
    public function addNewEmail()
    {
        if (isset($_POST['submit'])) {

            $date = date("Y-m-d");
            $email = $_POST['inputEmail'];

            $data['date'] = $date;
            $data['email'] = $email;

            $this->insertNewEmail($data);
        }
    }

    // add info into table
    public function insertNewEmail($data)
    {
        $this->setTable('subscribed');
        $table = $this->getTable();

        $this->setEmail('email');
        $email = $this->getEmail();

        $this->setDate('date');
        $date = $this->getDate();

        $queryText = "INSERT INTO " . $table. " (" . $date. ", " . $email . ") VALUES(:date, :email)";

        $this->query($queryText);

        $this->bind(':date', $data['date']);
        $this->bind(':email', $data['email']);

        if ($this->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // delete data from the table
    public function deleteEmail($id)
    {
        $this->setTable('subscribed');
        $table = $this->getTable();

        $this->query("DELETE FROM " . $table . " WHERE id = :id");
        $this->bind(':id', $id);

        if($this->execute())
        {
            return true;
        }else{
            return false;
        }
    }

}
