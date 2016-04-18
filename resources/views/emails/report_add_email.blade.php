<?php echo $report->assignment->tutor->name;?> has just submitted a tutoring report for:
<p><b>
  <?php echo $report->assignment->student->name; ?>
  <?php echo $report->session_date; ?>
</p></b>
To view and comment on the report, follow the provided URL and login.
  <p><?php echo URL::to('/report/' . $report->id); ?></p>

<p>- Calvin Tutoring Management</p>
