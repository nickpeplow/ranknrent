<!-- Testimonials Section -->
<section class="testimonials py-5 py-md-6 bg-success bg-opacity-10">
    <div class="container">
        <h2 class="text-center mb-5">What Our Clients Say</h2>
        <div class="row justify-content-center">
            <?php
            $testimonials = [
                [
                    'quote' => 'The team at Tree Service Grand Rapids MI did an amazing job! They were professional, efficient, and left our property spotless.',
                    'author' => 'John D.',
                    'location' => 'Kentwood, MI',
                    'rating' => 5,
                    'image' => 'https://via.placeholder.com/100x100'
                ],
                [
                    'quote' => 'I was impressed by their knowledge and care for our trees. They provided great advice and service.',
                    'author' => 'Sarah M.',
                    'location' => 'Kentwood, MI',
                    'rating' => 5,
                    'image' => 'https://via.placeholder.com/100x100'
                ],
                [
                    'quote' => 'Fast response time for emergency service. They saved our property from a dangerous fallen tree. Highly recommend!',
                    'author' => 'Mike R.',
                    'location' => 'Wyoming, MI',
                    'rating' => 5,
                    'image' => 'https://via.placeholder.com/100x100'
                ],
                [
                    'quote' => 'Their tree maintenance program has kept our landscaping looking beautiful year-round. Excellent service!',
                    'author' => 'Emily L.',
                    'location' => 'Kentwood, MI',
                    'rating' => 5,
                    'image' => 'https://via.placeholder.com/100x100'
                ]
            ];

            foreach ($testimonials as $testimonial) : ?>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex">
                            <div class="flex-shrink-0 me-3 text-center" style="width: 100px;">
                                <img src="<?php echo esc_url($testimonial['image']); ?>" alt="<?php echo esc_attr($testimonial['author']); ?>" class="rounded-circle mb-2" width="80" height="80">
                                <h5 class="card-title mb-0 fs-6"><?php echo esc_html($testimonial['author']); ?></h5>
                                <small class="text-muted"><?php echo esc_html($testimonial['location']); ?></small>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div>
                                        <?php for ($i = 0; $i < $testimonial['rating']; $i++) : ?>
                                            <i class="fas fa-star text-warning"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="text-success">
                                        <i class="fas fa-check-circle"></i> Verified Review
                                    </div>
                                </div>
                                <blockquote class="blockquote mb-0">
                                    <p class="mb-0"><i class="fas fa-quote-left text-success me-2"></i><?php echo esc_html($testimonial['quote']); ?></p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-success">Read More Reviews</a>
        </div>
    </div>
</section>
