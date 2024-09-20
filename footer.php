<?php get_template_part('template-parts/footer', 'cta'); ?>

<?php get_template_part('template-parts/footer', 'location'); ?>

<style>
    .bg-dark-secondary {
        background-color: #343a40; /* Slightly lighter than bg-dark */
    }
</style>

<footer class="bg-dark-secondary text-white py-4 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0">
                <h5><?php bloginfo('name'); ?></h5>
                <p>The region's leading professional tree services since 1967.</p>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <h5>Navigation</h5>
                <ul class="list-unstyled">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" class="text-white">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-white">Services</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="text-white">Contact us</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <h5>Services</h5>
                <ul class="list-unstyled">
                    <li>24/7 Emergency Tree Removal</li>
                    <li>Tree Removal</li>
                    <li>Tree Trimming & Pruning</li>
                    <li>Cabling & Bracing</li>
                    <li>Tree Stump Removal</li>
                    <li>Tree Doctor</li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Working hours</h5>
                <p>Mon - Wed: 9:00 am - 9:00 pm<br>Thu - Sat: 9:00 am - 7:00 pm</p>
            </div>
        </div>
        <hr class="bg-light">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>