<select name="board" required class="form-control select2-search--dropdown" id="board">
<option value="#">Select Education Board</option>
<option value="#">CENTRAL BOARD OF SECONDARY EDUCATION</option>
<option value="#">NATIONAL INSTITUTE OF OPEN SCHOOLING</option>
<option value="#">COUNCIL FOR THE INDIAN SCHOOL CERTIFICATE EXAMINATIONS</option>
<option value="#">BOARD OF INTERMEDIATE EDUCATION</option>
<option value="#">BOARD OF SECONDARY EDUCATION</option>
<option value="#">A.P. OPEN SCHOOL SOCIETY</option>
<option value="#">ASSAM HIGHER SECONDARY EDUCATION COUNCIL</option>
<option value="#">BIHAR SCHOOL EXAMINATION BOARD, (PATNA)</option>
<option value="#">BIHAR BOARD OF TECHNICAL EDUCATION, (PATNA)</option>
<option value="#">BIHAR BOARD OF OPEN SCHOOLING AND EXAMINATION (BBOSE)</option>
<option value="#">CHHATISGARH BOARD OF SECONDARY EDUCATION</option>
<option value="#">GOA BOARD OF SECONDARY AND HIGHER SECONDARY EDUCATION</option>
<option value="#">BOARD OF SCHOOL EDUCATION, HARYANA</option>
<option value="#">H. P. BOARD OF SCHOOL EDUCATION, HIMACHAL PRADESH</option>
<option value="#">STATE BOARD OF TECHNICAL EDUCATION, HARYANA</option>
</select>






<!-- dob increament -->
<!-- 
<?php
echo '<select name="year">';
for($i = date('Y'); $i >= date('Y', strtotime('-90 years')); $i--){
  echo "<option value=\"$i\">$i</option>";
} 
echo '</select>';

echo '<select name="month">';
for($i = 1; $i <= 12; $i++){
    $dt = DateTime::createFromFormat('!m', $i);
    echo "<option value=\"$i\">".$dt->format('F')."</option>";
}
echo '</select>';



echo '<select name="day">';
for($i = 1; $i <= 31; $i++){
    echo "<option value=\"$i\">$i</option>";
}   
echo '</select>';


?> -->

<!-- 
calculate percentage

$new_width = ($percentage / 100) * $totalWidth; -->