<?php
// class for holding functions and logic for filtering by provider option

class Providers extends Email
{
    // get the list of providers
    function getProviders(): array
    {
        $allData = array();
        $stmt = $this->getInfo();
        while($row = $stmt->fetch()) {
            $allData[] = $row;
        }

        $emails = array();
        foreach($allData as $data){
            array_push($emails, $data['email']);
        }

        foreach($emails as $key => $val) {
            $new = explode('@',$val);
            $providers[$key] = $new;
        }

        $filterArray = array();
        foreach($providers as $d){
            array_push($filterArray, $d[1]);
        }

        return array_unique($filterArray);
    }

    // filter by provider
    public function filterByProvider($provider, $this_page_first_result, $results_per_page){

        $this->setTable('subscribed');
        $table = $this->getTable();

        $this->setEmail('email');
        $email = $this->getEmail();

        $this->setDate('date');
        $date = $this->getDate();

        $sql = "SELECT * FROM " . $table;
        $sql .= " WHERE " . $email;
        $sql .= " LIKE '%$provider%' ";
        $sql .= " ORDER BY " . $date;
        $sql .= " ASC LIMIT " . $this_page_first_result;
        $sql .= "," . $results_per_page;
        $stmt = $this->fetch()->query($sql);
        return $stmt;
    }

    // count number of rows of selected provider
    public function getNumberOfRowsByProvider($provider){
        $this->setTable('subscribed');
        $table = $this->getTable();

        $this->setEmail('email');
        $email = $this->getEmail();

        $sql = "SELECT * FROM " . $table;
        $sql .= " WHERE " . $email;
        $sql .= " LIKE '%$provider%' ";
        $stmt = $this->fetch()->query($sql);
        return $stmt->rowCount();
    }
}
