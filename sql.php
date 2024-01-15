<?php
class SQL {
    private $conn;
    private $servername;
    private $db_username;
    private $db_password;
    private $databaseName; 
    
    public function __construct($servername = "localhost", $db_username = "root",$db_password = "",$databaseName = "chip_db"){
        $this->conn = new mysqli($servername, $db_username, $db_password, $databaseName);
        if ($this->conn->connect_error) {
            $this->error('Failed to connect to DB - '.$this->conn->connect_error);
        }
    }

    public function checkIfUsernameExists($username){
        $username = mysqli_real_escape_string($this->conn, $username);
        $myQuery = "SELECT * FROM users WHERE username= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if($result->num_rows == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function createNewUser($usernameForm, $nameForm, $encyptedPass){
        try{
            $usernameForm = mysqli_real_escape_string($this->conn, $usernameForm);
            $nameForm = mysqli_real_escape_string($this->conn, $nameForm);
            $encyptedPass = mysqli_real_escape_string($this->conn, $encyptedPass);

            $stmt = $this->conn->prepare("INSERT INTO users (username, name, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $usernameForm, $nameForm, $encyptedPass);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function getPassword($username){
        $username = mysqli_real_escape_string($this->conn, $username);
        $myQuery = "SELECT password FROM users WHERE username= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        $row = mysqli_fetch_assoc($result);
        
        if(isset($row["password"]))
        {
            return $row["password"];
        }
        else
        {
            return -1;
        }
    }

    public function insertContact($name, $email, $message){
        
        try{
            $name = mysqli_real_escape_string($this->conn, $name);
            $email = mysqli_real_escape_string($this->conn, $email);
            $message = mysqli_real_escape_string($this->conn, $message);

            $stmt = $this->conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $name, $email, $message);
            $stmt->execute();
            
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function insertFeedback($name, $email, $gender, $age, $rating){
        
        try{
            $name = mysqli_real_escape_string($this->conn, $name);
            $email = mysqli_real_escape_string($this->conn, $email);
            $gender = mysqli_real_escape_string($this->conn, $gender);
            $age = mysqli_real_escape_string($this->conn, $age);
            $rating = mysqli_real_escape_string($this->conn, $rating);

            $stmt = $this->conn->prepare("INSERT INTO feedback (name, email, gender, age, rating) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $gender, $age, $rating);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function lookForEmailInFeedback($email){
        $email = mysqli_real_escape_string($this->conn, $email);
        $myQuery = "SELECT id FROM feedback WHERE email= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        if($result->num_rows == 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function getFeedbackByEmail($email){
        $email = mysqli_real_escape_string($this->conn, $email);
        $myQuery = "SELECT * FROM feedback WHERE email= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function deleteUser($username, $userid){ 
        $SQL = new SQL();
        try{
            $SQL->deleteSession($userid);
            $username = mysqli_real_escape_string($this->conn, $username);
            $myQuery = "DELETE FROM users WHERE username= ?";
            $stmt = $this->conn->prepare($myQuery);
            $stmt->bind_param("s",$username);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }
    
    public function insertLoginData($username, $date){
        try{
            $username = mysqli_real_escape_string($this->conn, $username);
            $stmt = $this->conn->prepare("INSERT INTO loginData (username, date) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $date);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function getUserProfile($username){
        $username = mysqli_real_escape_string($this->conn, $username);
        $myQuery = "SELECT * FROM users WHERE username= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public function getLastVisit($username){     
        $username = mysqli_real_escape_string($this->conn, $username);   
        $myQuery = "SELECT MAX(id) as max FROM loginData WHERE username= ?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $row = mysqli_fetch_assoc($result);
        $id = $row['max'];
        
        $id = mysqli_real_escape_string($this->conn, $id);   
        $myQuery = "SELECT date FROM loginData WHERE id=?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        $result = mysqli_fetch_assoc($result);
        return $result['date'];
    }

    public function getAllUserCount(){
        $myQuery = "SELECT COUNT(*) FROM users";
        $row = mysqli_fetch_array($result = $this->conn->query($myQuery));
        return $row[0];
    }

    public function getAllFeedback(){
        $myQuery = "SELECT * FROM feedback";
        $result = $this->conn->query($myQuery);
        return $result;
    }

    public function getAllUsers(){
        $myQuery = "SELECT * FROM users";
        $result = $this->conn->query($myQuery);
        return $result;
    }

    public function getAllContacts(){
        $myQuery = "SELECT * FROM contact";
        $result = $this->conn->query($myQuery);
        return $result;
    }

    public function getAllLogins(){
        $myQuery = "SELECT * FROM loginData";
        $result = $this->conn->query($myQuery);
        return $result;
    }

    public function getAllLoginsCustomUser($username){
        $username = mysqli_real_escape_string($this->conn, $username);
        $myQuery = "SELECT * FROM loginData WHERE username=?";
        $stmt = $this->conn->prepare($myQuery);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function getAllCars(){
        $myQuery = "SELECT * FROM cars";
        $result = $this->conn->query($myQuery);
        return $result;
    }

    public function changePass($username, $newPassword){
        try{
            $username = mysqli_real_escape_string($this->conn, $username);
            $newPassword = mysqli_real_escape_string($this->conn, $newPassword);
            $myQuery = "UPDATE users SET password=? WHERE username=?";
            $stmt = $this->conn->prepare($myQuery);
            $stmt->bind_param("ss", $newPassword, $username);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function deleteSession($session_userid){
        try{
            $myQuery = "DELETE FROM sessions WHERE session_userid =?";
            $stmt = $this->conn->prepare($myQuery);
            $stmt->bind_param("s",$session_userid);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    public function createSessionRecord($userid, $session_token, $session_serial, $session_date){
        $stmt = $this->conn->prepare("INSERT INTO sessions (session_userid, session_token, session_serial, session_date) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $userid, $session_token, $session_serial, $session_date);
        $stmt->execute();
        $stmt->close();
    }
}
?>