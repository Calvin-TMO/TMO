<?php echo $report->assignment->tutor->name;?> has just submitted a tutoring report for:
<p><b>
  <?php echo $report->assignment->student->name; ?>
  <?php echo $report->session_date; ?>
</p></b>
To view and comment on the report, click <a href="<?php echo $report_link;?>">here</a> and login.

<p>- Calvin Tutoring Management</p>