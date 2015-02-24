<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>My Nerd Report</title>
  <meta name="description" content="My Nerd Report">
  <meta name="author" content="Andrea">
  <script type="text/javascript" src="d3/d3.js"></script>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h1>My Nerd Report</h1>
  <script type="text/javascript">

   bookData = [36, 73, 20, 60, 80];

   width = 550;
   height = 550;

   widthScale = d3.scale.linear()
                .domain([0, 100])
                .range([0, width]);
   colorScale = d3.scale.linear()
                .domain([0, 100])
                .range(["white", "red"]);
   axis = d3.svg.axis()
          .scale(widthScale);

   canvas = d3.select("body")
                .append("svg")
                .style("color", "white")
                .style("background-color", "white")
                .attr("width", width)
                .attr("height", height)
                .append("g")
                .attr("transform", "translate(20, 0)");

   graph = canvas.selectAll("rect")
                .data(bookData)
                .enter()
                  .append("rect")
                  .attr("width", function(d){ return widthScale(d); })
                  .attr("height", 50)
                  .attr("fill", function (d) {return colorScale(d); })
                  .attr("y", function(d, i){ return i * 100 });
  canvas.append("g")
        .attr("class", "axis")
        .attr("transform", "translate(0, 500)")
        .call(axis);

  </script>
  <p>&copy; Andrea Moulding <?php echo date('m/d/Y');?></p>
</body>
</html>