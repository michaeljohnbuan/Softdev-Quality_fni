<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `alternativefood` WHERE CONCAT(`place`, `alternative`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `alternativefood`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "foodnonfood");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search alternatives for food</title>
        
		<link rel="stylesheet" type="text/css" href="assetsAlternativeFood/styles.css">
    </head>
    <body>
        
        <form class="searchbox_1" action="/search_alternatives" method="post">
            <input type="text" name="valueToSearch" placeholder="Alternative to search..."><br><br>
			<input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>Place</th>
                    <th>Alternative</th>
                    
                </tr>

        </form>
		
		
		 <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['place'];?></td>
                    <td><?php echo $row['alternative'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        
    </body>
</html>