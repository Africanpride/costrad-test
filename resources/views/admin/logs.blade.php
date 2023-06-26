<x-app-layout>
    <x-admin.pageheader model-name="Security Logs" description="Authentication Logs" add-button="false" class="mx-4">
        <x-heroicon-o-finger-print class="w-6 h-6 text-current" />
        </x-admin-pageheader>

        <div class="p-4 space-y-4">
            <livewire:admin.authentication-log />
        </div>
</x-app-layout>
