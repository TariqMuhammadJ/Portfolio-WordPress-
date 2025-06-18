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
      <p class="text-[#6a7581] text-base">San Francisco, CA</p>
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
      $experience = [
        ['role' => 'Product Designer at Acme Co.', 'duration' => '2020 - Present'],
        ['role' => 'UX Designer at Beta Inc.', 'duration' => '2018 - 2020'],
        ['role' => 'UI Designer at Gamma LLC.', 'duration' => '2016 - 2018'],
      ];
      foreach ($experience as $job) :
      ?>
        <div class="bg-white p-4 rounded-md border border-[#f1f2f4] shadow-sm">
          <p class="text-base font-medium text-[#121416]"><?php echo $job['role']; ?></p>
          <p class="text-sm text-[#6a7581]"><?php echo $job['duration']; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
