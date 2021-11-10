<?php 

    include 'database.php';
    $obj = new Database();
    if (count($_POST) > 0) 
    {
        if (empty($_POST['service_user_name'])) 
        {
            $valid_name = "Please Enter Name";
        }
        else
        {
            $re_name = $_POST['service_user_name'];
        }
        if (empty($_POST['reference_number'])) 
        {
            $valid_reference_number = "Please Enter Reference Number";
        }
        else
        {
            $re_reference_number = $_POST['reference_number'];
        }
        if (empty($_POST['address'])) 
        {
            $valid_address = "Please Enter Address";
        }
        else
        {
            $re_address = $_POST['address'];
        }
        if (empty($_POST['tel'])) 
        {
            $valid_tel = "Please Enter Tel";
        }
        else
        {
            $re_tel = $_POST['tel'];
        }
        if (empty($_POST['number_of_hours_week'])) 
        {
            $valid_number_of_hours_week = "Please Enter Number of Hours /Week";
        }
        else
        {
            $re_number_of_hours_week = $_POST['telnumber_of_hours_week'];
        }
        if (empty($_POST['number_of_visits_per_week'])) 
        {
            $valid_number_of_visits_per_week = "Please Enter Number of Visits per/week";
        }
        else
        {
            $re_number_of_visits_per_week = $_POST['number_of_visits_per_week'];
        }
        if (empty($_POST['number_of_care_workers_week'])) 
        {
            $valid_number_of_care_workers_week = "Please Enter Number of Care Workers /week";
        }
        else
        {
            $re_number_of_care_workers_week = $_POST['number_of_care_workers_week'];
        }
        if (empty($_POST['name_of_assessor'])) 
        {
            $valid_name_of_assessor = "Please Enter Name of Assessor";
        }
        else
        {
            $re_name_of_assessor = $_POST['name_of_assessor'];
        }
        if (empty($_POST['reason_for_spot_check'])) 
        {
            $valid_reason_for_spot_check = "Please Enter Reason for Spot Check";
        }
        else
        {
            $re_reason_for_spot_check = $_POST['reason_for_spot_check'];
        }
        if (empty($_POST['name_of_care_worker_attending_during_spot_check'])) 
        {
            $valid_name_of_care_worker_attending_during_spot_check = "Please Enter Name of Care Worker(s) Attending During Spot Check";
        }
        else
        {
            $re_name_of_care_worker_attending_during_spot_check = $_POST['name_of_care_worker_attending_during_spot_check'];
        }
        if (empty($_POST['date'])) 
        {
            $valid_date = "Please Enter Date";
        }
        else
        {
            $re_date = $_POST['date'];
        }
        if (empty($_POST['time'])) 
        {
            $valid_time = "Please Enter time";
        }
        else
        {
            $re_time = $_POST['time'];
        }
        if (empty($_POST['arrive'])) 
        {
            $valid_arrive = "Please Enter arrive";
        }
        else
        {
            $re_arrive = $_POST['arrive'];
        }
        if (empty($_POST['depart'])) 
        {
            $valid_depart = "Please Enter Depart";
        }
        else
        {
            $re_depart = $_POST['depart'];
        }
        if (empty($_POST['section_one_on_arrival_in_the_home'])) 
        {
            $valid_section_one_on_arrival_in_the_home = "Please Enter Section One - On Arrival in the Home";
        }
        else
        {
            $re_section_one_on_arrival_in_the_home = $_POST['section_one_on_arrival_in_the_home'];
        }
         if (empty($_POST['yes_no'])) 
        {
            $valid_yes_no = "Please Enter YES NO";
        }
        else
        {
            $re_yes_no = $_POST['yes_no'];
        }
         if (empty($_POST['comment'])) 
        {
            $valid_comment = "Please Enter Comment";
        }
        else
        {
            $re_comment = $_POST['comment'];
        }
         if (empty($_POST['action'])) 
        {
            $valid_action = "Please Enter Action";
        }
        else
        {
            $re_action = $_POST['action'];
        }
         if (empty($_POST['outcome'])) 
        {
            $valid_outcome = "Please Enter Outcome";
        }
        else
        {
            $re_outcome = $_POST['outcome'];
        }
         if (empty($_POST['timescale'])) 
        {
            $valid_timescale = "Please Enter Timescale";
        }
        else
        {
            $re_timescale = $_POST['timescale'];
        }
         if (empty($_POST['action_by'])) 
        {
            $valid_action_by = "Please Enter Action By";
        }
        else
        {
            $re_action_by = $_POST['action_by'];
        }


        if (empty($valid_name) && empty($valid_reference_number) && empty($valid_address) && empty($valid_tel) && empty($valid_number_of_hours_week) && empty($valid_number_of_visits_per_week) && empty($valid_number_of_care_workers_week) && empty($valid_name_of_assessor) && empty($valid_reason_for_spot_check) && empty($valid_name_of_care_worker_attending_during_spot_check) && empty($valid_date) && empty($valid_time) && empty($valid_arrive) && empty($valid_depart) && empty($valid_section_one_on_arrival_in_the_home) && empty($valid_yes_no) && empty($valid_comment) && empty($valid_action) && empty($valid_outcome) && empty($valid_timescale) && empty($valid_action_by))
        {
            $run = $obj->insert("spot_ckeck_form",$_POST);
            if ($run) 
            {
                header('location: index.php');
            }
        }
    }

