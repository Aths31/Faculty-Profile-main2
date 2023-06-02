<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
        <?php
            $sql="
                SELECT * FROM `medicals` WHERE `Sdrn`='$Sdrn';
            ";
            $result=$conn->query($sql);
        ?>
        <div class="container">
  <h2>MEDICAL EXAMS</h2>
            
  <div class="scroll">
  <table class="table table-hover table-sm">

      <tr>
        <th class="table-active">AIAPGET APPEARED</th>
        <?php fetch($result,'AIAPGET_Appered')?>
      </tr>
      <tr>
        <th class="table-active">AIAPGET DATE</th>
        <?php fetch($result,'AIAPGET_Date')?>
      </tr>
      <tr>
        <th class="table-active">AIAPGET SCORE</th>
        <?php fetch($result,'AIAPGET_Score')?>
      </tr>
      <tr>
        <th class="table-active">NEET-SS APPEARED</th>
        <?php fetch($result,'NEET_SS_Appered')?>
      </tr>
      <tr>
        <th class="table-active">GATE DATE</th>
        <?php fetch($result,'NEET_SS_Date')?>
      </tr>
      <tr>
        <th class="table-active">GATE SCORE</th>
        <?php fetch($result,'NEET_SS_Score')?>
      </tr>
      <tr>
        <th class="table-active bg-danger" style="padding-top:1rem">UPLOADS</th>
        <?php fetchm($result,'PDF')?>
      </tr>

  </table>
  </div>

</div>
</body>
</html>