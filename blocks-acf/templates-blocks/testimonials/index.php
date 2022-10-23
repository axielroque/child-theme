<?php

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
  $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
  $class_name .= ' align' . $block['align'];
}


if( have_rows('testimonials') ): ?>
<section id="<?php echo esc_attr( $anchor ); ?>" class="testimonials grid grid-cols-1 md:grid-cols-3 gap-5 w-full px-5 py-5">
  <?php 
    while( have_rows('testimonials') ): the_row(); 
    // Load values and assign defaults.
    $text        = get_sub_field( 'testomonial_text' ) ?: 'Your testimonial here...';
    $author      = get_sub_field( 'author_name' ) ?: 'Author name';
    $author_role = get_sub_field( 'author_role' ) ?: 'Author role';
    $image       = get_sub_field( 'author_image' ) ?: 295;
    $size        = 'full'; // (thumbnail, medium, large, full or custom size)
    $mode        = get_sub_field('mode');
  ?>
    <div class="<?php echo esc_attr('Dark' === $mode? 'bg-gray-900': 'bg-white' ); ?> px-4 py-5 text-center lg:py-8 lg:px-6">
      <figure class="max-w-screen-md">
          <svg class="h-12 mx-auto mb-3 <?php echo esc_attr('Dark' === $mode? 'text-gray-600': 'text-gray-400' ); ?>" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
          </svg> 
          <blockquote>
            <p class="text-2xl font-medium <?php echo esc_attr('Dark' === $mode? 'text-white': 'text-gray-900' ); ?>">
              <?php echo esc_html( $text ); ?>
            </p>
          </blockquote>
          <figcaption class="flex items-center justify-center mt-6 space-x-3">
              <?php if( !empty( $image ) ):?>
                <img class="w-6 h-6 rounded-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <div class="flex items-center divide-x-2 <?php echo esc_attr('Dark' === $mode? 'divide-gray-70': 'divide-gray-500' ); ?>">
                <h4 class="pr-3 font-medium <?php echo esc_attr('Dark' === $mode? 'text-white': 'text-gray-900' ); ?>"><?php echo esc_html( $author ); ?></h4>
                <p class="pl-3 text-sm font-light <?php echo esc_attr('Dark' === $mode? 'text-gray-400': 'text-gray-500' ); ?>"><?php echo esc_html( $author_role ); ?></p>
              </div>
          </figcaption>
      </figure>
    </div>
  <?php endwhile; ?>
</section>
<?php endif; ?>