<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Nerd Report</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="styles.css?v=1.0">
</head>
<body>
  <h1>My Nerd Report</h1>
  <script>
    d3.select("body")
    .append("svg")
    .attr("width", 500)
    .attr("height", 500);

  </script>
  <p>&copy; Andrea Moulding <?php echo date('m/d/Y');?></p>
</body>
</html>