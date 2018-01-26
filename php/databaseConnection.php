<?php

class dbQuery{

private $conn=null;

   public function connectionCreate(){
       $connStr = "host=localhost port=5432 dbname=Physio user=postgres password=Ankit@14";

     //  $connStr = "host=ec2-54-163-237-249.compute-1.amazonaws.com port=5432 dbname=d4ucfaumbk3u81 user=ydghjefozwkojz password=4231b3cded77c91dda7ec677dcd3f96844d672721effc474708a4e830e8ac4b3";
       $this->conn = pg_connect($connStr);
   }

   public function addPatient($data){

       $name = trim($data['name']);
        $address = trim($data['address']);
        $contactinfo = $data['contactinfo'];
        $reference = trim($data['reference']);
        $age= $data['age'];
       //var_dump($data);
        if(strlen($contactinfo) ==0){
            $contactinfo=0000;
        }
       if(strlen($age) ==0){
           $age=0000;
       }
      $sql="INSERT INTO \"patient\" (\"name\",\"address\",\"contact\",\"reference\",\"age\") VALUES ('$name','$address',$contactinfo,'$reference',$age)";
       $result = pg_query($this->conn,$sql);
   }


    public function updatePatient($data){

        $id = $data['id'];
        $name = trim($data['name']);
        $address = trim($data['address']);
        $contactinfo = $data['contactinfo'];
        $reference = trim($data['reference']);
        $age= $data['age'];
        if(strlen($contactinfo) ==0){
            $contactinfo=0000;
        }
        if(strlen($age) ==0){
            $age=0000;
        }
        echo $sql="update \"patient\" set \"name\"= '$name',\"address\" = '$address',\"contact\" = $contactinfo
,\"reference\" = '$reference' ,\"age\" = $age where \"id\" = $id";

        $result = pg_query($this->conn,$sql);
    }







    function getPatientEnrolementDetail($id){
       $obj = array();
       $sql="Select * from enrolement where patient_id =".$id. "order by year DESC, month DESC, day DESC";
       $result = pg_query($this->conn,$sql);
       while($row =  pg_fetch_row($result)){
           //obj = new Object();
           $objTemp = array();
           $objTemp['id']=$row[7];
           $objTemp['description']=trim($row[1]);
           $objTemp['visit']=$row[2];
           $objTemp['fee']=$row[3];
           $objTemp['year']=$row[4];
           $objTemp['month']=$row[5];
           $objTemp['day']=$row[6];
           //$objTemp['address']=$row[1];
           array_push($obj,$objTemp);
           // $obj.push($row);
           //var_dump($row[0]);
       }

       // var_dump($obj);
       return $obj;
   }


