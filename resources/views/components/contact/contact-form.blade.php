<x-fade-in class="lg:order-last">
    <form>
        <h2 class="font-display text-base font-semibold text-neutral-950">
            Work inquiries
        </h2>
        <div class="isolate mt-6 -space-y-px rounded-2xl bg-white/50">
            <x-contact.text-input label="Name" name="name" autoComplete="name" />
            <x-contact.text-input label="Email" type="email" name="email" autoComplete="email" />
            <x-contact.text-input label="Company" name="company" autoComplete="organization" />
            <x-contact.text-input label="Phone" type="tel" name="phone" autoComplete="tel" />
            <x-contact.text-input label="Message" name="message" />
            <div class="border border-neutral-300 px-6 py-8 first:rounded-t-2xl last:rounded-b-2xl">
                <fieldset>
                    <legend class="text-base/6 text-neutral-500">Budget</legend>
                    <div class="mt-6 grid grid-cols-1 gap-8 sm:grid-cols-2">
                        <x-contact.radio-input label="$25K – $50K" name="budget" value="25" />
                        <x-contact.radio-input label="$50K – $100K" name="budget" value="50" />
                        <x-contact.radio-input label="$100K – $150K" name="budget" value="100" />
                        <x-contact.radio-input label="More than $150K" name="budget" value="150" />
                    </div>
                </fieldset>
            </div>
        </div>
        <x-button type="submit" class="mt-10">
            Let’s work together
        </x-button>
    </form>
</x-fade-in>