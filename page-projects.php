<!-- Header --><?php include (TEMPLATEPATH . '/header.php'); ?> <!-- End Header -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/projects.css"/>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/page_templates/base.css"/>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.js"></script>


<!-- Banner Section -->
<div class="banner">
    <div class="center-content">
        <h1>Crafting Tailored Building Exteriors</h1>
        <p>Lorem ipsum dolor sit amet consectetur 
            adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam</p>
    </div>
</div>
<!-- Banner Section- EEND -->
<div class="center-text-h2-container">
    <h2>Our Projects</h2>
    <p>Lorem ipsum dolor sit amet consectetur 
        adipiscing eli mattis sit phasellus mollis sit aliquam sit nullam
    </p>
</div>



<!-- Our Project Section -->
<div class="our-projects">
    <label>
      Choose an ice cream flavor:
      <select class="ice-cream" name="ice-cream">
        <option value="">Select One …</option>
        <option value="chocolate">Chocolate</option>
        <option value="sardine">Sardine</option>
        <option value="vanilla">Vanilla</option>
      </select>
    </label>
    <div class="images">
        <div class="stat" data-key="1"></div>
        <div class="stat" data-key="2"></div>
        <div class="stat" data-key="3"></div>
    </div>
</div>   

<script>
const selectElement = document.querySelector(".ice-cream");
const result = document.querySelector(".stat");

selectElement.addEventListener("change", (event) => {
    result.dataset.key = event.target.value ;
});

const tooltips = document.querySelectorAll(".map_container .lds-ripple");
tooltips.forEach(function(tooltip) {
  var tooltipSpan = tooltip.querySelector('.marker');
  var tooltipimg = tooltip.querySelector('.marker img');
  tooltip.addEventListener("change", (event) => {
    tooltipSpan.style.visibility = 'visible';
    let markerKey = tooltip.dataset.key; //get markerkey value

    tooltipb.innerText = markers[markerKey][0];
    tooltipimg.src =  "<?php echo get_stylesheet_directory_uri(); ?>/img/locations/" + markers[markerKey][2] + ".png";
  })
  tooltip.onmouseleave = function(e) {
    tooltipSpan.style.visibility = 'hidden';
  }
})

</script>
<!-- Footer --><?php include (TEMPLATEPATH . '/footer.php'); ?> <!-- Footer -->