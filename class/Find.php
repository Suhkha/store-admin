<?php 
class Find{

    public function find($id){
                //-- return all query and use the object result in update product
                return $find = mysql_query("SELECT id, name, sku, category, price, description FROM module WHERE id = '".$id."' LIMIT 1");

            }

}
?>