    function getPatientEnrolementForm($id){
        $obj = array();
        $sql="Select * from enrolement where id =$id";
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //obj = new Object();
            $objTemp = array();
            $objTemp['id']=$row[7];
            $objTemp['description']=trim($row[1]);
            $objTemp['visit']=$row[2];
            $objTemp['fee']=$row[3];
            $objTemp['year']=$row[4];
            $objTemp['month']=$row[5];
            $objTemp['day']=$row[6];
            array_push($obj,$objTemp);
        }
        return $obj;
    }



    function getPatientVisitDetail($id){
        $obj = array();
        $sql="Select * from treatment where enrolement_id =".$id. "order by year DESC, month DESC, day DESC";
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //obj = new Object();
            $objTemp = array();
            $objTemp['id']=$row[6];
            $objTemp['enrolement_id']=$row[0];

            $objTemp['fee']=$row[1];
            $objTemp['status']=$row[2];
            $objTemp['year']=$row[3];
            $objTemp['month']=$row[4];
            $objTemp['day']=$row[5];
            //$objTemp['address']=$row[1];
            array_push($obj,$objTemp);
            // $obj.push($row);
            //var_dump($row[0]);
        }

        // var_dump($obj);
        return $obj;


    }



    function getVisitByID($id){
        $obj = array();
        $sql="Select * from treatment where id =".$id;
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            $objTemp = array();
            $objTemp['id']=$row[6];
            $objTemp['enrolement_id']=$row[0];
            $objTemp['fee']=$row[1];
            $objTemp['status']=$row[2];
            $objTemp['year']=$row[3];
            $objTemp['month']=$row[4];
            $objTemp['day']=$row[5];
            array_push($obj,$objTemp);
        }
        return $obj;
    }




    public function addPatientVisit($data){

        $enrolementID= $data['enrolementID'];
        $fee = $data['fee'];
        $status = $data['status'];
        $date = $data['date'];
        $date= explode("-",$date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];


        echo $sql="INSERT INTO \"treatment\" (\"enrolement_id\",\"amount\",\"status\",\"year\",\"month\",\"day\") VALUES ($enrolementID,$fee,$status,$year,$month,$day)";
        $result = pg_query($this->conn,$sql);
    }


    public function updateVisit($data){
        $id= $data['id'];
        $fee = $data['fee'];
        $status = $data['status'];
        $date = $data['date'];
        $date= explode("-",$date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];
        echo $sql="Update \"treatment\"  set \"amount\" = $fee ,\"status\" = $status, \"year\" = $year ,\"month\" = $month,\"day\" = $day where \"id\" = $id";
        $result = pg_query($this->conn,$sql);
    }


    public function addPatientEnrolment($data){
        $description = trim($data['description']);
        $visits = $data['visits'];
        $fee = $data['fee'];
        $PatientID= $data['PatientID'];
        $date = $data['date'];
        $date= explode("-",$date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];

        if(strlen($fee) ==0){
            $fee=00;
        }
        if(strlen($visits) ==0){
            $visits=00;
        }
        $sql="INSERT INTO \"enrolement\" (\"patient_id\",\"description\",\"visits\",\"total_fee\",\"year\",\"month\",\"day\") VALUES ($PatientID,'$description',$visits,$fee,$year,$month,$day)";
        $result = pg_query($this->conn,$sql);
    }



    public function updatePatientEnrollment($data){

        $id = $data['id'];
        $description = trim($data['description']);
        $visits = $data['visits'];
        $fee = $data['fee'];
        $date = $data['date'];
        $date= explode("-",$date);
        $year = $date[0];
        $month = $date[1];
        $day = $date[2];

        if(strlen($fee) ==0){
            $fee=00;
        }
        if(strlen($visits) ==0){
            $visits=00;
        }


        echo $sql="update \"enrolement\" set \"description\"= '$description',\"visits\" = $visits,\"total_fee\" = $fee,\"year\" = $year ,\"month\" = $month,\"day\" = $day where \"id\" = $id";

        $result = pg_query($this->conn,$sql);
    }





    public function getPatientList(){


        $obj = array();

        $sql="Select id, name from patient order by name";
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //obj = new Object();
            $objTemp = array();
            $objTemp['id']=$row[0];
            $objTemp['name']=trim($row[1]);
            array_push($obj,$objTemp);
           // $obj.push($row);
            //var_dump($row[0]);
        }


        return $obj;

    }


    public function getPatientDetail($id){


        $obj = array();

        $sql="Select * from patient where id =".$id;
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //obj = new Object();
            $objTemp = array();
            $objTemp['id']=trim($row[0]);
            $objTemp['name']=trim($row[1]);
            $objTemp['address']=trim($row[2]);
            $objTemp['contact']=trim($row[3]);
            $objTemp['age']=trim($row[5]);
            $objTemp['reference']=trim($row[4]);
            //$objTemp['address']=$row[1];
            array_push($obj,$objTemp);
            // $obj.push($row);
            //var_dump($row[0]);
        }

       // var_dump($obj);
        return $obj;

    }



    public function visitsRange($from,$to){
        $date= explode("-",$from);
        $yearFrom = $date[0];
        $monthFrom = $date[1];
        $dayFrom = $date[2];

        $date= explode("-",$to);
        $yearTo = $date[0];
        $monthTo = $date[1];
        $dayTo = $date[2];


        $obj = array();

        $sql="Select * from \"treatment\" where \"year\" Between $yearFrom and $yearTo and \"month\" Between $monthFrom and $monthTo and \"day\" between $dayFrom and $dayTo" ;
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //
            $objTemp = array();
            $objTemp['enrolement_id']=$row[0];
            $objTemp['fee']=$row[1];
            $objTemp['status']=$row[2];
            $objTemp['year']=$row[3];
            $objTemp['month']=$row[4];
            $objTemp['day']=$row[5];
            $objTemp['id']=$row[6];
            array_push($obj,$objTemp);
        }
        return $obj;
    }



    function enrolmentRange($enrollmentID){
        $enrollmentID = implode(', ', $enrollmentID);
        $obj = array();
        echo $sql="Select * from enrolement where id in ($enrollmentID)";
        $result = pg_query($this->conn,$sql);
        while($row =  pg_fetch_row($result)){
            //obj = new Object();
            $objTemp = array();
            $objTemp['id']=$row[7];
            $objTemp['description']=trim($row[1]);
            $objTemp['visit']=$row[2];
            $objTemp['fee']=$row[3];
            $objTemp['year']=$row[4];
            $objTemp['month']=$row[5];
            $objTemp['day']=$row[6];
            array_push($obj,$objTemp);
        }
        return $obj;
    }




}




?>