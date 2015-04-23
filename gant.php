<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <!--Ext and ux styles -->
    <link href="http://cdn.sencha.com/ext/gpl/5.1.0/packages/ext-theme-crisp/build/resources/ext-theme-crisp-all.css"
          rel="stylesheet" type="text/css"/>

	<!--Scheduler styles-->
    <link href="../moodle/css/sch-gantt-crisp-all.css" rel="stylesheet" type="text/css" />
    
	<!--Implementation specific styles-->
    <link href="basic.css" rel="stylesheet" type="text/css" />
    <link href="../moodle/css/examples.css" rel="stylesheet" type="text/css" />

	<!--Ext lib and UX components-->
    
    <script src="../moodle/js/ext-all.js" type="text/javascript"></script>
    
    <script src="../moodle/js/gnt-all-debug.js" type="text/javascript"></script>

    <!--Application files-->
    <script src="../moodle/js/examples-shared.js" type="text/javascript"></script>
     
    <script src="../moodle/js/basic.js" type="text/javascript"></script>

    <title>Basic Gantt demo</title>
</head>
<body>
    <div id="example-description">
        <p>
            NOTE: For this example to work you have to run it in a web server context. This is a simple example with basic functionality only. Tasks titles can be edited inline and you can drag/drop and resize tasks.
            To see the data loaded into the gantt chart, click these links:            
        </p>
        <ul>
            <li><a href="tasks.xml">Tasks</a></li>
            <li><a href="dependencies.xml">Dependencies</a></li>
        </ul>
        <p>
            Note that the js for the example code is not minified so it is readable. See <a href="basic.js">basic.js</a>.
        </p>
    </div>
    <div id="example-container">
    </div>
</body>
</html>
