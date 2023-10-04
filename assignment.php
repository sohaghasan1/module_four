<?php 

class product{
   // Add properties
    public int $ProductId;
    public string $ProductName;
    public float $ProductPrice;

    public function __construct(int $id,string $name,float $price)
    {
        // Initialize properties
        $this->ProductId = $id;
        $this->ProductName = $name;
        $this->ProductPrice = $price;
    }
   // Add getFormattedPrice method
    public function getFormattedPrice(){
        return "$" . number_format($this->ProductPrice, 2);
    }
    //Add showDetails method
    public function showDetails(){
        echo "Product Details: <br>";
        echo "- ID: " . $this->ProductId . "<br>";
        echo "- Name: ". $this->ProductName . "<br>";
        echo "- Price: ". $this->getFormattedPrice() . "\n";
    }


}

$product = new product( 1, "T-shirt", 19.99);
echo $product->showDetails();