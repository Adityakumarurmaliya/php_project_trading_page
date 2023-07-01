<?php

class Backend
{
    public $con;
    function __construct()
    {
        $this->con = mysqli_connect('localhost', 'u369267473_supremestox', 'Supremestox@1', 'u369267473_supremestox');
    }
    function login($email, $password)
    {
        $sql = "SELECT * from `users` WHERE email='$email' and password='$password'";
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result) > 0)
            return mysqli_fetch_assoc($result);
        else
            return false;
    }
    function getAllDemos()
    {
        $sql = 'SELECT * FROM `demo_requests` ORDER BY  `created_at` desc';
        return mysqli_query($this->con, $sql);
    }
    public function addDemoRequest($post)
    {
        $sql = "INSERT INTO `demo_requests` (`id`, `name`, `contact_no`, `email`, `segments`, `created_at`) VALUES (NULL, '$post[name]', '$post[contact_no]', '$post[email]', '$post[segments]', current_timestamp())";
        return mysqli_query($this->con, $sql);
    }
}
