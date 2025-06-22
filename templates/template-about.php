<div class="w-full px-4 py-8 max-w-4xl mx-auto">
  <!-- Author Avatar and Name -->
  <div class="flex flex-col items-center gap-4 text-center">
    <div
      class="w-32 h-32 rounded-full bg-center bg-cover bg-no-repeat"
      style='background-image: url("<?php echo esc_url(get_avatar_url(get_current_user_id())); ?>");'>
    </div>

    <div>
      <h1 class="text-2xl font-semibold text-[#121416]">
        <?php echo esc_html(get_the_author_meta('display_name', get_current_user_id())); ?>
      </h1>
      <p class="text-[#6a7581] text-base">
        <?php echo esc_html(get_the_author_meta('author_profession', get_current_user_id())); ?>
      </p>
      <p class="text-[#6a7581] text-base">
        <?php echo esc_html(get_the_author_meta('author_location', get_current_user_id())); ?>
      </p>
    </div>
  </div>

  <!-- Author Description -->
  <div class="mt-6">
    <p class="text-base text-[#121416] leading-relaxed text-center">
      <?php echo esc_html(get_the_author_meta('description', get_current_user_id())); ?>
    </p>
  </div>

  <!-- Skills -->
  <div class="mt-8">
    <h3 class="text-lg font-semibold text-[#121416] mb-3">Skills</h3>
    <div class="flex flex-wrap gap-2">
      <?php 
      $skills = get_the_author_meta('author_skills', get_current_user_id());
      if (is_array($skills)) :
        foreach ($skills as $skill) :
      ?>
        <span class="bg-[#f1f2f4] text-sm text-[#121416] font-medium px-4 py-1 rounded-xl">
          <?php echo esc_html($skill); ?>
        </span>
      <?php 
        endforeach;
      endif; 
      ?>
    </div>
  </div>

  <!-- Experience -->
  <div class="mt-10">
    <h3 class="text-lg font-semibold text-[#121416] mb-3">Experience</h3>
    <div class="space-y-3">
      <?php 
      $experiences = get_the_author_meta('author_experiences', get_current_user_id());
      if (is_array($experiences)) :
        foreach ($experiences as $job) :
      ?>
        <div class="bg-white p-4 rounded-md border border-[#f1f2f4] shadow-sm">
          <p class="text-base font-medium text-[#121416]"><?php echo esc_html($job['title']); ?></p>
          <p class="text-sm text-[#6a7581] italic"><?php echo esc_html($job['date']); ?></p>
          <p class="text-sm text-[#121416] mt-1"><?php echo esc_html($job['description']); ?></p>
        </div>
      <?php 
        endforeach;
      endif;
      ?>
    </div>
  </div>

  <!-- Profile Links -->
  <div class="mt-10">
    <h3 class="text-lg font-semibold text-[#121416] mb-3">Profile Links</h3>
    <div class="flex flex-wrap gap-3">
      <?php 
      $links = get_the_author_meta('profile_links', get_current_user_id());
      if (is_array($links)) :
        foreach ($links as $link) :
          $label = !empty($link['label']) ? esc_html($link['label']) : 'Link';
          $url = !empty($link['url']) ? esc_url($link['url']) : '#';
      ?>
        <a 
          href="<?php echo $url; ?>" 
          class="inline-flex items-center gap-2 px-4 py-2 border border-[#e2e6ea] rounded-lg bg-white text-sm text-[#0c77f2] font-medium hover:bg-[#f0f4ff]"
          target="_blank" rel="noopener noreferrer"
        >
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M12.293 2.293a1 1 0 011.414 0L18 6.586a1 1 0 010 1.414l-8.293 8.293a1 1 0 01-1.414 0L2 9.414a1 1 0 010-1.414L6.586 2a1 1 0 011.414 0L10 4.586l2.293-2.293z"></path>
          </svg>
          <?php echo $label; ?>
        </a>
      <?php 
        endforeach;
      endif; 
      ?>
    </div>
  </div>
</div>
