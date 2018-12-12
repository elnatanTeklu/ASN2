<?php # Script 3.7 - index.php #2

session_start();

// This function outputs theoretical HTML
// for adding ads to a Web page.

function create_ad() {
    $repeat = "Assignment 2 ";
    $space = " ";
    for ($i=1; $i <10; $i++){
        $space = $space . $repeat;
    }
  echo '<div class="alert alert-info" role="alert"><p>'. $space .'</p></div>';
} // End of the function definition.

$page_title = 'Welcome to this Site!';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Content Header</h1></div>
<p>This is where the page-specific content goes. This section, and the corresponding header, will change from one page to the next.</p>

<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis. Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis. Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus sed, arcu lorem ipsum dolor sit amet.</p>

<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>