<?php 
    $title = "Line Charts and Options";
    // $plotTargets = array (array('id'=>'chart1', 'width'=>600, 'height'=>400));
?>
<?php include "opener.php"; ?>

<!-- Example scripts go here -->

<p>The most basic jqPlot chart takes a series of data and plots a line.  No options need to be supplied.  Data is passed in as an array of series.  A series can be either an array of y values or an array of [x,y] data pairs.  If y values only, x values are assigned like 1, 2, 3, ...  Note, for this plot you don't need any plugins.</p>

<div id="chart1" style="height:300px; width:500px;"></div>

<pre class="code prettyprint brush: js"></pre>


<p>The following plot uses a number of options to set the title, add axis labels, and shows how to use the canvasAxisLabelRenderer plugin to provide rotated axis labels.</p>

<div id="chart2" style="height:300px; width:500px;"></div>

<pre class="code prettyprint brush: js"></pre>


<p>There are numerous line style options to control how the lines and markers are displayed.</p>

<div id="chart3" style="height:300px; width:500px;"></div>

<pre class="code prettyprint brush: js"></pre>

  
<script class="code" type="text/javascript">
$(document).ready(function(){
  var plot1 = $.jqplot ('chart1', [[3,7,9,1,5,3,8,2,5]]);
});
</script>
  
<script class="code" type="text/javascript">
$(document).ready(function(){
  var plot2 = $.jqplot ('chart2', [[3,7,9,1,5,3,8,2,5]], {
      // Give the plot a title.
      title: 'Plot With Options',
      // You can specify options for all axes on the plot at once with
      // the axesDefaults object.  Here, we're using a canvas renderer
      // to draw the axis label which allows rotated text.
      axesDefaults: {
        labelRenderer: $.jqplot.CanvasAxisLabelRenderer
      },
      // Likewise, seriesDefaults specifies default options for all
      // series in a plot.  Options specified in seriesDefaults or
      // axesDefaults can be overridden by individual series or
      // axes options.
      // Here we turn on smoothing for the line.
      seriesDefaults: {
          rendererOptions: {
              smooth: true
          }
      },
      // An axes object holds options for all axes.
      // Allowable axes are xaxis, x2axis, yaxis, y2axis, y3axis, ...
      // Up to 9 y axes are supported.
      axes: {
        // options for each axis are specified in seperate option objects.
        xaxis: {
          label: "X Axis",
          // Turn off "padding".  This will allow data point to lie on the
          // edges of the grid.  Default padding is 1.2 and will keep all
          // points inside the bounds of the grid.
          pad: 0
        },
        yaxis: {
          label: "Y Axis"
        }
      }
    });
});
</script>
  
<script class="code" type="text/javascript">
$(document).ready(function(){
  // Some simple loops to build up data arrays.
  var cosPoints = [];
  for (var i=0; i<2*Math.PI; i+=1){ 
    cosPoints.push([i, Math.cos(i)]); 
  }
   
  var sinPoints = []; 
  for (var i=0; i<2*Math.PI; i+=0.4){ 
     sinPoints.push([i, 2*Math.sin(i-.8)]); 
  }
   
  var powPoints1 = []; 
  for (var i=0; i<2*Math.PI; i+=1) { 
      powPoints1.push([i, 2.5 + Math.pow(i/4, 2)]); 
  }
   
  var powPoints2 = []; 
  for (var i=0; i<2*Math.PI; i+=1) { 
      powPoints2.push([i, -2.5 - Math.pow(i/4, 2)]); 
  } 

  var plot3 = $.jqplot('chart3', [cosPoints, sinPoints, powPoints1, powPoints2], 
    { 
      title:'Line Style Options', 
      // Set default options on all series, turn on smoothing.
      seriesDefaults: {
          rendererOptions: {
              smooth: true
          }
      },
      // Series options are specified as an array of objects, one object
      // for each series.
      series:[ 
          {
            // Change our line width and use a diamond shaped marker.
            lineWidth:2, 
            markerOptions: { style:'diamond' }
          }, 
          {
            // Don't show a line, just show markers.
            // Make the markers 7 pixels with an 'x' style
            showLine:false, 
            markerOptions: { size: 7, style:"x" }
          },
          { 
            // Use (open) circlular markers.
            markerOptions: { style:"circle" }
          }, 
          {
            // Use a thicker, 5 pixel line and 10 pixel
            // filled square markers.
            lineWidth:5, 
            markerOptions: { style:"filledSquare", size:10 }
          }
      ]
    }
  );
   
});
</script>


<!-- End example scripts -->

<!-- Don't touch this! -->

<?php include "commonScripts.html" ?>

<!-- End Don't touch this! -->

<!-- Additional plugins go here -->

  <script class="include" type="text/javascript" src="../src/plugins/jqplot.canvasTextRenderer.js"></script>
  <script class="include" type="text/javascript" src="../src/plugins/jqplot.canvasAxisLabelRenderer.js"></script>

<!-- End additional plugins -->

<?php include "closer.php"; ?>
