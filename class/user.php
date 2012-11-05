<?
class User{
    public function __construct($userid,
                                $username,
                                $rawpass){
        $this->userid = $userid;
        $this->username = $username;

        $this->jabber = $this->getJabberAccounts();
    }
    public function getUsername(){
        return $this->username;
    }
    private function getJabberAccounts(){
    }
}
?>
