<?php 

get_header();

?>



<div
      class="relative flex size-full min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden"
      style='font-family: Newsreader, "Noto Sans", sans-serif;'
    >
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div>
        <div class="flex items-center bg-white p-4 pb-2 justify-between">
          <div class="text-[#111418] flex size-12 shrink-0 items-center" data-icon="ArrowLeft" data-size="24px" data-weight="regular">
            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
              <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"></path>
            </svg>
          </div>
        </div>
        <h1 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 text-left pb-3 pt-5"><?php the_title(); ?></h1>
        <p class="text-[#60758a] text-sm font-normal leading-normal pb-3 pt-1 px-4">UX/UI Design · 2023</p>
        <div class="flex w-full grow bg-white @container py-3">
          <div class="w-full gap-1 overflow-hidden bg-white @[480px]:gap-2 aspect-[3/2] flex">
            <?php if(has_post_thumbnail()) :
              $thumb_url = get_the_post_thumbnail_url(get_the_id(), 'full');
               ?>

              <div
              class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
              style='background-image: url("<?php esc_url($thumb_url); ?>")';
            ></div>
          </div>
          <?php endif; ?>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Overview</h2>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
          This project aimed to redesign the user experience for a popular e-commerce platform, focusing on improving navigation, search functionality, and the overall checkout
          process. The goal was to create a more intuitive and efficient shopping experience for users.
        </p>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Problem</h2>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
          Users were reporting difficulties in finding products, navigating the site, and completing purchases. The existing design lacked consistency and clarity, leading to
          frustration and a high cart abandonment rate.
        </p>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Process</h2>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
          We conducted user research, including interviews and usability testing, to identify pain points and understand user needs. Based on the findings, we developed user
          personas and journey maps to guide the design process. We then created wireframes and prototypes, iterating based on feedback from stakeholders and users.
        </p>
        <div class="flex w-full grow bg-white @container py-3">
          <div class="w-full gap-1 overflow-hidden bg-white @[480px]:gap-2 aspect-[3/2] flex">
            <div
              class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCHdaUiWN2rI-fW6tbKmgspfQiCyCs-Sn7yJvxLr3prdX4UBxCkW6gqJWWfMEJTDo8etem4SjeXTvp-fX3PCBnOqJoJr0Sb1PIk8wrG3W8QSCtuvFjgFkX-mWxIU8jU3RZ-na4eTwmgEyVq4P_t5kD_LGtFSvmXmFHKjhmjulGXIc64bL1k9STqWpg5Rf0dBReNu53mSpfGStyX-FeaDaeBkIoDDn1njEhoTFO2dt2Ojznv0DJl6I5dNHvP41o-BYIDjf9JmoM1LL4");'
            ></div>
          </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Solution</h2>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
          The redesigned platform features a streamlined navigation menu, enhanced search filters, and a simplified checkout flow. We implemented a consistent visual language and
          clear calls to action to guide users through the shopping process.
        </p>
        <div class="flex w-full grow bg-white @container py-3">
          <div class="w-full gap-1 overflow-hidden bg-white @[480px]:gap-2 aspect-[3/2] flex">
            <div
              class="w-full bg-center bg-no-repeat bg-cover aspect-auto rounded-none flex-1"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCgKzGfbyR9zFEMQ6mtDciMsxDKL3y8yA-e5haLpv4WHHKV6ByivfcmSxYghvTMDjYBE-HB2hcOFMg1CqHHYrX2HG1iigAPq6He1zjE0VUwImiGxUYFUBwWeGlrC9T9FpMIt7SLuEGmkWi8wlzzvhOGfW4Li9zIk7UqPVd5r5QPYSPyRqBwgfvEQlSBAd0Zc4U2b39k49CFqC5Sm1Xl31RpMloRPbYfSZ4a1osRRpl8mEaH92ngu4MwWFOlwRfVGVw415p_A_7-JKQ");'
            ></div>
          </div>
        </div>
        <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Outcome</h2>
        <p class="text-[#111418] text-base font-normal leading-normal pb-3 pt-1 px-4">
          The redesign resulted in a 20% increase in conversion rates and a 15% reduction in cart abandonment. User feedback has been overwhelmingly positive, with users praising
          the improved usability and visual appeal of the platform.
        </p>
      </div>
      <div>
        <div class="flex justify-stretch">
          <div class="flex flex-1 gap-3 flex-wrap px-4 py-3 justify-between">
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#0b79ee] text-white text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">View Project</span>
            </button>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#f0f2f5] text-[#111418] text-sm font-bold leading-normal tracking-[0.015em]"
            >
              <span class="truncate">Back to Portfolio</span>
            </button>
          </div>
        </div>
        <div class="h-5 bg-white"></div>
      </div>
</div>

<?php 

get_footer();

?>