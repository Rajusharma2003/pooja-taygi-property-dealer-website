<?php
include 'admin/config.php'; // Ensure this path points to the correct location of config.php

// Fetch properties from the database
$result = $conn->query("SELECT * FROM properties");

if (!$result) {
    die('Error fetching properties: ' . $conn->error);
}
?>
<section id="product" class="ftco-section ftco-properties">
    <div class="container">
        <div class="row justify-content-center mt-6 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Recent Posts</span>
                <h2 class="mb-4">Recent Properties</h2>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-5">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="col-md-3">
                    <div class="property-item">
                        <a href="#">
                            <div class="img">
                                <!-- Ensure proper image path and use object-fit to maintain aspect ratio -->
                                <img style="border-radius: 20px; width: 100%; height: 250px; object-fit: cover;" 
                                     src="<?php echo htmlspecialchars('admin/' . $row['image_path']); ?>" 
                                     alt="Property Image">
                            </div>
                        </a>
                        <div class="text">
                            <span class="status <?php echo htmlspecialchars($row['status']); ?>">
                                <?php echo htmlspecialchars($row['status']); ?>
                            </span>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h3><a href="#"><?php echo htmlspecialchars($row['title']); ?></a></h3>
                                    <p><?php echo htmlspecialchars($row['type']); ?> - Flats</p>
                                </div>
                                <div>
                                    <!-- <h3><a href="#"><?php echo htmlspecialchars($row['description']); ?></a></h3> -->
                                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                                </div>
                                <div>
                                    <span class="price">₹<?php echo htmlspecialchars($row['price']); ?></span>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- Add some CSS for better styling -->
<style>
    .ftco-section {
        padding: 60px 0;
        background: #f4f4f4;
    }

    .ftco-properties .property-item {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 30px;
    }

    .property-item .img {
        position: relative;
        overflow: hidden;
        height: 250px;
    }

    .property-item .img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .property-item .img:hover img {
        transform: scale(1.05);
    }

    .property-item .text {
        padding: 20px;
    }

    .property-item .status {
        display: inline-block;
        padding: 5px 10px;
        background-color: #ff6f61;
        color: #fff;
        border-radius: 20px;
        font-size: 12px;
        text-transform: uppercase;
    }

    .property-item .price {
        font-size: 20px;
        font-weight: bold;
        color: #ff6f61;
    }

    .property-item h3 {
        font-size: 18px;
        margin: 10px 0;
    }

    .property-item p {
        font-size: 14px;
        color: #666;
    }

    .property-item hr {
        margin-top: 15px;
        border: 0;
        border-top: 1px solid #ddd;
    }

    .ftco-animate {
        animation: fadeInUp 0.5s ease-in-out;
    }

    .subheading {
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #ff6f61;
    }

    h2.mb-4 {
        font-size: 36px;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .property-item {
            margin-bottom: 20px;
        }
    }
</style>
