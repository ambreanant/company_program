<?php
$x=5;
while ( --$x > 0) {
	$x++;
	echo $x;
	echo "Hello";
}
?>
//sql query
// Select * FROM person
// GROUP BY person_name
// Having COUNT(*) > 1

<!-- SELECT MAX(daily_avg),person_name FROM worker GROUP BY person_name -->
// select * from person where daily_avg = (select max(daily_avg) from person) GROUP by person_name Having count(*) > 1
<!-- select * 
from (select * from Person order by `person_name`, daily_avg desc, id) x
group by `person_name` -->

<?php
$a = 1;
$b= &$a;
$b = "2$b";
echo $a,$b;
?>
  <script>
  	//change color of table row
$("tr:even").css("background-color", "#eeeeee");
$("tr:odd").css("background-color", "#ffffff");
   $( "div li:nth-child(even)" ).css('background','green');
   $( "div li:nth-child(odd)" ).css('background','red');
   </script>