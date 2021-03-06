<!DOCTYPE html>
<html>
<head>
	<?php require_once('./include/common_head.inc.php'); ?>
	<title><?php echo L_RANKLIST." - {$OJ_NAME}";?></title>
    <style>
        td {text-align:center}
        th {text-align:center}
    </style>
</head>	
<body>
	<?php require("./pages/components/navbar.php");?>
    <div class="main">
        <div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-4">
				<div class="btn-group" role="group" aria-label="...">
					<?php
						$prev = $p-1; $next = $p+1;
						if ($p != 1) echo "<a href='ranklist.php?p={$prev}' type='button' class='btn btn-default'>&lt;</a>"; 
						echo "<a href='ranklist.php?p={$p}' type='button' class='btn btn-default'>{$p}</a>"; 
						if ($p != $pageCnt) echo "<a href='ranklist.php?p={$next}' type='button' class='btn btn-default'>&gt;</a>"; 
					?>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-4">
				<form method="get" action="./userinfo.php">
				<div class="input-group">
					<input type="text" class="form-control" name="uid" placeholder="To personal homepage ">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><?php echo L_GO;?></button>
					</span>
				</div>
				</form>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-4">
				<form method="get">
				<div class="input-group">
					<input type="text" class="form-control" name="keyword" placeholder="Enter user name (key word)">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><?php echo L_SEARCH;?></button>
					</span>
				</div>
				</form>
			</div>

		</div><!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-hover" id="tableID">
					<thead>
						<tr>
							<th width="10%"><?php echo L_RANK;?></th>
							<th width="15%"><?php echo L_NICK;?></th>
							<th width="35%"><?php echo L_MOTTO;?></th>
							<th width="20%"><?php echo L_SUBMIT;?></th>
							<th width="20%"><?php echo L_PASSRATE;?></th>
						</tr>
					</thead>
					<tbody>
                    <?php
					$rank = $front;
					foreach($userList as $row) { //rank list ---------------------
                        $rank++;
						if ($row['submit'] == 0) $pctText = "N/A";
						else $pctText = sprintf("%.2f%%",$row['solved'] / $row['submit'] * 100);
					?>
						<tr>
							<td><?php echo $rank;?></td>
							<td><a href="./userinfo.php?uid=<?php echo $row['user_id'];?>"><?php echo htmlentities($row['nick']);?></a></td>
							<td><?php echo RemoveUnsafe($row['motto']);?></td>
							<td><?php echo "<a href='./status.php?uid={$row['user_id']}&judgeresult=4'>{$row['solved']}</a>";?> / <a href="#"><?php echo "<a href='./status.php?uid={$row['user_id']}'>{$row['submit']}</a>";?></td>
							<td><?php echo $pctText;?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div><!--main wrapper end-->
    </div>
	<?php require("./pages/components/footer.php");?>
</body>
</html>
