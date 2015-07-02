<?php
	include ('codebase/connector/gantt_connector.php');
	$conexao = mysql_connect("localhost","root","") or die (mysql_error());
	 mysql_select_db("moodle");

	$gantt = new JSONGanttConnector($conexao);
	$gantt ->render_links("gantt_links","id","source, target, type");
	$gantt ->render_table(
			"gantt_tasks",
			"id",
			"start_date, duration, text, progress, sortorder, parent");
?>
