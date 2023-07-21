<?php 

class ParentClass {
    public function method(string $name){
        
    }
}

class ChildClass extends ParentClass{

    // tidak bisa mengoverride function dengan mengubah parameter nya
    public function method(int $name)
    {
        
    }
}
