<?php echo $comment->report->assignment->professor->name;?> has just changed a comment for your report:
<p><b>
  <?php echo $comment->report->assignment->student->name; ?>
  <?php echo $comment->report->session_date; ?>
</p></b>
<p>
  <?php echo $comment->comment_text; ?>
</p>
To view and edit the report, follow the provided URL and login.
  <p><?php echo URL::to('/report/' . $comment->report->id); ?></p>

<p>- Calvin Tutoring Management</p>