?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Spot Check Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="POST" action="" class="container" enctype="multipart/form-data">
		<h2 class="title" style="text-align: center;"><u>Spot Check Form</u></h2>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="service_user_name" placeholder="Enter Name" value="<?php echo @$re_name; ?>">
				<label for="name">Service User Name</label>
				 <p style="color: red;"><?php echo @$valid_name; ?></p>
			</div>
			<div class="inputbox">
				<input type="text" name="reference_number" placeholder="Enter Reference Number" value="<?php echo @$re_reference_number; ?>">
				<label for="name">Reference Number:</label>
				<p style="color: red;"><?php echo @$valid_reference_number; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="address" placeholder="Enter Address" value="<?php echo @$re_address; ?>">
				<label for="name">Address</label>
				 <p style="color: red;"><?php echo @$valid_address; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="Tel" name="tel" placeholder="Enter Tel" value="<?php echo @$re_tel; ?>">
				<label for="name">Tel</label>
				<p style="color: red;"><?php echo @$valid_tel; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="number_of_hours_week" placeholder="Enter Number of Hours /Week" value="<?php echo @$re_number_of_hours_week; ?>">
				<label for="name">Number of Hours /Week</label>
				<p style="color: red;"><?php echo @$valid_number_of_hours_week; ?></p>
			</div>
			<div class="inputbox">
				<input type="text" name="number_of_visits_per_week" placeholder="Enter Number of Visits per/week" value="<?php echo @$re_number_of_visits_per_week; ?>">
				<label for="name">Number of Visits per/week</label>
				<p style="color: red;"><?php echo @$valid_number_of_visits_per_week; ?></p>
			</div>
			<div class="inputbox">
				<input type="text" name="number_of_care_workers_week" placeholder="Enter Number of Care Workers /week" value="<?php echo @$re_number_of_care_workers_week; ?>">
				<label for="name">Number of Care Workers /week</label>
				<p style="color: red;"><?php echo @$valid_number_of_care_workers_week; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="name_of_assessor" placeholder="Enter Name of Assessor" value="<?php echo @$re_name_of_assessor; ?>">
				<label for="name">Name of Assessor</label>
				<p style="color: red;"><?php echo @$valid_name_of_assessor; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="reason_for_spot_check" placeholder="Enter Reason for Spot Check" value="<?php echo @$re_reason_for_spot_check; ?>">
				<label for="name">Reason for Spot Check</label>
				<p style="color: red;"><?php echo @$valid_reason_for_spot_check; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="name_of_care_worker_attending_during_spot_check" placeholder="Enter Name of Care Worker(s) Attending During Spot Check" value="<?php echo @$re_name_of_care_worker_attending_during_spot_check; ?>">
				<label for="name">Name of Care Worker(s) Attending During Spot Check</label>
				<p style="color: red;"><?php echo @$valid_name_of_care_worker_attending_during_spot_check; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="Date" name="date" placeholder="Enter Date" value="<?php echo @$re_date; ?>">
				<label for="name">Date of Spot Check</label>
				<p style="color: red;"><?php echo @$valid_date; ?></p>
			</div>
			<div class="inputbox">
				<input type="time" name="time" placeholder="Enter Time" value="<?php echo @$re_time; ?>">
				<label for="name">Time of Spot Check</label>
				<p style="color: red;"><?php echo @$valid_time; ?></p>
			</div>
			<div class="inputbox">
				<input type="text" name="arrive" placeholder="Enter Arrive" value="<?php echo @$re_arrive; ?>">
				<label for="name">Arrive</label>
				<p style="color: red;"><?php echo @$valid_arrive; ?></p>
			</div>
			<div class="inputbox">
				<input type="text" name="depart" placeholder="Enter Depart" value="<?php echo @$re_depart; ?>">
				<label for="name">Depart</label>
				<p style="color: red;"><?php echo @$valid_depart; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="inputbox">
				<input type="text" name="section_one_on_arrival_in_the_home" placeholder="Enter Section One - On Arrival in the Home" value="<?php echo @$re_section_one_on_arrival_in_the_home; ?>">
				<label for="name">Section One - On Arrival in the Home </label>
				<p style="color: red;"><?php echo @$valid_section_one_on_arrival_in_the_home; ?></p>
			</div>
		</div>

				<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section One - On Arrival in the Home</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer arrive at the Service User’s home on time?</td>
					        <td><input type="radio" name="yes_no" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer have the Keys/Key safe number and alert the Service User upon arrival?</td>
					        <td><input type="radio" name="yes_no_1" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_1" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_1" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Is the Carer dressed smartly in a clean, company uniform?</td>
					        <td><input type="radio" name="yes_no_2" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_2" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_2" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer introduce him/herself and says ‘Hello’ to the Service User and call them by the name they have asked to be called in the Care Plan?</td>
					        <td><input type="radio" name="yes_no_3" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_3" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_3" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer have an ID Badge that is current and valid and if they are not known to the Service User do they show the ID badge?</td>
					        <td><input type="radio" name="yes_no_4" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_4" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_4" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Where electronic monitoring is used, has the Carer logged in correctly?</td>
					        <td><input type="radio" name="yes_no_5" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_5" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_5" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					      
					    </table>
					  </div>
					</div>

					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Two - Care Plan</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer check the Service User's Care Plan upon arrival?</td>
					        <td><input type="radio" name="yes_no_6" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_6" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_6" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer check the Service User's Visit Notes upon arrival?</td>
					        <td><input type="radio" name="yes_no_7" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_7" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_7" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer seek the Service User's consent before delivering any aspect of care?</td>
					        <td><input type="radio" name="yes_no_8" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_8" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_8" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer know what care the Service User needs?</td>
					        <td><input type="radio" name="yes_no_9" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_9" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_9" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					      
					    </table>
					  </div>
					</div>
			
					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Three - Safe Working Practices</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer wash their hands before and after providing care and support?</td>
					        <td><input type="radio" name="yes_no_10" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_10" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_10" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer use PPE correctly?</td>
					        <td><input type="radio" name="yes_no_11" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_11" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_11" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Is the Carer vigilant for hazards in the home?</td>
					        <td><input type="radio" name="yes_no_12" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_12" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_12" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Is any food handled correctly and hygienically?</td>
					        <td><input type="radio" name="yes_no_13" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_13" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_13" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					      <tr>
					        <td style="">Is the working area kept clean and tidy and is any PPE disposed of correctly?</td>
					        <td><input type="radio" name="yes_no_14" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_14" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_14" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					    </table>
					  </div>
					</div>
			
					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Four - Medication</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Is the MAR chart completed correctly?</td>
					        <td><input type="radio" name="yes_no_15" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_15" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_15" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer follow the 6 Rights of Medication correctly?</td>
					        <td><input type="radio" name="yes_no_16" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_16" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_16" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					    </table>
					  </div>
					</div>

					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Five- Attitude and Behaviour</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer communicate well with the Service User and evidence compassionate care?</td>
					        <td><input type="radio" name="yes_no_17" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_17" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_17" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer respect the privacy of the Service User?</td>
					        <td><input type="radio" name="yes_no_18" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_18" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_18" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer respect the dignity of the Service User?</td>
					        <td><input type="radio" name="yes_no_19" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_19" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_19" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer allow the Service User to make their own choices?</td>
					        <td><input type="radio" name="yes_no_20" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_20" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_20" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer work in an enabling way?</td>
					        <td><input type="radio" name="yes_no_21" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_21" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_21" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					    </table>
					  </div>
					</div>

					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Six - Recording</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer accurately record on the care records the activities that have been undertaken?</td>
					        <td><input type="radio" name="yes_no_22" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_22" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_22" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer log out correctly if electronic monitoring is used?</td>
					        <td><input type="radio" name="yes_no_23" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_23" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_23" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					    </table>
					  </div>
					</div>

					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th>Section Seven - Service User Feedback</th>
					        <th>Yes</th>
					        <th>No</th>
					        <th>Comment</th>
					      </tr>
					      <tr>
					        <td style="">Does the Carer usually wear identification?</td>
					        <td><input type="radio" name="yes_no_24" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_24" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_24" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">Does the Carer usually wear gloves and plastic aprons for personal care?</td>
					        <td><input type="radio" name="yes_no_25" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_25" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_25" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					      <tr>
					        <td style="">Does the Carer respect your privacy and treat you with dignity?</td>
					        <td><input type="radio" name="yes_no_26" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_26" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_26" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					      <tr>
					        <td style="">Does the Carer make you feel comfortable and safe?</td>
					        <td><input type="radio" name="yes_no_27" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_27" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_27" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					       <tr>
					        <td style="">Does your Carer come on time?</td>
					        <td><input type="radio" name="yes_no_28" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_28" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_28" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					      <tr>
					        <td style="">Do you know how to make a complaint?</td>
					        <td><input type="radio" name="yes_no_29" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_29" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_29" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					       <tr>
					        <td style="">If you have made a complaint was it resolved?</td>
					        <td><input type="radio" name="yes_no_30" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_30" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_30" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					      <tr>
					        <td style="">Do you feel in control of your care service?</td>
					        <td><input type="radio" name="yes_no_31" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_31" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_31" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr>
					      <tr>
					        <td style="">Are you happy with the care you receive from us?</td>
					        <td><input type="radio" name="yes_no_32" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_32" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_32" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					      <tr>
					        <td style="">Do you know which Carer will be coming to visit you?</td>
					        <td><input type="radio" name="yes_no_33" value="Yes" <?php echo (@$re_yes_no == "yes") ? 'checked' : '' ; ?>></td>
					        <td><input type="radio" name="yes_no_33" value="No" <?php echo (@$re_yes_no == "no") ? 'checked' : '' ; ?>></td>
					        <p style="color: red;"><?php echo @$valid_yes_no; ?>

					        <td><input type="text" name="comment_32" placeholder="Enter Comment" value="<?php echo @$re_comment; ?>" style="padding: 10px;"></td>
					        <p style="color: red;"><?php echo @$valid_comment; ?>
					      </tr> 
					    </table>
					  </div>
					</div>

					<div class="rows" style="overflow-x:auto;">
					  <div class="colum">
					    <table>
					      <tr>
					        <th style="text-align: center;">Section Eight - Actions</th>
					      </tr>
					      <tr>
					        <th>Action</th>
					        <th>Outcome</th>
					        <th>Timescale</th>
					        <th>Action by</th>
					      </tr>
					      <tr>
					        <td><input type="text" name="action" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					      <tr>
					        <td><input type="text" name="action_1" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome_1" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale_1" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by_1" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					      <tr>
					        <td><input type="text" name="action_2" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome_2" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale_2" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by_2" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					      <tr>
					        <td><input type="text" name="action_3" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome_3" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale_3" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by_3" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					      <tr>
					        <td><input type="text" name="action_4" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome_4" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale_4" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by_4" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					      <tr>
					        <td><input type="text" name="action_5" style="padding: 10px;" placeholder="Enter Number action" value="<?php echo @$re_action; ?>">
							<p style="color: red;"><?php echo @$valid_action; ?></p></td>

					        <td><input type="text" name="outcome_5" style="padding: 10px;" placeholder="Enter Number outcome" value="<?php echo @$re_outcome; ?>">
							<p style="color: red;"><?php echo @$valid_outcome; ?></p></td>

					        <td><input type="text" name="timescale_5" style="padding: 10px;" placeholder="Enter Number Timescale" value="<?php echo @$re_timescale; ?>">
							<p style="color: red;"><?php echo @$valid_timescale; ?></p></td>

					        <td><input type="text" name="action_by_5" style="padding: 10px;" placeholder="Enter Number Action By" value="<?php echo @$re_action_by; ?>">
							<p style="color: red;"><?php echo @$valid_action_by; ?></p></td>
					      </tr>
					    </table>
					  </div>
					</div>

		<div class="row">
			<button type="submit" class="button btn-primary">Submit</button>
		</div>
	</form>
</body>
</html>