<?php
    require_once __DIR__."/db_module.php";
    class user{
        public $id;
        public $name;
        public $sex;
        public $dob;
        public $phone;
        public $email;
        public $password;

        function __construct($id, $name, $sex, $dob, $phone, $email, $password)
        {
            $this->id = $id;
            $this->name = $name;
            $this->sex = $sex;
            $this->dob = $dob;
            $this->phone = $phone;
            $this->email = $email;
            $this->password = $password;
        }
    }
    class tbl_user{
        function GetUser($cond='1'){
            $class = null;
            $sql = null;
            $query = "SELECT * FROM tbl_user WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new user($item['id'],$item['name'],$item['sex'],$item['dob'],$item['phone'],$item['email'],$item['password']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>