<?php
$sql  = "SELECT BackupJobName, Description, BackupJobType, BackupJobSubject1, SearchTermFailed1 FROM tblBackupJobConfig2 
		 WHERE SearchTermFailed1 != '' ORDER BY Description DESC";
$stmt = $link->prepare($sql);
$stmt->execute();
?>
<table class="striped">
    <thead>
        <tr>
            <th>Time</th>
            <th>Date</th>
            <th>BackupJobType</th>
            <th>BackupJobSubject1</th>
            <th>Status</th>
        </tr>			             
    </thead>
    <tbody>            
        <?php
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $row['BackupJobName']; ?></td>
            <td><?php echo date('Y-m-d', $row['Description']); ?></td>
            <td><?php echo $row['BackupJobType']; ?></td>
            <td><?php echo $row['BackupJobSubject1']; ?></td>
            <td><?php echo $row['SearchTermFailed1']; ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>