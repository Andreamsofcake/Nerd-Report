<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Nerd Report</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <script type="text/javascript" src="d3/d3.js"></script>
  <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
  <h1>My Nerd Report</h1>
  <script type="text/javascript">
    var canvas = d3.select("body")
                .append("svg")
                .style("color", "black")
                .style("background-color", "black")
                .attr("width", 500)
                .attr("height", 500);

  </script>
  <p>&copy; Andrea Moulding <?php echo date('m/d/Y');?></p>
</body>
</html>