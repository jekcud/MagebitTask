<table id="myTable" class="sortable">
    <thead>
    <tr>
        <th>Date</th>
        <th>e-mail address</th>
    </tr>
    </thead>
    <tbody id="tableBody">
    <?php
    $search = $_GET['search'];
    $provider = $_GET['provider'];

    // how many results per page
    $results_per_page = 10;

    // get total number of results
    if(isset($search)){
        $number_of_results = $providers->getNumberOfRowsByProvider($provider);
    } else {
        $number_of_results = $email->getNumberOfRows();
    }

    // get number of pages
    $number_of_pages = ceil($number_of_results/$results_per_page);

    //determine which page number visitor is currently on
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    // determine the sql LIMIT starting number for the results on the displaying page
    $this_page_first_result = ($page-1)*$results_per_page;

    // retrieve selected results from database and display them on page
    if(isset($search)){
        $stmt = $providers->filterByProvider($provider, $this_page_first_result, $results_per_page);
    } else {
        $stmt = $email->getLimitedInfo($this_page_first_result, $results_per_page);
    }

    while($key = $stmt->fetch()){
        ?>
        <tr>
            <td><?php echo $key['date']; ?></td>
            <td><?php echo $key['email']; ?></td>
            <td><a href="list.php?delete=<?php echo $key['id'];?>">Delete</a></td>
        </tr>
        <?php
    } ?>
    </tbody>
</table>
<?php
//display the links to the pages
for ($page=1; $page<=$number_of_pages; $page++) {
    echo '<a href="list.php?page=' . $page . '">' . $page . '</a>';
}
?>
