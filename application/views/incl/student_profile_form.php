<?php
if(empty($requiredfields)){
	$requiredfields = array();
}

$indicator = (!empty($isview))? "": "<span class='redtext'>*</span>";

if(!empty($msg)) print format_notice($msg);
?>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="<?php echo base_url();?>students/save_student<?php 
		if(!empty($i))
		{
			echo "/i/".$i;
		}
		?>" >                
                <table width="100" border="0" cellspacing="0" cellpadding="8">
                  <tr>
                    <td valign="top" nowrap="nowrap" class="label" style="padding-top:13px">First Name :<?php echo $indicator;?></td>
                    <td class="field" nowrap>
                      <?php  
			if(!empty($isview))
			{
				echo "<span class='viewtext'>".$userdetails['firstname']."</span>";
			}else{
					echo get_required_field_wrap($requiredfields, 'firstname');
					?>
                      <input type="text" name="firstname" id="firstname" class="textfield" size="30" value="<?php 
				  if(!empty($studentdetails['firstname'])){
				 	 echo $studentdetails['firstname'];
				  }?>"/>
                      <?php  echo get_required_field_wrap($requiredfields, 'firstname', 'end');
			}
				  ?>
                      </td>
                      </tr>
                  <tr>
                    <td valign="top" nowrap="nowrap" class="label" style="padding-top:13px">Middle Name :</td>
                    <td class="field" nowrap>
                      <?php if(!empty($isview))
			{
				echo "<span class='viewtext'>".$studentdetails['middlename']."</span>";
			}else{
                    ?>
                      <input type="text" name="middlename" id="middlename" class="textfield" size="30" value="<?php 
				  if(!empty($studentdetails['middlename'])){
				 	 echo $studentdetails['middlename'];
				  }?>"/>
                      <?php } ?>
                      </td>
                    </tr>
                  <tr>
                    <td valign="top" nowrap="nowrap" class="label" style="padding-top:13px">Last Name :<?php echo $indicator;?></td>
                    <td class="field" nowrap>
                      <?php  
			if(!empty($isview))
			{
				echo "<span class='viewtext'>".$studentdetails['lastname']."</span>";
			}else{
					echo get_required_field_wrap($requiredfields, 'lastname');
					?>
                      <input type="text" name="lastname" id="lastname" class="textfield" size="30" value="<?php 
				  if(!empty($studentdetails['lastname'])){
				 	 echo $studentdetails['lastname'];
				  }?>"/>
                      <?php  echo get_required_field_wrap($requiredfields, 'lastname', 'end');
			}
				  ?>
                      </td>
                    </tr>
                  <tr>
                    <td valign="top" nowrap="nowrap" class="label" style="padding-top:13px">Date of Birth :<?php echo $indicator;?></td>
                    <td class="field" nowrap>
                      <?php  
			if(!empty($isview))
			{
				echo "<span class='viewtext'>".$studentdetails['dob']."</span>";
			}else{
					echo get_required_field_wrap($requiredfields, 'dob');
					?>
                      <input type="text" name="dob" id="dob" class="textfield datepicker" size="30" value="<?php 
				  if(!empty($studentdetails['dob'])){
				 	 echo $studentdetails['dob'];
				  }?>"/>
                      <?php  echo get_required_field_wrap($requiredfields, 'dob', 'end');
			}
				  ?>
                      </td>
                    </tr>
                  <tr>
                    <td nowrap="nowrap" class="label">Gender :<?php echo $indicator;?></td>
                    <td class="field" nowrap>
                      <?php  
			if(!empty($isview))
			{
				echo "<span class='viewtext'>".$studentdetails['groupname']."</span>";
			}else{
						?>
                      <select name="gender" id="gender"  class="selectfield"> <option>Select</option>
                        <option <?php if(!empty($studentdetails['gender']) && $studentdetails['gender'] == 'Male') echo 'selected="selected"'; ?> value="Male">Male</option>
                        <option <?php if(!empty($studentdetails['gender']) && $studentdetails['gender'] == 'Female') echo 'selected="selected"'; ?> value="Female">Female</option>
                        </select>
                      <?php
						}
					?>
                      </td>
                    </tr>
                  <tr>
                    <td nowrap="nowrap" class="label">Term of Admission :<?php echo $indicator;?> </td>
                    <td class="field" nowrap>
                      <?php  
					 if(!empty($isview) || !empty($i))
			{$admitterminfo = get_term_name_year($this, $studentdetails['admissionterm']);
				echo "<span class='viewtext'>".$admitterminfo['term']." [".$admitterminfo['year']."]</span><input name='admissionterm' type='hidden' id='admissionterm' value='".$studentdetails['admissionterm']."' />";
			}else{
					 echo get_required_field_wrap($requiredfields, 'admissionterm');?>
                      <select name="admissionterm" id="admissionterm"  class="selectfield"> <?php echo get_select_options($terms, 'id', 'term',(!empty($studentdetails['admissionterm'])) ? $studentdetails['admissionterm'] : '','Y','Select Term') ?>
                        </select>
                      <?php  echo get_required_field_wrap($requiredfields, 'admissionterm', 'end');
			}
				  ?>
                      </td>
                    </tr>
                  
                  <tr>
                    <td nowrap="nowrap" class="label"> Class of Admission :<?php echo $indicator;?> </td>
                    <td class="field" nowrap>
                      <?php  
					 if(!empty($isview) || !empty($i))
			{		
				echo "<span class='viewtext'>".get_class_title($this, $studentdetails['admissionclass'])."</span><input name='admissionclass' type='hidden' id='admissionclass' value='".$studentdetails['admissionclass']."' />";
			}else{
					 echo get_required_field_wrap($requiredfields, 'admissionclass');?>
                      <select name="admissionclass" id="admissionclass"  class="selectfield"> <?php echo get_select_options($classes, 'id', 'class',(!empty($studentdetails['admissionclass'])) ? $studentdetails['admissionclass'] : '','Y','Select Class') ?>
                        </select>
                      <?php  echo get_required_field_wrap($requiredfields, 'admissionclass', 'end');
			}
				  ?>
                      </td>
                    </tr>
                  
                  <tr>
                    <td valign="top" nowrap="nowrap" class="label" style="padding-top:13px">Student No. :<?php echo $indicator;?></td>
                    <td class="field" nowrap>
                      <?php  
			if(!empty($isview))
			{
				echo "<span class='viewtext'>".$studentdetails['studentno']."</span>";
			}else{
					echo get_required_field_wrap($requiredfields, 'studentno');
					?>
                      <input type="text" name="studentno" id="studentno" class="textfield" size="30" value="<?php 
				  if(!empty($studentdetails['studentno'])){
				 	 echo $studentdetails['studentno'];
				  }?>"/>
                      <?php  echo get_required_field_wrap($requiredfields, 'studentno', 'end');
			}
				  ?>
                      </td>
                    </tr>
                  <?php  if(empty($isview)){ ?>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input type="button" name="save" id="save" onclick="updateFieldLayer('<?php echo base_url().'students/save_student/i/' . $i;?>','firstname<>lastname<>dob<>*middlename<>gender<>admissionterm<>studentno<>admissionclass<>*photo<>save','','results','Please enter the required fields.');" value="Save" class="button"/></td>
                    <td>&nbsp;</td>
                    </tr>
                  <?php } ?>
                  </table>
                
</form>