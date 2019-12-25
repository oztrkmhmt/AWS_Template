<?php

class Utils{
    
    public function milliSecondToDateTime($requestTimE){
        $this->userModel->GetLoginDetails();
        $mil = $_SESSION['logindetails']['requestTime']; // $requestTime
        $seconds = $mil / 1000;
        echo date("d/m/Y H:i:s", $seconds);
        $requestTimE = $seconds;
        
    }
}
