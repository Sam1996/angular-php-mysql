<?php
					include('db.php');
					$city=$_POST['city'];
					$location=$_POST['location'];

					$sql="INSERT INTO countryList (country,location) VALUES ('$city','$location')";
					$result=mysql_query($sql)or die(mysql_error());
					if($result){
						echo "your City and Location has been added to the database !";
					}
					$cityArray=array();
					//$locationArray=array();
					$select="SELECT country,location FROM countryList GROUP BY country";
					$query=mysql_query($select)or die(mysql_error());
					while ($row=mysql_fetch_array($query)) {
						
						$cityname=$row['country'];
						$locationName=$row['location'];
						$cityArray[]=array('country'=>$cityname,'location'=>$locationName);

						}
					//$response['cityArray']=$cityArray;
					$fp=fopen('city.json', 'w');
					fwrite($fp, json_encode($cityArray));
					fclose($fp);

				?>