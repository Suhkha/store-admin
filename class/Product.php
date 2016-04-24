<?php
class Product{
    private $name;
    private $sku;
    private $category;
    private $description;

    //-- Initialize variables
    public function __construct($name, $sku, $category, $price, $description){
        $this->id               = $id;
        $this->name             = $name;
        $this->sku              = $sku;
        $this->category         = $category;
        $this->price            = $price;
        $this->description      = $description;

    }

    //-- List all products
    public function index(){
        $all = mysql_query("SELECT id, name, sku, price FROM module");     
        
        while($row = mysql_fetch_assoc($all)){
           $this->all[] = $row;
        }

        return $this->all; 
    }

    //-- Insert data from register form
    public function insert(){
        $save = mysql_query("INSERT INTO module (name, sku, category, price, description) 
                             VALUES ('".$this->name."', '".$this->sku."', '".$this->category."', '".$this->price."', '".$this->description."')")or die(mysql_error());
        if($save ==  true){  
            header("Location: new.php?status=ok");
            die();

        }else{

            header("Location:new.php?status=error");
            die();
        }

    }

    public function find($id){
            //-- return all query and use the object result in update product
            return $find = mysql_query("SELECT id, name, sku, category, price, description FROM module WHERE id = '".$id."' LIMIT 1");

        }

    
    public function update($id){
           $update = mysql_query("UPDATE module SET name = '".$this->name."', sku = '".$this->sku."', category = '".$this->category."', price = '".$this->price."', description = '".$this->description."' WHERE id = '".$id."'");

            if($update ==  true){  
                header("Location: all.php?status=ok");
                die();

            }else{

                header("Location:all.php?status=error");
                die();
            }
        }

    public function delete($id){
        $delete = mysql_query("DELETE FROM module WHERE id = '".$id."' LIMIT 1")or die(mysql_error());

            //-- Alerts to display for each case: success or error
            if($delete == true ){
                header("Location:all.php?status=deleted");
                die();
            }else{
                header("Location:all.php?status=error");
                die();
            }
    }
    }

?>