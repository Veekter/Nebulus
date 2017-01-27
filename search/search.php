<?php include '../conn.php'; 
if(isset($_POST['keywords'])){
$keywords =  mysqli_real_escape_string($con,htmlentities(trim($_POST['keywords'])));

$erorrs = array();
if(empty($keywords)){
$errors[] = "Please enter a search term.";
} elseif(strlen($keywords) < 3){
$errors[]= "Your search term must be three or more charaters";
}elseif(search_results($keywords) === false ){
$errors[]= "Your search for ' $keywords ' returned no results.";

}

if(empty($errors)){
//search
$results = search_results($keywords);
$results_num = count($results);
echo'<p>Your search for<strong> $keywords </strong> returned <strong> $results_num </strong> results </p>';
foreach($results as $result){
echo "nigga";

}

}else{
	foreach($errors as $error){
	echo $error ,'</br>' ;
	}

}

}

function search_results($keywords){
global $con;
$returned_results = array();
$where = "";
  $keywords = preg_split(('/[\s]+/'), $keywords);
  $total_keywords = count($keywords);

  foreach($keywords as $key=> $keyword){
    $where  .= "'keywords' LIKE '%$keyword%'";
	if ($key !=($total_keywords - 1)) {
	 $where  .= " AND ";
	
	}
  }
  $results = " SELECT 'name', LEFT('description', 70) as 'description', 'url', 'price' FROM 'products' WHERE $where ";
  $results_num = ($results = mysqli_query($con,$results))  ?  mysqli_num_rows($results): 0 ;
   // these two queries above first selects the search results, checks to see if query runned successfully and returns the number of results found when echod.
   echo $results;
  
 if($results_num === 0){
    return false;
 } else{
      while($results_row = mysqli_fetch_assoc($results)){
	 // this statement returns the row associated with that query in the db table
	    $returned_result[] = array(
		                    'name' => $results_row['name'],
							'description' => $results_row['description'],
							'price' => $results_row['price'],
							'url' => $results_row['url']
							
            	         );
	        }
			return $returned_results;
	    }
 
 
 
 
  
  

// end of function
}











?>