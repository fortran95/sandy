<?
interface Database{
    public function querySQL(string $sql);
    public function doSQL(string $sql);
}

class MySQL implements Database{
    public function __construct($server,$user,$pass,$dbname){
        $this->con = mysql_connect($host,$user,$pass);
        mysql_select_db($dbname,$this->con);
    }
    public function querySQL(string $sql){
        mysql_query($sql, $this->con);
    }
    public function doSQL(string $sql){
        $query_resource = mysql_query($sql, $this->con);
        $ret = array();
        while($row = mysql_fetch_array($query_source))
            $ret[] = $row;
        mysql_free_result($query_resource);
        return $ret;
    }
}
?>
