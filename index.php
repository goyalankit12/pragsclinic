<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prags Physio Clinic Patient Portal</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Plugin CSS
    <link rel="stylesheet" href="device-mockups/device-mockups.min.css">
-->
<!--    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- Custom styles for this template -->
    <link href="css/new-age.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--  <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
-->


    <script>


    </script>


  </head>


  <body id="page-top" onload="patientListpopulate()" >



    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Prags Pyhsiotherapy Clinic</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#newPatient">New Patient</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#enroll">Enrole</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Visit</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>







    <!-- New Patient add -->


    <div class="col-12" align="center">
      <h2><b>Add New Patient</b></h2>
        <button data-toggle="collapse" data-target="#newPatient" aria-expanded="false" aria-controls="newPatient"  class="btn btn-info" ><span class='glyphicon glyphicon-plus'></span>Add New Patient</button>
    </div>
    <br/><br/>
      <div class="collapse download bg-primary text-center" id="newPatient">
        <div class="container">
          <div class="row"><br/><br/>
           <div class="form-group alert alert-danger col-lg-7 offset-lg-3" id="NewPatientError"> </div>
          </div>
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="container col-sm-12 ">
                </br>
                  <form class="form-horizontal" action="">
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Name:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="name"  placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Address:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="address"  placeholder="Adress">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" >Age:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="age" placeholder="Age">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-3" >contact:</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="contactinfo" placeholder="Contact" name="contact">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3">Reference:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="reference" placeholder="reference" name="reference">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="offset-3 col-7">
                        <button type='button' onclick="submitPateintAddForm()" class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Submit</button>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-5 col-sm-7">
                        <div id="success_patientADD"></div>
                      </div>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<br/><br/>
    <div class=" features text-center col-12 text-center">
      <div class="container">
        <div class="row">
            <h2 class=" col-sm-12 offset-lg-3  col-lg-6" ><b> Search Patient</b></h2>
        </div>
          <div class="row">
      <div  class=" col-sm-12 offset-lg-3  col-lg-6 alert alert-danger" id="SearchPatientError"> </div>
    </div>
      </div>
    </div>

    <div class="features text-center" id="enrole">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 mx-auto">
           <h2  class="section-heading">Search Patient</h2>
           <hr>
           <div class="container col-sm-12 col-lg-12 col-md-12">
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Search Patient
              </button>
              <div class="dropdown-menu" id="PatientList" aria-labelledby="dropdownMenuButton"></div>
            </div>
            <input type="hidden" class="form-control" id="patientID">
             <br/>
             <br/>

             <div class="col-sm-12 col-lg-12">
               <button  id="treatmentEnrolment" onclick="TreatmentEnrolmentForm()" class="btn btn-success" ><span class='glyphicon glyphicon-plus'></span>Start </button>
               <button  id="patientHistory" onclick="PreviousEnrolements()" class="btn btn-info" ><span class='glyphicon glyphicon-search'></span>History</button>
            </div>
           </div>
        </div>
      </div>
      </div>

    </div>

  </br></br>

    <div class="bg-light text-center" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 mx-auto">
    <table class="table table-user-information">
      <tbody>
      <tr>
        <td>Name:</td>
        <td id="enrolmentforTreatment_patientName" ></td>
      </tr>
      <tr>
        <td>Contact</td>
        <td id="enrolmentforTreatment_contact"></td>
      </tr>
      <tr>
        <td>Age</td>
        <td id="enrolmentforTreatment_age"></td>
      </tr>

      <tr>
      <tr>
        <td>Address</td>
        <td id="enrolmentforTreatment_address"  ></td>
      </tr>
      <tr>
        <td>Reference</td>
        <td id="enrolmentforTreatment_reference"  ></td>
      </tr>
      </tbody>
    </table>
        <button onclick="patientProfileEditForm()"  class="btn btn-info" ><span class='glyphicon glyphicon-edit'></span>Edit</button>
          </div>
        </div>
      </div>
    </div>

  </br></br>

