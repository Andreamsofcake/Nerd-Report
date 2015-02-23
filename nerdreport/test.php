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

   bookData = [36, 73, 20, 60, 80];

   width = 500;
   height = 500;

   widthScale = d3.scale.linear()
                .domain([0, 100])
                .range([0, width])

   canvas = d3.select("body")
                .append("svg")
                .style("color", "black")
                .style("background-color", "blue")
                .attr("width", width)
                .attr("height", height);
   graph = canvas.selectAll("rect")
                .data(bookData)
                .enter()
                  .append("rect")
                  .attr("width", function(d){ return widthScale(d); })
                  .attr("height", 50)
                  .attr("y", function(d, i){ return i * 100 });
  </script>
  <p>&copy; Andrea Moulding <?php echo date('m/d/Y');?></p>
</body>
</html>