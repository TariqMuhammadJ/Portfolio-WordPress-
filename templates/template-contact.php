<div class="flex justify-center px-4">
  <form class="w-full max-w-[480px] space-y-4 py-6">
    <!-- Name Field -->
    <label class="flex flex-col">
      <p class="text-[#111418] text-base font-medium pb-2">Name</p>
      <input
        type="text"
        name="name"
        placeholder="Your name"
        class="form-input w-full rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 h-14"
      />
    </label>

    <!-- Email Field -->
    <label class="flex flex-col">
      <p class="text-[#111418] text-base font-medium pb-2">Email</p>
      <input
        type="email"
        name="email"
        placeholder="Your email"
        class="form-input w-full rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 h-14"
      />
    </label>

    <!-- Message Field -->
    <label class="flex flex-col">
      <p class="text-[#111418] text-base font-medium pb-2">Message</p>
      <textarea
        name="message"
        placeholder="Your message"
        class="form-input w-full min-h-36 rounded-lg border border-[#dbe0e6] bg-white p-[15px] text-base text-[#111418] placeholder:text-[#60748a] focus:border-[#dbe0e6] focus:outline-none focus:ring-0 resize-none"
      ></textarea>
    </label>

    <!-- Checkbox -->
    <div class="flex items-center gap-3">
      <input
        type="checkbox"
        id="not-robot"
        class="h-5 w-5 rounded border-2 border-[#dbe0e6] text-[#0c77f2] focus:outline-none focus:ring-0"
      />
      <label for="not-robot" class="text-[#111418] text-base font-normal">
        I'm not a robot
      </label>
    </div>

    <!-- Submit Button -->
    <div class="flex justify-end">
      <button
        type="submit"
        class="min-w-[84px] h-10 px-4 rounded-lg bg-[#0c77f2] text-white text-sm font-bold tracking-[0.015em]"
      >
        <span class="truncate">Send</span>
      </button>
    </div>
  </form>
</div>
