<?php
// class for forms validation

class Validation extends Email
{

    public function showErrorMessage()
    {
        $this->setEmail($_POST['inputEmail']);
        $email = $this->getEmail();

        if (isset($_POST['submit'])) {
            if (empty($email) || $email === "")
            {
                echo "<div>Email address is required</div>";
            }else{
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<div>Please provide a valid e-mail address</div>";
                } else {
                    if (!isset($_POST['checkboxName'])) {
                        echo "<div>You must accept the terms and conditions</div>";
                    } else {
                        if (preg_match("/^[^ ]+@[^ ]+\.[co]{2}$/", $email)) {
                            echo "<div>We are not accepting subscriptions from Colombia
emails</div>";
                        }
                    }
                }
            }
        }
    }

    public function validate()
    {
        $this->setEmail($_POST['inputEmail']);
        $email = $this->getEmail();

        if (isset($_POST['submit'])) {
            if (!empty($email) || $email != "") {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if (isset($_POST['checkboxName'])) {
                        if (!preg_match("/^[^ ]+@[^ ]+\.[co]{2}$/", $email)) {
                            $this->addNewEmail();
                        }
                    }
                }
            }
        }
    }

}