<!-- Edit Patient Profile -->
    <div class="collapse download bg-primary text-center" id="patientProfile_edit">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <div class="container col-sm-12 ">
              <div class="col-12" align="center">
                <h2><b>Update Patient Profile</b></h2>
              </div>
              </br>
              <form class="form-horizontal" action="">
                <div class="form-group alert alert-danger offset-2 col-12" id="PatientError_edit"> </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Name:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="name_edit"  placeholder="Name">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Address:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="address_edit"  placeholder="Adress">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Age:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="age_edit" placeholder="Age">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3" >contact:</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="contactinfo_edit" placeholder="Contact" name="contact">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3">Reference:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="reference_edit" placeholder="reference" name="reference">
                  </div>
                </div>
                <div class="form-group">
                   <div class="offset-3 col-7">
                    <button type='button' onclick="submitPateintupdateForm_edit()" class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Update</button>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-sm-offset-5 col-sm-7">
                    <div id="success_patient_updated_edit"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <br/><br/>
    <!-- Enrolemnt for treatment -->
    <div class="collapse download bg-primary text-center" id="enrolmentforTreatment">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h3><b>Start Treatment</b></h3>
            <br/>
            <br/>
            <div class="container col-sm-12 ">
              <form class="form-horizontal" action="">
                <div class="form-group col-sm-12">
                  <div class="form-group alert alert-danger" id="enrolmentforTreatment_error"> </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3" >Description:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_description"  placeholder="Description">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Visits:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_visits"  placeholder="visits">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Total Fee:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_fee" placeholder="Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Date:</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="enrolmentforTreatment_date" placeholder="date" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-3 col-7">
                    <button type='button' onclick="submitPateintenrolmentTreamentForm()" class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Submit</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-3 col-7">
                    <div id="Treament_enrolled"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>





    </br></br>

    <div class="collapse bg-light" class="features" id="PatientTreatmentHistory">
      <div class="container">
        <div class="section-heading text-center">
          <h3><b>Patient History</b></h3>
          <hr>
        </div>
        <table id="EnrolmentHistory" class="table table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Desc</th>
            <th scope="col">Visits</th>
            <th scope="col">Fee</th>
            <th scope="col">Date Enrolled</th>
            <th scope="col">Edit</th>
            <th scope="col">Add</th>
          </tr>
          </thead>
          <tbody id=EnrolmentHistory_Body" ></tbody>
        </table>
      </div>
    </div>


    <!-- update treatment -->

  <br/><br/>
    <div class="collapse download bg-primary text-center" id="enrolmentforTreatment_edit">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h3><b>Update Treatment</b></h3>
            <br/>
            <br/>
            <div class="container col-sm-12 ">
              <form class="form-horizontal" action="">


                <div class="form-group col-sm-12">
                  <div class="form-group alert alert-danger" id="enrolmentforTreatment_edit_error"> </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3" >Description:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_description_edit"  placeholder="Description">
                  </div>
                </div>
                <div class="form-group">



                  <input type="hidden" class="form-control" id="treatmentID_edit">

                  <label class="control-label col-sm-3" >Visits:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_visits_edit"  placeholder="visits">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Total Fee:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="enrolmentforTreatment_fee_edit" placeholder="Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Date:</label><div id="enrolmentforTreatment_dateDisplay_edit"> </div>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="enrolmentforTreatment_date_edit" placeholder="date" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-3 col-7">
                    <button type='button' onclick="submitPateintenrolmentTreamentForm_Update_edit()" class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Update</button>
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-5 col-7">
                    <div id="Treament_enrolled_edit"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <br/><br/>

    <div class="collapse bg-white text-center" id="PatientVisitstHistory">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h3><b>Patient Visits</b></h3>
              <hr>
            </div>
            <table id="PatientVisitstHistoryTable" class="table table-striped">
              <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">amount</th>
                <th scope="col">status</th>
                <th scope="col">Date Enrolled</th>
                <th scope="col">Edit</th>
              </tr>
              </thead>
              <tbody id=PatientVisitstHistoryTable_body" ></tbody>
            </table>
          <h5><b>Total Fee:</b></h5><div class="alert alert-info" id="totalFee">0</div>
        </div>
        <br/><br/>
        <div  class=" bg-primary row">
          <div class="col-md-8 mx-auto">
            <h3><b>Enter Visit</b></h3>
            <div class="container col-sm-12 ">


                <div class="offset-3 col-9">

                  <div class="form-group alert alert-danger" id="visitAddError"> </div>
              </div>




              <form class="form-horizontal" action="/action_page.php">
                <input type="hidden" class="form-control" id="enrolementID_visit"  placeholder="Description">



                <div class="form-group">
                  <label class="control-label col-sm-5" >Description:</label>
                  <div class="col-sm-7">
                    <div id="description"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5" >Date Enrolled:</label>
                  <div class="col-sm-7">
                    <div id="dateEnroled"></div>
                  </div>
                </div>



                <div class="form-group">
                  <label class="control-label col-sm-3" >Fee:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fee_visit"  placeholder="Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Status:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="status_visit"  placeholder="Status of payment">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Date:</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="date_visit" placeholder="date" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-3 col-7">
                      <button type='button' onclick="submitVisitForm()"  class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



