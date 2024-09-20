<!-- Services Section -->
<section class="services py-5 py-md-6">
    <div class="container">
        <h2 class="text-center mb-3">
            <span class="pb-2 border-bottom border-success border-thick">Our Services</span>
        </h2>
        <p class="lead text-center mb-5 px-md-5 mx-auto" style="max-width: 900px;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis.
        </p>
        <div class="row">
            <?php
            $services = [
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 1',
                    'description' => 'Brief description of Service 1. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 2',
                    'description' => 'Brief description of Service 2. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 3',
                    'description' => 'Brief description of Service 3. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 4',
                    'description' => 'Brief description of Service 4. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 5',
                    'description' => 'Brief description of Service 5. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
                [
                    'image' => 'https://via.placeholder.com/350x200',
                    'title' => 'Service 6',
                    'description' => 'Brief description of Service 6. This is a placeholder text that you can replace later.',
                    'link' => '#'
                ],
            ];

            foreach ($services as $service) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="<?php echo esc_url($service['image']); ?>" class="card-img-top" alt="<?php echo esc_attr($service['title']); ?>">
                        <div class="card-body text-center">
                            <h3 class="card-title"><?php echo esc_html($service['title']); ?></h3>
                            <p class="card-text"><?php echo esc_html($service['description']); ?></p>
                            <a href="<?php echo esc_url($service['link']); ?>" class="btn btn-success">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>