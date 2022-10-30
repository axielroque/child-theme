<?php

// Support custom "anchor" values.
$anchor = '';
if (!empty($block['anchor'])) {
  $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $class_name .= ' align' . $block['align'];
}

if (have_rows('time_line_list')): ?>

<section 
  id="<?php echo esc_attr($anchor); ?>" 
  class=""
>
  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 lg:py-16 lg:grid-cols-12">
    <h2 class="text-primary-900 text-3xl font-bold mb-5">Time Line Title</h2>

    <div class="p-5">
      <ol class="relative border-l border-gray-600">  
        <?php while (have_rows('time_line_list')):

          the_row();
          // Load values and assign defaults.
          $title = get_sub_field('title') ?: 'Your title here...';
          $description = get_sub_field('description') ?: 'description here...';
          $date = get_sub_field('date');
          ?>                
        <li class="mb-10 ml-5" id="time-<?php echo get_row_index(); ?>">            
            <span class="flex absolute -left-3 justify-center items-center w-5 h-5 rounded-full ring-4 ring-gray-700 bg-blue-900">
              <svg aria-hidden="true" class="w-4 h-4 text-blue-100" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
            </span>
            <h3 class="flex items-center mb-1 text-2xl font-bold text-primary-900"> 
              <?php echo esc_html($title); ?> 
              <?php echo 1 === intval(get_row_index())
                ? '<span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">Latest</span>'
                : ''; ?>
              
            </h3>
            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500"><?php echo __(
              'Released on' . ' ' . $date
            ); ?></time>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400"> <?php echo esc_html(
              $description
            ); ?></p>
        </li>
        <?php
        endwhile; ?>
      </ol>
    </div>
  </div>
</section>
<?php endif; ?>