<!-- Visit Hostory -->
    <div class="collapse bg-white text-center" id="PatientVisitstHistory_edit">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
          </div>
        </div>
        <br/><br/>
        <div  class=" bg-primary row">
          <div class="col-md-8 mx-auto">
            <h3><b>Update Visit</b></h3>
              <div class="form-group alert alert-danger" id="visitAddError_edit"> </div>

              <form class="form-horizontal" action="">
                <input type="hidden" class="form-control" id="visitID_edit"  placeholder="">

                <div class="form-group">
                  <label class="control-label col-sm-3" >Fee:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="fee_visit_edit"  placeholder="Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Status:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="status_visit_edit"  placeholder="Status of payment">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-3" >Date:</label><div id="visit_dateDisplay_edit"> </div>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" id="date_visit_edit" placeholder="date" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="offset-3 col-7">
                      <button type='button' onclick="submitVisitForm_edit()"  class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Submit</button>

                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>



    <br/><br/>


    <!-- report -->


    <div class="col-12" align="center">
      <button data-toggle="collapse" data-target="#reports" aria-expanded="false" aria-controls="report"  class="btn btn-info" ><span class='glyphicon glyphicon-plus'></span>reports</button>
    </div>

    <div class="collapse bg-white text-center" id="reports">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h3><b>Reports</b></h3>
            <hr>
          </div>

          <div class="form-group alert alert-danger" id="reportError"> </div>
          <table id="reportTable" class="table table-striped">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">amount</th>
              <th scope="col">status</th>
              <th scope="col">Date Enrolled</th>
              <th scope="col">Edit</th>
            </tr>
            </thead>
            <tbody id=reportTable_body" ></tbody>
          </table>
          <form class="form-horizontal" action="">
            <div class="form-group">
              <label class="control-label col-sm-3" >From:</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="dateFrom" placeholder="date" >
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" >To:</label>
              <div class="col-sm-9">
                <input type="date" class="form-control" id="dateTo" placeholder="date" >
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-5 col-sm-7">
                <div class="col-sm-offset-5 col-sm-7">
                  <button type='button' onclick="generateReports()"  class='btn btn-info'><span class='glyphicon glyphicon-ok'></span>Submit</button>
                </div>
              </div>
            </div>
          </form>



        </div>

        </div>
    </div>





    <script>



      function reset(){
          document.getElementById("PatientError_edit").innerHTML="";
          document.getElementById("SearchPatientError").innerHTML=""
          document.getElementById("PatientError_edit").innerHTML="";
          document.getElementById("enrolmentforTreatment_edit_error").innerHTML="";
          document.getElementById("SearchPatientError").innerHTML="";
          document.getElementById("visitAddError").innerHTML="";
          document.getElementById("enrolmentforTreatment_error").innerHTML="";




          $('#enrolmentforTreatment').collapse("hide");
          $('#PatientTreatmentHistory').collapse("hide");
          $('#PatientVisitstHistory').collapse("hide");
          $('#PatientVisitstHistory_edit').collapse("hide");
          $('#enrolmentforTreatment_edit').collapse("hide");
          $('#patientProfile_edit').collapse("hide");
          $('#PatientTreatmentHistory').collapse("hide");
      }


        patientID="";
        //  patientName="";

        function patientListpopulate(){
            $.ajax({
                url: "php/getPatientList.php",
                type: 'GET',   //type is any HTTP method
                success: function (response) {
                    response=JSON.parse(response);
                    var dropdownTag = document.getElementById("PatientList");
                    while (dropdownTag.firstChild) {
                        dropdownTag.removeChild(dropdownTag.firstChild);
                    }
                    for(var i=0 ;i < response.length; i++) {
                        var aTag = document.createElement('a');
                        // aTag.setAttribute('href',"yourlink.htm");
                        aTag.setAttribute('onclick',"loadPatientDetails("+response[i]['id']+")");
                        aTag.innerHTML = response[i]['name']+"</br>";
                        aTag.className="dropdown-item";
                        aTag.style="cursor: pointer";
                        dropdownTag.appendChild(aTag);
                    }
               },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }


        function loadPatientDetails(id){
            reset();
            patientID=id;
            document.getElementById("patientID").value=id;
            $.ajax({
                url: "php/getPatientDetail.php",
                type: 'GET',
                data: {
                    id:patientID
                } ,//type is any HTTP method
                success: function (response) {
                    console.log("************"+response);
                    response=JSON.parse(response);
                    var enrolmentforTreatment_patientName_Tag = document.getElementById("enrolmentforTreatment_patientName");
                    enrolmentforTreatment_patientName_Tag.innerText=response[0]['name'];
                    document.getElementById("name_edit").value=response[0]['name'];

                    var enrolmentforTreatment_age_Tag = document.getElementById("enrolmentforTreatment_age");
                    enrolmentforTreatment_age_Tag.innerText=response[0]['age'];
                    document.getElementById("age_edit").value=response[0]['age'];

                    var enrolmentforTreatment_contact_Tag = document.getElementById("enrolmentforTreatment_contact");
                    enrolmentforTreatment_contact_Tag.innerText=response[0]['contact'];
                    document.getElementById("contactinfo_edit").value=response[0]['contact'];

                    var enrolmentforTreatment_address_Tag = document.getElementById("enrolmentforTreatment_address");
                    enrolmentforTreatment_address_Tag.innerText=response[0]['address'];
                    document.getElementById("address_edit").value=response[0]['address'];

                    var enrolmentforTreatment_reference_Tag = document.getElementById("enrolmentforTreatment_reference");
                    enrolmentforTreatment_reference_Tag.innerText=response[0]['reference'];
                    document.getElementById("reference_edit").value=response[0]['reference'];

                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }


        function submitPateintupdateForm_edit(){
            //reset();
            var patient = new Object();
            var errorMsg=""
            patient["id"]=document.getElementById("patientID").value;
            patient["name"] = document.getElementById("name_edit").value;
            patient["address"] = document.getElementById("address_edit").value;
            patient["contactinfo"] = document.getElementById("contactinfo_edit").value;
            patient["reference"] = document.getElementById("reference_edit").value;
            patient["age"] = document.getElementById("age_edit").value;
            if(patient["name"]=="" || patient["name"]==" " || patient["name"].length<=0 ){
                errorMsg="Please enter patient name!"
            }
            else if( isNaN(patient["contactinfo"])){
                errorMsg="Please enter valid contact info!"
            }
            else if( isNaN(patient["age"])){
                errorMsg="Please enter valid Age!"
            }
            if(errorMsg.length>0){
                document.getElementById("PatientError_edit").innerHTML=errorMsg;
                return false;
            }

            var patient = JSON.parse(JSON.stringify(patient))
            $.ajax({
                url: "php/UpdatePatient.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:patient
                } ,
                success: function (response) {
                    console.log(response);
                    $("#success_patient_updated_edit").html("<img width='15%' src='images/tick.svg' />");
                    document.getElementById("PatientError_edit").innerHTML="Updated successfully.";
                    patientListpopulate();
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }



        function check(){
            patientID=document.getElementById("patientID").value;
            if(patientID=="" || patientID==" " || patientID.length==0){
                document.getElementById("SearchPatientError").innerHTML="Please, Select Patient First."
                return false;
            }
            return true;
        }

        function TreatmentEnrolmentForm(){

            reset();
           if(check()){ $('#enrolmentforTreatment').collapse("show");}
        }
        function patientProfileEditForm(){
            reset();
            if(check()){ $('#patientProfile_edit').collapse("show");}
        }


        function enrolementUpdateFormPopulate(id){
            reset();
            $('#enrolmentforTreatment_edit').collapse("show");
            $.ajax({
                url: "php/getPatientEnrolementForm.php",
                type: 'GET',
                data: {
                    id:id
                } ,//type is any HTTP method
                success: function (response) {
                    response=JSON.parse(response);
                    document.getElementById("enrolmentforTreatment_description_edit").value=response[0]['description'];
                    document.getElementById("enrolmentforTreatment_visits_edit").value=response[0]['visit'];
                    document.getElementById("enrolmentforTreatment_fee_edit").value=response[0]['fee'];
                     date =response[0]['year']+"-";
                     if(response[0]['month']<10){
                         date+="0"+response[0]['month']+"-";
                     }
                     else{
                         date+=response[0]['month']+"-";
                     }
                    if(response[0]['day']<10){
                        date+="0"+response[0]['day'];
                    }
                    else{
                        date+=response[0]['day'];
                    }

                    document.getElementById("enrolmentforTreatment_date_edit").value=date;
                    document.getElementById("treatmentID_edit").value=response[0]['id'];
                    document.getElementById("enrolmentforTreatment_dateDisplay_edit").innerHTML=response[0]['day'].toString()+"/"+response[0]['month'].toString()+"/"+response[0]['year'].toString();
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }



        function submitPateintenrolmentTreamentForm_Update_edit(){
            var enrolment_Treament = new Object();
            var errorMsg="";
            enrolment_Treament["description"] = document.getElementById("enrolmentforTreatment_description_edit").value;
            enrolment_Treament["visits"] = document.getElementById("enrolmentforTreatment_visits_edit").value;
            enrolment_Treament["fee"] = document.getElementById("enrolmentforTreatment_fee_edit").value;
            enrolment_Treament["date"] = document.getElementById("enrolmentforTreatment_date_edit").value;
            enrolment_Treament["id"] = document.getElementById("treatmentID_edit").value;
            if(enrolment_Treament["date"]=="" || enrolment_Treament["date"]==" " ){
                errorMsg="Please enter a valid date!"
            }
            else if( isNaN(enrolment_Treament["fee"])){
                errorMsg="Please enter valid fee in numbers!"
            }
            else if( isNaN(enrolment_Treament["visits"])){
                errorMsg="Please enter number of visits in numbers!"
            }
            if(errorMsg.length>0){
                document.getElementById("enrolmentforTreatment_edit_error").innerHTML=errorMsg;
                return false;
            }
            var enrolment_Treament = JSON.parse(JSON.stringify(enrolment_Treament))
            $.ajax({
                url: "php/updatePatientEnrolment.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:enrolment_Treament
                } ,
                success: function (response) {
                  document.getElementById("enrolmentforTreatment_edit_error").innerHTML="Updated Successfully.";
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }





        function PreviousEnrolements(){
            reset();
            patientID=document.getElementById("patientID").value;
            if(patientID=="" || patientID==" " || patientID.length==0){
                document.getElementById("SearchPatientError").innerHTML="Please, Select Patient First."
                return false;
            }
            $('#PatientTreatmentHistory').collapse("show");
            $.ajax({
                url: "php/getPatientEnrolementDetail.php",
                type: 'GET',
                data: {
                    id:patientID
                } ,//type is any HTTP method
                success: function (response) {
                    response=JSON.parse(response);
                    var str ="";
                    for(var i=0 ;i < response.length; i++) {
                          var desc = response[i]['description'];
                         var dateEnroled =response[i]['day'].toString()+"/"+response[i]['month'].toString()+"/"+response[i]['year'].toString();
                     str+= "<tr><th scope='row'>"+(parseInt(i)+1) +"</th>"+
                                "<td>"+response[i]['description']+"</td>"+
                          "<td>"+response[i]['visit']+"</td>"+
                          "<td>"+response[i]['fee']+"</td>"+
                          "<td>"+dateEnroled+"</td>"+
                          "<td> <button type='button' class='btn-sm btn-info' onclick='enrolementUpdateFormPopulate("+response[i]['id']+")' ><span class='glyphicon glyphicon-edit'></span></button>"+"</td>"+
                          "<td> <button  type='button' class='btn-sm btn-info' onclick='loadVisits("+response[i]['id']+","+dateEnroled+")' ><span class='glyphicon glyphicon-plus'></span></button>"+"</td>"+
                        "</tr>"
                    }
                    $("#EnrolmentHistory").find('tbody').html(str);
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }



        function loadVisits(treatmentID,dateEnroled){
            reset();
            $('#PatientVisitstHistory').collapse("show");
            document.getElementById("dateEnroled").innerHTML=dateEnroled;
            document.getElementById("enrolementID_visit").value=treatmentID;

            $.ajax({
                url: "php/getPatientVisitsDetail.php",
                type: 'GET',
                data: {
                    id:treatmentID
                } ,//type is any HTTP method
                success: function (response) {
                    response=JSON.parse(response);
                    var str ="";
                    var total_Fee=0;
                    var enrolmentHistoryBody_Tag = document.getElementById("EnrolmentHistory_Body");
                    for(var i=0 ;i < response.length; i++) {
                        total_Fee+= parseInt(response[i]['fee']);
                        str+= "<tr><th scope='row'>"+(parseInt(i)+1) +"</th>"+
                            "<td>"+response[i]['fee']+"</td>"+
                            "<td>"+response[i]['status']+"</td>"+
                            "<td>"+response[i]['day']+"-"+response[i]['month']+"-"+response[i]['year']+"</td>"+
                            "<td> <button type='button' onclick='visitUpdateFormPopulate("+response[i]['id']+")' class='btn btn-info'><span class='glyphicon glyphicon-edit'></span></button>"+"</td>"+
                            "</tr>"
                    }
                    $("#PatientVisitstHistoryTable").find('tbody').html(str);
                    document.getElementById("totalFee").innerHTML=total_Fee;
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }


        function visitUpdateFormPopulate(id){
            reset();
            $('#PatientVisitstHistory_edit').collapse("show");
           $.ajax({
                url: "php/getVisitspecific.php",
                type: 'GET',
                data: {
                    id:id
                } ,//type is any HTTP method
                success: function (response) {
                    response=JSON.parse(response);
                    document.getElementById("fee_visit_edit").value=response[0]['fee'];
                    document.getElementById("status_visit_edit").value=response[0]['status'];
                    date =response[0]['year']+"-";
                    if(response[0]['month']<10){
                        date+="0"+response[0]['month']+"-";
                    }
                    else{
                        date+=response[0]['month']+"-";
                    }
                    if(response[0]['day']<10){
                        date+="0"+response[0]['day'];
                    }
                    else{
                        date+=response[0]['day'];
                    }

                    document.getElementById("date_visit_edit").value=date;
                    document.getElementById("visitID_edit").value=response[0]['id'];
                    document.getElementById("visit_dateDisplay_edit").innerHTML=response[0]['day'].toString()+"/"+response[0]['month'].toString()+"/"+response[0]['year'].toString();
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }





        function submitVisitForm_edit(){
            //reset();
            var visit = new Object();
            var errorMsg="";
            visit["id"] = document.getElementById("visitID_edit").value;
            visit["fee"] = document.getElementById("fee_visit_edit").value;
            visit["status"] = document.getElementById("status_visit_edit").value;
            visit["date"] = document.getElementById("date_visit_edit").value;
            var visit = JSON.parse(JSON.stringify(visit))
            if(visit["date"]=="" || visit["date"]==" " ){
                errorMsg="Please enter a valid date!"
            }
            else if( isNaN(visit["fee"]) || visit["fee"].length==0 || visit["fee"]<0){
                errorMsg="Please enter valid fee in numbers!"
            }
            else if( isNaN(visit["status"]) || visit["status"].length==0){
                errorMsg="Please enter a valid status for this payment!"
            }

            if(errorMsg.length>0){
                document.getElementById("visitAddError_edit").innerHTML=errorMsg;
                return false;
            }
            $.ajax({
                url: "php/updateVisit.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:visit
                } ,
                success: function (response) {
                    console.log(response);
                    document.getElementById("visitAddError_edit").innerHTML="Succesfully Added. Please refresh.";
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                    document.getElementById("visitAddError_edit").innerHTML="Error.";
                }
            });
        }


        function submitVisitForm(){

            var visit = new Object();
            var errorMsg="";
            visit["enrolementID"] = document.getElementById("enrolementID_visit").value;
            visit["fee"] = document.getElementById("fee_visit").value;
            visit["status"] = document.getElementById("status_visit").value;
            visit["date"] = document.getElementById("date_visit").value;
            var visit = JSON.parse(JSON.stringify(visit))
            if(visit["date"]=="" || visit["date"]==" " ){
                errorMsg="Please enter a valid date!"
            }
            else if( isNaN(visit["fee"]) || visit["fee"].length==0 || visit["fee"]<0){
                errorMsg="Please enter valid fee in numbers!"
            }
            else if( isNaN(visit["status"]) || visit["status"].length==0){
                errorMsg="Please enter a valid status for this payment!"
            }
            if(errorMsg.length>0){
                document.getElementById("visitAddError").innerHTML=errorMsg;
                return false;
            }
            $.ajax({
                url: "php/addPatientVisit.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:visit
                } ,
                success: function (response) {
                    console.log(response);
                    document.getElementById("visitAddError").innerHTML="Succesfully Added. Please refresh.";
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                    document.getElementById("visitAddError").innerHTML="Error.";
                }
            });
        }

        function submitPateintenrolmentTreamentForm(){
            var enrolment_Treament = new Object();
            var errorMsg="";
            enrolment_Treament["description"] = document.getElementById("enrolmentforTreatment_description").value;
            enrolment_Treament["visits"] = document.getElementById("enrolmentforTreatment_visits").value;
            enrolment_Treament["fee"] = document.getElementById("enrolmentforTreatment_fee").value;
            enrolment_Treament["date"] = document.getElementById("enrolmentforTreatment_date").value;
            enrolment_Treament["PatientID"] = document.getElementById("patientID").value;
            if(enrolment_Treament["date"]=="" || enrolment_Treament["date"]==" " ){
                errorMsg="Please enter a valid date!"
            }
            else if( isNaN(enrolment_Treament["fee"])){
                errorMsg="Please enter valid fee in numbers!"
            }
            else if( isNaN(enrolment_Treament["visits"])){
                errorMsg="Please enter number of visits in numbers!"
            }
            if(errorMsg.length>0){document.getElementById("enrolmentforTreatment_error").innerHTML=errorMsg;
                return false;
            }
            var enrolment_Treament = JSON.parse(JSON.stringify(enrolment_Treament))
            $.ajax({
                url: "php/addPatientEnrolment.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:enrolment_Treament
                } ,
                success: function (response) {
                    $("#Treament_enrolled").html("<img width='15%' src='images/tick.svg' />");

                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
            document.getElementById("SearchPatientError").innerHTML="Patient is enrolled successfully."
        }


        function submitPateintAddForm(){

            var patient = new Object();
            var errorMsg=""
            patient["name"] = document.getElementById("name").value;
            patient["address"] = document.getElementById("address").value;
            patient["contactinfo"] = document.getElementById("contactinfo").value;
            patient["reference"] = document.getElementById("reference").value;
            patient["age"] = document.getElementById("age").value;
            if(patient["name"]=="" || patient["name"]==" " ){
                errorMsg="Please enter patient name!"
            }
            else if( isNaN(patient["contactinfo"])){
                errorMsg="Please enter valid contact info!"
            }
            else if( isNaN(patient["age"])){
                errorMsg="Please enter valid Age!"
            }
             if(errorMsg.length>0){
                 document.getElementById("NewPatientError").innerHTML=errorMsg;
                 return false;
             }
            var patient = JSON.parse(JSON.stringify(patient))
            $.ajax({
                url: "php/addPatient.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:patient
                } ,
                success: function (response) {
                    $("#success_patientADD").html("<img width='15%' src='images/tick.svg' />");
                    document.getElementById("NewPatientError").innerHTML="Patient added successfully.";
                    patientListpopulate();

                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });


        }


        function generateReports(){
            reset();
            var date = new Object();
            var errorMsg=""
            document.getElementById("reportError").innerHTML=errorMsg;
            date["from"] = document.getElementById("dateFrom").value;
            date["to"] = document.getElementById("dateTo").value;
            if(date["from"]=="" || date["from"]==" " ){
                errorMsg="Please enter Date from!"
            }
            else if(date["to"]=="" || date["to"]==" " ){
                errorMsg="Please enter Date to!"
            }
            if(errorMsg.length>0){

                document.getElementById("reportError").innerHTML=errorMsg;
                return false;
            }

            var patient = JSON.parse(JSON.stringify(date))
            $.ajax({
                url: "php/reports.php",
                type: 'POST',   //type is any HTTP method
                data: {
                    data:date
                } ,
                //Data as js object
                success: function (response) {
                    console.log(response);
                },
                error: function (textStatus, errorThrown) {
                    alert(textStatus+" - "+errorThrown);
                }
            });
        }


    </script>


    <footer>
      <div class="container">
        <p>&copy; 2017 Prags Physio Clinic. All Rights Reserved.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

  </body>

</html>
