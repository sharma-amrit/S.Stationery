
<div class="pt-2 col-12 col-sm-6 col-md-6 col-lg-4">
      <div class="card">
      <?php
        // Access the image URL from the including file
        if (isset($url)) {
            echo '<img src="' . $url . '" alt="Product Image">';
        } else {
            echo "No image URL received.";
        }
        ?>
          <div class="card-img-overlay d-flex justify-content-end">
          <a href="#" class="card-link text-danger like">
            <i class="fas fa-heart"></i>
          </a>
        </div>
        <div class="card-body">
          <h4 class="card-title">Tombow Mono 100 Pencil</h4>
          <h6 class="card-subtitle mb-2 text-muted">Style: VA33TXRJ5</h6>
          <p class="card-text">
          The Tombow Mono 100 Pencil is a premium writing instrument designed for those who seek a superior writing experience. Crafted with precision and expertise, this pencil is specially engineered to deliver smooth, dark lines with just a light touch</p>

          <div class="buy d-flex justify-content-between align-items-center">
            <div class="price text-success"><h5 class="mt-4">$125</h5></div>
             <a href="#" class="btn btn-danger mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
          </div>
        </div>
      </div>
    </div>