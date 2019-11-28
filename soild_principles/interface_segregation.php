<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
 -----------------------------------------------
|    File Name   : single_responsibility.php    |
|    Author      : Sonveer Singh                |
|    Date        : 18 Oct 2019                  |
 -----------------------------------------------

* No client should be forced to depend on methods it does not use.
* One fat interface need to be split to many smaller and relevant interfaces so that clients can know about the interfaces that are relevant to them.

*/

//----------------------------------------------- example w/o interface segragation -----------------------------------------------//

interface Printer{
    public function PrintContent($task);
    public function ScanContent($task);
    public function FaxContent($task);
    public function PhotocopyContent($task);
    public function PrintDuplexContent($task);
}

class HPLaserJet implements Printer{
    public function PrintContent($task = "Print Done"){
        echo $task;
        return true;
    }
    public function ScanContent($task = "Scan Done"){
        echo "Scan Done";
        return true;
    }
    public function FaxContent($task = "Fax Done"){
        echo "Fax Done";
        return true;
    }
    public function PhotocopyContent($task = "Photocopy Done"){
        echo "Photocopy Done";
        return true;
    }
    public function PrintDuplexContent($task = "Print Duplex Done"){
        echo "Print Duplex Done";
        return true;
    }
}

// when new printer CanonMG2470 comes it have to implement all methods of interface printer despite that CanonMG2470 can't perform Fax task.//
// When a new feature comes due to any reason then all the classes implementing the interface have to forcibly implement the new method.

class CanonMG2470 implements Printer{
    public function PrintContent($task = "Print Done"){
        echo $task;
        return true;
    }
    public function ScanContent($task = "Scan Done"){
        echo "Scan Done";
        return true;
    }
    public function FaxContent($task){
        return true;
    }
    public function PhotocopyContent($task = "Photocopy Done"){
        echo "Photocopy Done";
        return true;
    }
    public function PrintDuplexContent($task = "Print Duplex Done"){
        echo "Print Duplex Done";
        return true;
    }
}

//----------------------------------------------- example of interface segragation -----------------------------------------------//

interface Printer2{
    public function PrintContent($task);
    public function ScanContent($task);
    public function PhotocopyContent($task);
}

interface PrinterDuplex{
    public function PrintDuplexContent($task);
}

interface PrintFax{
    public function FaxContent($task);
}


