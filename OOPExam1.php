<?php 

class shape{
    public $perimeter;
    public $area;
}

class rectangle extends shape{
    public function perimeter($kenar_kisa,$kenar_uzun){
        $this->perimeter = ($kenar_kisa+$kenar_uzun)*2;
        return $this;
    }
    public function area($kenar_kisa,$kenar_uzun){
        $this->area = ($kenar_kisa*$kenar_uzun);
        return $this;
    }
}

class square extends shape{
    public function perimeter($kenar_kisa,$kenar_uzun){
        $this->perimeter = ($kenar_kisa+$kenar_uzun)*2;
        return $this;
    }
    public function area($kenar_kisa,$kenar_uzun){
        $this->area = ($kenar_kisa*$kenar_uzun);
        return $this;
    }
}

class triangle extends shape{
    public function perimeter($kenar_kisa,$kenar_uzun,$kenar_3){
        $this->perimeter = ($kenar_kisa+$kenar_uzun+$kenar_3);
        return $this;
    }
    public function area($taban,$yukseklik){
        $this->area = ($taban*$yukseklik)*0.5;
        return $this;
    }
}

$rectangle = new rectangle();
$square = new square();
$triangle = new triangle();


echo "Rectangle Perimeter : ".$rectangle->perimeter(5,25)->perimeter."<br/>";
echo "Rectangle Area : ".$rectangle->area(5,25)->area."<br/>";

echo "Square Perimeter : ".$square->perimeter(5,25)->perimeter."<br/>";
echo "Square Area : ".$square->area(5,25)->area."<br/>";

echo "Triangle Perimeter : ".$triangle->perimeter(5,25,5)->perimeter."<br/>";
echo "Triangle Area : ".$triangle->area(5,25)->area."<br/>";


?>
