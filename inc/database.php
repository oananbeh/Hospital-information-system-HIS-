<?php

class db
{
private $tabel;
public function __construct($name_tabel)
{
  $this->tabel=$name_tabel;
}
    
   function insert($data)
   {
       include("./inc/include.php");
       if(is_array($data))
       {
           foreach($data as $key=>$value)
           {
               $kyes[]='`'.$key.'`';
               $values[]=$value;
           }
           $tabelKye=implode($kyes,",");
           $tabelvalu='"'.implode($values,'","').'"';
          $sql="insert into $this->tabel($tabelKye) values($tabelvalu)";
          $result=  mysqli_query($link, $sql) or die(mysqli_error($link));
          if($sql)
          {
              //$this->msg("Insert ok");
              return true;
          }
            else {
             // $this->msg("Error in insert");
                return false;
                   }
                 }
       else
       {
          throw new Exception("Error:date is nor arry"); 
       }
       //insert the data into array 
       
   }
   
 function deleteById($id,$value)
    { include("./inc/include.php");
      $query="delete from `$this->tabel` where `$id`='$value'";
      
        if(!$sql=mysqli_query($link,$query))
        {
            throw new Exception("Error:Not Delete");
        }
        else
        {
          return true;    
        }
    }
    
function msg($text)
   {
    echo '<script>alert("'.$text.'");</script>';
   }
   
function check($column,$value)
{   include("./inc/include.php");
    $sql="select * from $this->tabel where $column='$value' ";
    $result=  mysqli_query($link, $sql);
    if( $row= mysqli_num_rows($result)>=1)
    {
        return true;
    }
 else {
         return false;    
    }
}
function checkby($column)
{   include("./inc/include.php");
if(is_array($column))
{
    foreach ($column as $key=>$value)  
    {
        $fild[]="`".$key."`"." = "."'".$value."'";
        
    }
    
     $format="+-*/";
   $sql=  implode($fild, " and ");
   
   $sql="select * from $this->tabel where $sql";
  
    $result=  mysqli_query($link, $sql) or die (mysqli_error($link));
    if( $row= mysqli_num_rows($result)>=1)
    {
        return true;
    }
 else {
         return false;    
    }
   
   
}
}
function show()
{
  
        include("./inc/include.php");   
        $sql="select * from $this->tabel";
        $result=  mysqli_query($link, $sql);
        $num=  mysqli_num_rows($result);
        if($num>=1)
        {
        for($i=0;$i<$num;$i++)
        {
         $data[$i]=mysqli_fetch_array($result);
        }
        return $data;
        }
         else {
            return FALSE;
               }
       
 }
 function showby($column,$value)
{
  
        include("./inc/include.php");   
        $sql="select * from $this->tabel where ";
        $sql.="`".$column."`"."='$value'"; 

        $result=  mysqli_query($link, $sql);
        
        $num=  mysqli_num_rows($result);
        if($num>=1)
        {
        for($i=0;$i<$num;$i++)
        {
         $data[$i]=mysqli_fetch_array($result);
        }
        return $data;
        }
         else {
            return FALSE;
               }
       
 }
 //for this Project
 
 function showbyGroup($column,$value)
{
  
        include("./inc/include.php");   
        $sql="select * from $this->tabel where ";
        $sql.="`".$column."`"."='$value'"; 
        $sql.="GROUP BY Id_Drugs  DESC";
        $result=  mysqli_query($link, $sql);
        
        $num=  mysqli_num_rows($result);
        if($num>=1)
        {
        for($i=0;$i<$num;$i++)
        {
         $data[$i]=mysqli_fetch_array($result);
        }
        return $data;
        }
         else {
            return FALSE;
               }
       
 }
 
 //
 function show_multi($column)
{   include("./inc/include.php");
if(is_array($column))
{
    foreach ($column as $key=>$value)  
    {
        $fild[]="`".$key."`"." = "."'".$value."'";
        
    }
    
     $format="+-*/";
   $sql=  implode($fild, " and ");
   
   $sql="select * from $this->tabel where $sql";
   $result=  mysqli_query($link, $sql) or die (mysqli_error($link));
   
   $num=  mysqli_num_rows($result);
        if($num>=1)
        {
        for($i=0;$i<$num;$i++)
        {
         $data[$i]=mysqli_fetch_array($result);
        }
        return $data;
        }
         else {
            return FALSE;
               }
}}
   

function delete($colom,$id)
{
     include("./inc/include.php");
   $sql="delete from $this->tabel where $colom='$id'";
   
   $result=  mysqli_query($link, $sql); 
   return true;
}

   function update($data,$colom,$id)
   {
       include("./inc/include.php");
       if(is_array($data))
       {
           
           $sql="UPDATE $this->tabel SET ";
           foreach ($data as $key=>$data)
           {
             $sql.="`".$key."`='".$data."',";
           }
           $format="+-*/";
           $sql.=$format;
           $sql=  str_replace(",".$format, " ", $sql);
           $sql.=" where $colom='$id'";
           
           $query=  mysqli_query($link, $sql);
           if($query)
           {
              return true;
           }
           else
               {
          return false; 
              }
           
       }  
       
   }
   function updateMulti($data,$colom)
   {
       include("./inc/include.php");
       if(is_array($data))
       {
           
           $sql="UPDATE $this->tabel SET ";
           foreach ($data as $key=>$data)
           {
             $sql.="`".$key."`='".$data."',";
           }
           $format="+-*/";
           $sql.=$format;
           $sql=  str_replace(",".$format, " ", $sql);
           
           //
              foreach ($colom as $key=>$value)  
                    {
                        $fild[]="`".$key."`"." = "."'".$value."'";

                    }

                   $where=  implode($fild, " AND ");

           
           //
           $sql.=" where $where ";
          
           $query=  mysqli_query($link, $sql);
           if($query)
           {
              return true;
           }
           else
               {
          return false; 
              }
           
       }  
       
   }
function get_ip() {
//Just get the headers if we can or else use the SERVER global
if ( function_exists( 'apache_request_headers' ) ) {
$headers = apache_request_headers();
} else {
$headers = $_SERVER;
}
//Get the forwarded IP if it exists
if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
$the_ip = $headers['X-Forwarded-For'];
} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
) {
$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
} else {
$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
}
return $the_ip;
} 
}

