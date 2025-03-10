<div class="flex justify-center">
    <div class="w-92">
        <flux:button wire:click="$dispatch('openModal', { component: 'modal-opened' })">Wire Elements Modal</flux:button>
        

        <flux:modal.trigger name="edit-profile">
            <flux:button>Flux Modal</flux:button>
        </flux:modal.trigger>

        <flux:modal name="edit-profile" class="md:w-96">
            <div class="p-8">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Update profile</flux:heading>
                        <flux:subheading>Make changes to your personal details.</flux:subheading>
                    </div>

                    <flux:input label="Name" placeholder="Your name" />

                    <flux:date-picker />

                    <div class="flex">
                        <flux:spacer />

                        <flux:button type="submit" variant="primary">Save changes</flux:button>
                    </div>
                </div>

                <flux:autocomplete wire:model="state" label="State of residence">
                        <flux:autocomplete.item>Alabama</flux:autocomplete.item>
                        <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
                        <flux:autocomplete.item>California</flux:autocomplete.item>
                        <!-- ... -->
                    </flux:autocomplete>
            </div>
        </flux:modal>
        <flux:date-picker />
        <flux:autocomplete wire:model="state" label="State of residence">
            <flux:autocomplete.item>Alabama</flux:autocomplete.item>
            <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
            <flux:autocomplete.item>California</flux:autocomplete.item>
            <!-- ... -->
        </flux:autocomplete>
        <div class="h-[3000px]"></div>
    </div>
</div>
