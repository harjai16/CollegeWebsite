<?php include('../database/controller.php')?>
<?php include('database/validation.php')?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $Registration_no = $fetch_info['registration_no'];
        if($status == "active"){
        }
    }
}else{
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Student | Dashboard </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <?php include('link.php')?>

    <style>
        body {
            font-family: Helvetica;
        }
    </style>
</head>

<body>
    <?php include('topbar.php')?>

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4 style="font-family:'monsterrat', sans-serif;">Admission Application Form </h4>
                                <span>Dashboard - Application</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card b-l-danger business-info services m-20">
            <div class="card-header"><span style="color: red;">******* Please fill the correct details oterwise your
                    form has been rejected</span> <br>
                <hr>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post"  onsubmit="return validatedate()" >

                <div class="col">


                    <div class="form-group row">
                        <div class="col-sm-4 col-md-4">
                            <label for="name">Full Name: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" disabled
                                value="<?php echo $fetch_info['firstName']?>&nbsp;<?php echo $fetch_info['lastName']?>"
                                readonly>
                        </div>

                        <div class="col-sm-4 col-md-4">
                            <label for="email">Email: <span style="color: red;">*</span></label>
                            <input type="email" class="form-control" disabled value="<?php echo $fetch_info['email']?>">
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <label for="country">Registration Number: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" disabled
                                value="<?php echo $fetch_info['Registration_No']?>">
                        </div>

                    </div>
                    <!-------end form row------>
                    <hr style="border: 1px dashed #6f1017;">
                    <h6 class="text-center">Basic Details</h6>
                    <hr>

                    <div class="form-group row">
                        <div class="col-sm-4 col-md-4">
                            <label for="course">Choose course: <span style="color: red;">*</span></label>
                            <select name="course" id="couse" onChange="getsubject(this.value);" name="course" id="couse"
                                class="form-control">
                                <option value="">Please choose course</option>
                                <?php
                            include('database/db.php');
                            $sql="SELECT * FROM tbl_course";
                            $stmt=$dbh->query($sql);
                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            while($row =$stmt->fetch()) { 
                            ?>
                                <option value="<?php echo $row['cfull'];?>"><?php echo $row['cshort'];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4">
                            <label for="subject">Choose Subjects: <span style="color: red;">*</span></label>
                            <select name="subject" id="subject-list" class="form-control">
                                <option value="">Please choose Subject</option>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4">
                            <label for="pic">Student Pic: <span style="color: red;">*</span></label>
                            <input type="file" name="student_pic" id="filer_input" multiple="multiple" required>
                        </div>

                    </div>
                    <!-------end form row------>

                    <div class="form-group row">
                        <div class="col-sm-4 col-md-6">
                            <label for="fathersname">Father's Name: <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" title="Enter Father's Name" data-toggle="tooltip"
                                data-placement="bottom" name="fname" id="fname" required>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <label for="mothersname">Mother's Name: <span style="color: red;">*</span></label>
                            <input type="text" name="mname" title="Enter Mother's Name" data-toggle="tooltip"
                                data-placement="bottom" id="mname" class="form-control" required>
                        </div>
                    </div>
                    <!-----start from group---->


                    <div class="form-group row">
                        <div class="col-sm-3 col-md-3">
                            <label for="dob">Date of Birth: <span style="color: red;">*</span></label>
                            <input class="form-control" id="dropper-dangercolor"
                             data-val-regex-pattern="^(0[1-9]|[12][0-9]|3[01])[/](0[1-9]|1[012])[/](19|20)\d\d$"
                          name="dob" title="Enter DOB" type="text" placeholder="DOB" data-valmsg-for="DOB" required />
                            <span style="font-size:10px">DOB Must be in this format (DD-MM-YYYY)</span>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <label for="Gender">Gender: <span style="color: red;">*</span></label>
                            <!-- <input type="radio" id="rdSexMale" name="Sex" value="M" /> Male
                            <input type="radio" id="rdSexFemale" name="Sex" value="F" /> Female
                            <input type="radio" id="rdSexFemale" name="Sex" value="O" /> Other -->
                            <select name="gender" id="dropper-dangercolor" class="form-control" required><option value="Male">Male</option><option value="Female">Female</option><option value="Other">Other</option></select>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <label for="Category">Category: <span style="color: red;">*</span></label>
                            <select name="gender" id="dropper-dangercolor" class="form-control" required><option value="Gen">General</option><option value="Sc">SC</option><option value="ST">ST</option><option value="ews">UR-EWS</option></select>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <label for="Nationality">Nationality: <span style="color: red;">*</span></label>
                            <input id="Nationality" class="form-control" type="text"
                                title="**Only Indians are allowed**" data-toggle="tooltip" data-placement="bottom"
                                placeholder="Nationality" required />
                        </div>
                    </div>
                    <!----form group row close---->


                    <div class="form-group row">
                        <div class="col-sm-4 col-md-4">
                            <label for="country">Country: <span style="color: red;">*</span></label>
                            <select name="country" id="country" class="form-control" title="Automatically Selcted"
                                data-toggle="tooltip" data-placement="bottom" />
                            <option value=""><?php echo $fetch_info['country'];?></option>
                            </select>
                        </div>
                        <!----form group row close---->

                        <div class="col-sm-4 col-md-4">
                            <label for="state">Choose State: <span style="color: red;">*</span></label>
                            <select name="state" id="state" onChange="getdistrict(this.value);" title="Select State"
                                data-toggle="tooltip" data-placement="bottom" class="form-control"  />
                            <option value="">Please select state
                                <?php
                                $sql="SELECT * FROM state";
                                $stmt=$dbh->query($sql);
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                while($row =$stmt->fetch()) { 
                                ?>
                            <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                            <?php }?>
                            </select>
                        </div>

                        <div class="col-sm-4 col-md-4">
                            <label for="district">Choose District: <span style="color: red;">*</span></label>
                            <select name="district" id="district-list" class="form-control" title="Select your District"
                                data-toggle="tooltip" data-placement="bottom"  required>
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <hr style="border: 1px dashed #6f1017;">
                    <h6 class="text-center">Educational Qualification</h6>
                    <hr>

                    <div class="form-group row">
                        <div class="col">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered" id="example-1">
                                        <thead>
                                            <th>#</th>
                                            <th>BOARD</th>
                                            <th>ROLL NUMBER</th>
                                            <th>PASSING YEAR</th>
                                            <th>PERCENTAGE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th><input type="text" class="form-control" required readonly name="10th" value="10th"></th>
                                            <th><?php require('boards.php')?></th>
                                            <th><input type="text" class="form-control" required name="roll_no"></th>
                                            <th><?php echo '<select name="year" class="form-control" required>';for($i = date('Y'); $i >= date('Y', strtotime('-90 years')); $i--){echo "<option value=\"$i\">$i</option>";}echo '</select>';?></th>
                                            <th><input type="text" class="form-control" name="percentage"></th>
                                           

                                        </tr>        
                                        <tr>
                                            <th><input type="text" class="form-control" readonly name="12th" value="12th" required></th>
                                            <th><?php require('boards.php')?></th>
                                            <th><input type="text" class="form-control" required name="roll_no"></th>
                                            <th><?php echo '<select name="year" class="form-control" required>';for($i = date('Y'); $i >= date('Y', strtotime('-90 years')); $i--){echo "<option value=\"$i\">$i</option>";}echo '</select>';?></th>
                                            <th><input type="text" class="form-control" name="percentage" required></th>
                                        </tr> 
                                        <tr>
                                            <th><input type="text" class="form-control" required readonly name="other" value="Other"></th>
                                            <th><?php require('boards.php')?></th>
                                            <th><input type="text" class="form-control" required name="roll_no"></th>
                                            <th><?php echo '<select name="year" class="form-control" required>';for($i = date('Y'); $i >= date('Y', strtotime('-90 years')); $i--){echo "<option value=\"$i\">$i</option>";}echo '</select>';?></th>
                                            <th><input type="text" class="form-control" name="percentage" required></th>
                                        </tr> 
                                    </tbody>
                                    </table>
                                </div>
                                <!-- <button type="button" class="btn btn-primary waves-effect waves-light add"
                                    onclick="add_row();"><i class="fa fa-plus"></i> Add Qualification
                                </button> -->
                            </div>
                        </div>

                        </table>
                    </div>

                    
                    <hr style="border: 1px dashed #6f1017;">
                    <h6 class="text-center">Permanemt Address</h6>
                    <hr>
                    <div class="col">
                    <div class="form-group row">
                        <div class="col-sm-3 col-md-3">
                            <label for="padd1">Permanent Address 1: <span style="color: red;">*</span></label>
                            <input class="form-control" id="padd1"
                          name="padd1" title="Enter Address 1" type="text" placeholder="Enter Address 1" required />
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <label for="padd2">Permanent Address 2: <span style="color: red;">*</span></label>
                            <input class="form-control" id="padd2"
                          name="padd2" title="Enter Address 2" type="text" placeholder="Enter Address 2" required />
                            </div>

                            <div class="col-sm-3 col-md-3">
                            <label for="padd3">Permanent Address 3: <span style="color: red;">*</span></label>
                            <input class="form-control" id="padd3"
                          name="padd3" title="Enter Address 3" type="text" placeholder="Enter Address 3" required/>
                            </div>

                            <div class="col-sm-3 col-md-3">
                            <label for="ppincode">Pincode: <span style="color: red;">*</span></label>
                            <input class="form-control" id="ppincode" name="ppincode" title="Enter Area Pincode"
                             type="text" placeholder="Enter Area Pincode" maxlength="6" required/>
                            </div>
                    </div>
                    <!----form group row close---->
                    </div>

                    <hr style="border: 1px dashed #6f1017;">
                    <h6 class="text-center">Current Address</h6>
                    <input  type="checkbox" name="checkBox" id="checkBox" onclick="autoFilAddress()">  Same as permanent address
                    <hr>
                    <div class="col">
                      
                    <div class="form-group row">
                        <div class="col-sm-3 col-md-3">
                            <label for="cadd1">Current Address 1: <span style="color: red;">*</span></label>
                            <input class="form-control" id="cadd1"
                          name="cadd1" title="Enter Address 1" type="text" placeholder="Enter Address 1"  required/>
                        </div>

                        <div class="col-sm-3 col-md-3">
                            <label for="cadd2">Current Address 2: <span style="color: red;">*</span></label>
                            <input class="form-control" id="cadd2"
                          name="cadd2" title="Enter Address 2" type="text" placeholder="Enter Address 2" required/>
                            </div>

                            <div class="col-sm-3 col-md-3">
                            <label for="cadd3">Current Address 3: <span style="color: red;">*</span></label>
                            <input class="form-control" id="cadd3"
                          name="cadd3" title="Enter Address 3" type="text" placeholder="Enter Address 3" required />
                            </div>

                            <div class="col-sm-3 col-md-3">
                            <label for="cpincode">Pincode: <span style="color: red;">*</span></label>
                            <input class="form-control" id="cpincode" name="cpincode" title="Enter Area Pincode"
                             type="text" placeholder="Enter Area Pincode" maxlength="6"  required/>
                            </div>
                    </div>
                    <!----form group row close---->
                     <input type="submit" class="btn btn-primary" name="applynow" value="Click to Apply" ondragenter="">
                     <br><br>
                    </div>
                    
                    <!-- close ending of address -->
                </div>
                </div>
        </div>
    </div>
    </div>
    <!----form group row close---->


    </div>
 
    </form>
    </div>
    </div>
    </div>
 


    <?php include('footer.php')?>
    <script>
        function getdistrict(val) {
            $.ajax({
                type: "POST",
                url: "get_district.php",
                data: 'state_id=' + val,
                success: function (data) {
                    $("#district-list").html(data);
                }
            });
        }

        function selectCountry(val) {
            $("#search-box").val(val);
            $("#suggesstion-box").hide();
        }
    </script>

    <script>
        function getsubject(val) {
            $.ajax({
                type: "POST",
                url: "get_subject.php",
                data: 'subid=' + val,
                success: function (data) {
                    $("#subject-list").html(data);
                }
            });
        }
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('input[type=text]').bind('cut copy paste', function (e) {
                alert("You cannot copy,paste or cut text into this textbox!");
                e.preventDefault();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        $(document).ready(function () {
            $('[data-toggle="popover"]').popover({
                html: true,
                content: function () {
                    return $('#primary-popover-content').html();
                }
            });
        });
        // 

        // function add_row() {
        //     var table = document.getElementById("example-1");
        //     var t1 = (table.rows.length);
        //     var row = table.insertRow(t1);
        //     var cell1 = row.insertCell(0);
        //     var cell2 = row.insertCell(1);
        //     var cell3 = row.insertCell(2);
        //     var cell4 = row.insertCell(3);
        //     var cell5 = row.insertCell(4);
        //     var cell6 = row.insertCell(5);

        //     cell1.className = 'abc';
        //     cell2.className = 'abc';

        //     $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell1);
        //         $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell2);
        //         $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell3);
        //         $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell4);
        //         $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell5);
        //         $('<span class="tabledit-span" ></span><input class="tabledit-input form-control input-sm" type="text" name="" value="">')
        //         .appendTo(cell6);
        // };
    </script>

        <script type="text/javascript">

function autoFilAddress()
    {
       let checkBox= document.getElementById('checkBox');

       let padd1 = document.getElementById("padd1");
       let padd2 = document.getElementById("padd2");
       let padd3 = document.getElementById("padd3");
       let ppincode = document.getElementById("ppincode");
    
       let cadd1 = document.getElementById("cadd1");
       let cadd2 = document.getElementById("cadd2");
       let cadd3 = document.getElementById("cadd3");
       let cpincode = document.getElementById("cpincode");
    
        if (checkBox.checked == true)
        {
        
       let padd1Value = padd1.value;
       let padd2Value = padd2.value;
       let padd3Value = padd3.value;
       let ppincodeValue      = ppincode.value;

       cadd1.value = padd1Value; 
       cadd2.value = padd2Value; 
       cadd3.value = padd3Value;   
       cpincode.value = ppincodeValue;         


       }
        else
        {
       cadd1.value = "";
       cadd2.value = ""; 
       cadd3.value = "";     
       cpincode.value = "";
    }
    }

</script>
</body>

</html>