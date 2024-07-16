<?php

class database
{
    public $db;
    function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
    }
    public function deleteid($id)
    {

        $sql2 = "select email from users where id='$id';";
        $r2 = mysqli_query($this->db, $sql2);
        $row = mysqli_fetch_assoc($r2);
        $email = $row['email'];
        $sql = "delete from users where id='$id';";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {
            die("error :" . mysqli_error($this->db));
        }
        return $email;
    }
    public function updateid($id, $fname, $lname, $email)
    {

        if (
            $fname == "" || empty($fname) || $lname == "" || empty($lname) ||
            $email == "" || empty($email)
        ) {
            header("location:update.php?msg=fill all the details");
        } else {
            $sql = "update users set firstName='$fname',lastName='$lname',email='$email' where id='$id';";

            $result = mysqli_query($this->db, $sql);
            if (!$result) {
                die("error:" . mysqli_error($this->db));
            } else {
                return $email;
            }
        }
    }
    public function insertid($fname, $lname, $email, $password)
    {
             $sql = "INSERT INTO users (firstName,lastName,email,pword,adminRuser) 
            VALUES('$fname','$lname','$email','$password',0 );";
           
            $result = $this->db->query($sql);

            if (!$result) {

                die("error:" . mysqli_error($this->db));
            } else {

                return $email;
            }
        


    }
}
$database = new database();

class database2
{
    public $db;
    function __construct()
    {
        $this->db = mysqli_connect("localhost", "root", "Anil2645@", "mydb");
    }
    public function insertid($id, $email, $dtaken, $uid)
    {

        $sql = "UPDATE files set  u_id='$uid', dateTaken='$dtaken',dateSubmit= NULL, Status= 1   where id=$id;";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {

            die("error:" . mysqli_error($this->db));
        } else {

            return $email;
        }
    }

    public function deleteid($book,$email,$dsubmit)
    {

        $sql = "UPDATE files set  u_id = null ,  dateSubmit='$dsubmit', status= 0 WHERE bookName='$book'; ";
        $result = mysqli_query($this->db, $sql);
        if (!$result) {

            die("error:" . mysqli_error($this->db));
        } else {

            return $email;
        }
    }
}
$database2 = new database2();