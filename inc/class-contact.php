<?php 

class ContactForm{
    protected $site_key;
    protected $secret_key;

    public function __construct(){
        $this->site_key = RECAPTCHA_SITE_KEY;
        $this->secret_key = RECAPTCHA_SECRET_KEY;
        add_action('contact_form', [$this, 'contact_form_render']);
        add_action('template_redirect', [$this, 'handle_form']);
    }


    public function contact_form_render(){
        ?>
        <div class="flex justify-center px-4">
        <form class="w-full max-w-[480px] space-y-4 py-6" action="<?php the_permalink(); ?>" method="post">
            <!-- Name Field -->
            <label class="flex flex-col">
            <p class="text-[#111418] text-base font-medium pb-2">Name</p>
            <input
                type="text"
                name="portfolio_name"
                placeholder="Your name"
                class="form-input w-full rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 h-14"
            />
            </label>

            <!-- Email Field -->
            <label class="flex flex-col">
            <p class="text-[#111418] text-base font-medium pb-2">Email</p>
            <input
                type="email"
                name="portfolio_email"
                placeholder="Your email"
                class="form-input w-full rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 h-14"
            />
            </label>

            <!-- Message Field -->
            <label class="flex flex-col">
            <p class="text-[#111418] text-base font-medium pb-2">Message</p>
            <textarea
                name="portfolio_message"
                placeholder="Your message"
                class="form-input w-full min-h-36 rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 resize-none"
            ></textarea>
            </label>

            <!-- Checkbox -->
            <div class="flex items-center gap-3">
                <div  class="g-recaptcha" data-sitekey="<?php echo $this->site_key; ?>"></div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
            <button
                type="submit"
                name="contact_form"
                value="send"
                class="min-w-[84px] h-10 px-4 rounded-lg bg-[#0c77f2] text-white text-sm font-bold tracking-[0.015em]"
            >
                <span class="truncate">Send</span>
            </button>
            </div>
            <?php do_action('yourbrand_contact_form'); ?>
        </form>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </div>
    <?php
     
    }


    public function handle_form(){
        if(isset($_POST['contact_form'])){
            $recaptcha_response = $_POST['g-recaptcha-response'];
            if($recaptcha_response){
                $response = wp_remote_post('https://www.google.com/recaptcha/api/siteverify', [
                    'body' => [
                        'secret' => $this->secret_key,
                        'response' => $recaptcha_response,
                        'remoteip' => $_SERVER['REMOTE_ADDR']
                    ]
                    ]);
                $response_body = json_decode(wp_remote_retrieve_body($response), true);
                if(!$response_body['success']){
                   wp_die('RECAPTCHA verification failed - please try again');
                }

                $name = sanitize_text_field($_POST['portfolio_name']);
                $email = sanitize_text_field($_POST['portfolio_email']);
                $message = sanitize_textarea_field($_POST['portfolio_message']);
                wp_mail(get_option('admin_email'), 'New Contact Message', $message);
                add_action('yourbrand_contact_form', function(){
                    echo "<p class='success'>Thank you! we'll be in touch shortly.</p>";
                }, 5);
                
            }
        }
    }
}

?>