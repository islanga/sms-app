<?php
$sql  = "SELECT BackupJobName, Description, BackupJobType, BackupJobSubject1, SearchTermSuccess1, SearchTermFailed1 FROM tblBackupJobConfig2 
		 WHERE SearchTermSuccess1 != '' ORDER BY Description DESC";
$stmt = $link->prepare($sql);
$stmt->execute();
?>
<table class="striped">
    <thead>
        <tr>
            <th>Time</th>
            <th>Date</th>
            <th>Backup Job Type</th>
            <th>Backup Job Subject</th>
            <th>Status</th>                   
        </tr>			             
    </thead>
    <tbody>            
        <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
			$date = new DateTime($row['Description']);
        ?>
        <tr>
            <td><?php echo $row['BackupJobName']; ?></td>
            <td><?php echo $date->format("Y-m-d"); echo date('Y-m-d', $row['Description']); ?></td>
            <td><?php echo $row['BackupJobType']; ?></td>
            <td><?php echo $row['BackupJobSubject1']; ?></td>
            <td><?php echo $row['SearchTermSuccess1']; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>