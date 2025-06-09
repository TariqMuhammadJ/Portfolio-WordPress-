<?php 

get_header();
?>
 <div class="relative flex size-full min-h-screen flex-col bg-white justify-between group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div>
        <div class="@container">
          <div class="@[480px]:p-4">
            <div
              class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-start justify-end px-4 pb-10 @[480px]:px-10"
              style='background-image: url(<?php echo get_theme_mod("hero-background-image"); ?>');'
            >
              <div class="flex flex-col gap-2 text-left">
                <h1
                  class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                >
                  Crafting Seamless Digital Experiences
                </h1>
                <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                  I'm a UX/UI designer passionate about creating intuitive and visually appealing interfaces that solve real-world problems. With a focus on user-centered design, I
                  strive to deliver exceptional digital experiences that leave a lasting impact.
                </h2>
              </div>
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#0c77f2] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
              >
                <span class="truncate"><a href="<?php echo home_url('/projects'); ?>">View My Portfolio</a></span>
              </button>
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-10 px-4 py-10 @container">
          <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-4">
              <h1
                class="text-[#111418] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
              >
                My Design Process
              </h1>
              <p class="text-[#111418] text-base font-normal leading-normal max-w-[720px]">
                I follow a comprehensive design process to ensure that every project is a success. From understanding user needs to crafting pixel-perfect designs, I'm committed to
                delivering exceptional results.
              </p>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#0c77f2] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] w-fit"
            >
              <span class="truncate">View My Portfolio</span>
            </button>
          </div>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
              <div class="text-[#111418]" data-icon="PencilSimple" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#111418] text-base font-bold leading-tight">Research &amp; Strategy</h2>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  I start by conducting thorough research to understand your target audience and business goals. This helps me develop a clear strategy and design direction.
                </p>
              </div>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
              <div class="text-[#111418]" data-icon="CursorClick" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M169.64,134.33l44.77-19.46A16,16,0,0,0,213,85.07L52.92,32.8A16,16,0,0,0,32.8,52.92L85.07,213a15.83,15.83,0,0,0,14.41,11l.79,0a15.83,15.83,0,0,0,14.6-9.59h0l19.46-44.77L184,219.31a16,16,0,0,0,22.63,0l12.68-12.68a16,16,0,0,0,0-22.63Zm-69.48,73.76.06-.05Zm95.15-.09-49.66-49.67a16,16,0,0,0-26,4.94l-19.42,44.65L48,48l159.87,52.21-44.64,19.41a16,16,0,0,0-4.94,26L208,195.31ZM88,24V16a8,8,0,0,1,16,0v8a8,8,0,0,1-16,0ZM8,96a8,8,0,0,1,8-8h8a8,8,0,0,1,0,16H16A8,8,0,0,1,8,96ZM120.85,28.42l8-16a8,8,0,0,1,14.31,7.16l-8,16a8,8,0,1,1-14.31-7.16Zm-81.69,96a8,8,0,0,1-3.58,10.74l-16,8a8,8,0,0,1-7.16-14.31l16-8A8,8,0,0,1,39.16,124.42Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#111418] text-base font-bold leading-tight">Design &amp; Prototyping</h2>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  I then translate research insights into wireframes, prototypes, and high-fidelity designs. I use industry-leading tools to create interactive and visually
                  stunning interfaces.
                </p>
              </div>
            </div>
            <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
              <div class="text-[#111418]" data-icon="Presentation" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176Z"
                  ></path>
                </svg>
              </div>
              <div class="flex flex-col gap-1">
                <h2 class="text-[#111418] text-base font-bold leading-tight">Testing &amp; Iteration</h2>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  I believe in continuous improvement. I test my designs with real users to gather feedback and iterate on my work until we achieve the desired outcome.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col gap-10 px-4 py-10 @container">
          <div class="flex flex-col gap-6">
            <div class="flex flex-col gap-4">
              <h1
                class="text-[#111418] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
              >
                Featured Projects
              </h1>
              <p class="text-[#111418] text-base font-normal leading-normal max-w-[720px]">
                Explore a selection of my recent projects, showcasing my skills in UX/UI design, web design, and mobile app development.
              </p>
            </div>
            <button
              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#0c77f2] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] w-fit"
            >
              <span class="truncate">View All Projects</span>
            </button>
          </div>
          <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3">
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDRiWcEqn6Es0htkk-lqiB69BRecvZCCvXCn-nwBcPemXewjCJgAU7BcPgddDg7Kpelvh7k9ZowqZBQIYE1Qzy6j4WcxhLa1bYVlQ2wzEEIhXsYzGJ4YRhHliypI4c_-Zl1IcZHGY51TJeDVRKIxwF7ia2QScqqHdO-Wu183NdPbju8ZfNg5aXp7bitOWzxRKT-pO_Jjy-XIbA9DFug62e0jxGUNjj3Ogy3fjtu5cFrNmIH3qgo7D0p30Wo0zh6uSL_PnXaHZEszsY");'
              ></div>
              <div>
                <p class="text-[#111418] text-base font-medium leading-normal">Mobile App Design</p>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  Designed a user-friendly mobile app for a fitness tracking company, focusing on intuitive navigation and personalized user experiences.
                </p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDyK8-LU3o4Ug9eCOtrk7IhO-Evga7ElacZbojh6n-FdIdx_TZlqZoWhm_I5jUe1TgQ3xsF4E0SMp_gcz80MBDbOhlL3uqH3oy7gUljE1BXfYJPRJXGRf6lBJWcdqwbKelApkjY2WX_sw0T5PGnLE0252FQpYZwdBtgFatr8ulkUyOJqsHXkXAIz3BFmY_IFQSYRw0mVvfqAkqzuxx9ISIxepyxo7zsh0HvOz1KV78ASFN541yKS1WTO3WngpUasjGOVgh3JBeQ-zk");'
              ></div>
              <div>
                <p class="text-[#111418] text-base font-medium leading-normal">Website Redesign</p>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  Revamped the website for a local business, improving its visual appeal, user engagement, and overall brand presence.
                </p>
              </div>
            </div>
            <div class="flex flex-col gap-3 pb-3">
              <div
                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCSlP-qMQ1ZCGBpXhhcUAcpPx2TQ0u2q_HYzsJ5ilYr9lnGUUGd0yzcWYtx7eTVgt4JzPuvc6_iAHIDeWyN17x51CI4x8Dm-wlEem3Qy4rd2m8A9dPOBfp-pLgXDERqLHI_vRdVkXBQhT9MR7RUbV2g45PQFbrDOhvQYxv5JUvN02_nQlYLwazh3Ht0_C83z0l7NmukrMyqEWzzWusR47qnRAmdstub7REDmFk6y507E08SLT-CrOJccmW9AD6ZzQNLI05FOaPW_PQ");'
              ></div>
              <div>
                <p class="text-[#111418] text-base font-medium leading-normal">Illustration</p>
                <p class="text-[#60748a] text-sm font-normal leading-normal">
                  Created custom illustrations for a variety of projects, including website graphics, social media content, and marketing materials.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="@container">
          <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
            <div class="flex flex-col gap-2 text-center">
              <h1
                class="text-[#111418] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
              >
                Let's Collaborate
              </h1>
              <p class="text-[#111418] text-base font-normal leading-normal max-w-[720px">
                I'm always open to new opportunities and collaborations. If you have a project in mind or would like to discuss your design needs, feel free to reach out.
              </p>
            </div>
            <div class="flex flex-1 justify-center">
              <div class="flex justify-center">
                <button
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#0c77f2] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow"
                >
                  <span class="truncate">Get in Touch</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
          <div class="flex flex-wrap justify-center gap-4">
            <a href="#">
              <div class="text-[#60748a]" data-icon="TwitterLogo" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M247.39,68.94A8,8,0,0,0,240,64H209.57A48.66,48.66,0,0,0,168.1,40a46.91,46.91,0,0,0-33.75,13.7A47.9,47.9,0,0,0,120,88v6.09C79.74,83.47,46.81,50.72,46.46,50.37a8,8,0,0,0-13.65,4.92c-4.31,47.79,9.57,79.77,22,98.18a110.93,110.93,0,0,0,21.88,24.2c-15.23,17.53-39.21,26.74-39.47,26.84a8,8,0,0,0-3.85,11.93c.75,1.12,3.75,5.05,11.08,8.72C53.51,229.7,65.48,232,80,232c70.67,0,129.72-54.42,135.75-124.44l29.91-29.9A8,8,0,0,0,247.39,68.94Zm-45,29.41a8,8,0,0,0-2.32,5.14C196,166.58,143.28,216,80,216c-10.56,0-18-1.4-23.22-3.08,11.51-6.25,27.56-17,37.88-32.48A8,8,0,0,0,92,169.08c-.47-.27-43.91-26.34-44-96,16,13,45.25,33.17,78.67,38.79A8,8,0,0,0,136,104V88a32,32,0,0,1,9.6-22.92A30.94,30.94,0,0,1,167.9,56c12.66.16,24.49,7.88,29.44,19.21A8,8,0,0,0,204.67,80h16Z"
                  ></path>
                </svg>
              </div>
            </a>
            <a href="#">
              <div class="text-[#60748a]" data-icon="LinkedinLogo" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"
                  ></path>
                </svg>
              </div>
            </a>
            <a href="#">
              <div class="text-[#60748a]" data-icon="InstagramLogo" data-size="24px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                  <path
                    d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"
                  ></path>
                </svg>
              </div>
            </a>
          </div>
          <p class="text-[#60748a] text-base font-normal leading-normal">@2023 Sarah Chen. All rights reserved.</p>
        </footer>
      </div>
      <div><div class="h-5 bg-white"></div></div>
    </div>
<?php 
get_footer();

?>