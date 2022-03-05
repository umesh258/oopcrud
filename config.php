<?php


class Admin
{
    public $que;
    private $host ="localhost";
    private $uname ="root";
    private $pass = "";
    private $dbname ="workerfinder";
    private $mysqli='';

    public function __construct()
    {
        $this->mysqli = new mysqli($this->host,$this->uname,$this->pass,$this->dbname);
    }

    public function insert($table,$condition_arr)

    {
        if($condition_arr != '')
        {
            foreach($condition_arr as $key=>$val)
            {
                $table_field[] = $key;
                $table_val[] = $val;
            }
            $field = implode(",",$table_field);
            $val = implode("','",$table_val);
            $val = "'".$val."'";
            
            $sql = "insert into $table($field) value($val) ";
            $result = $this->mysqli->query($sql);
            if($result > 0)
                {
                echo "<script>alert('Record Inserted');</script>";
                }

        }
    }

    public function select($table,$field='*',$condition_arr='')
    {
        $sql = "select $field from $table ";

        if($condition_arr != '')
        {
            $sql .= " where ";
            $c = count($condition_arr);
            $i = 1;
            foreach($condition_arr as $key=>$val)
            {
                if($i == $c)
                {
                    $sql .= "$key = '$val'";
                }else
                {
                    $sql .= "$key = '$val' and ";
                }
                $i++;
            }
            $result = $this->mysqli->query($sql);
              
        }


        $result = $this->mysqli->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $data[] = $row;
            }
            return $data;
        }else
        {
            return 0;
        }
    }
    public function delete($table,$condition_arr)
    {
        $sql = "delete from $table where ";

        if($condition_arr != '')
        {
            foreach($condition_arr as $key=>$val)
            {
                $sql .="$key = '$val'";
            }
            $result = $this->mysqli->query($sql);
            
            if($result)
            {
                
                echo "<script>alert('record Deleted');</script>";
                
            }
        }
    }
    public function update($table,$condition_arr,$where_field,$where_val)
    {
        $sql = "update $table set ";
        if($condition_arr != '')
        {
            $c = count($condition_arr);
            $i = 1;
            foreach($condition_arr as $key=>$val)
            {
                if($i == $c)
                {
                    $sql .= "$key ='$val'";
                }else
                {
                    $sql .= "$key ='$val' ,";
                }
                $i++;
            }
            $sql .= " where $where_field='$where_val'";
           
              $result = $this->mysqli->query($sql);
            
              if($result)
              {
                   
                echo "<script>alert('record Updated ');</script>";
              }
                
          }
    }
}


?>